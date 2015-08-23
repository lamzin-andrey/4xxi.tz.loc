<?php

namespace StudyApp\OAuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use StudyApp\OAuthBundle\Entity\OauthService;
use StudyApp\OAuthBundle\Entity\OauthUser;

use Facebook\FacebookRequest;
use Facebook\FacebookSession;
use StudyApp\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller
{
    /**
     * @Route("/oauth/facebook", name="oauth_facebook")
     * @Template("StudyAppSecurityBundle:Default:fb_login.html.twig")
     */
    public function facebookLoginAction(Request $request)
    {
            if ( !$token = $request->request->get('access_token') ) { 
                    return array('error' => '', 'is_auth' => false);
            } else {
                    $url = $this->_fbookLoginOrRegister($token);
                    $response = new Response( json_encode( array('redirectUrl' => $url) ) );
                    $response->headers->set('Content-Type', 'application/json');
                    return $response;
            }
    }
    /**
     * Добавляет пользователя с facebook_id в систему, если его там ещё нет
     * Авторизует пользователя 
     * @param string $access_token - access_token from facebook
     * @return string redirect_url
    */
    private function _fbookLoginOrRegister($access_token)
    {	
    	$data = @file_get_contents('https://graph.facebook.com/me?access_token=' . $access_token);
    	
    	//если пользователь авторизован, редиректим на home
    	$is_auth = is_object( $this->get('security.context')->getToken()->getUser() );
    	if ($is_auth) {
    		return $this->generateUrl('study_app_home');
    	}
    	$data = json_decode($data);
    	//берем fb_id
    	$fb_id = isset($data->id) ? $data->id : false;
    	if (!$fb_id) {
    		return $this->generateUrl('login');
    	}
    	//смотрим в справочнике веб-сервисов авторизации идентификатор fb
    	$fb_service_id = $this->_getFacebookServiceId();
    	//получаем из oauth uid в котором srv_id = fb AND user_id = fb_id
    	$oauth_repository = $this->getDoctrine()->getRepository('StudyAppOAuthBundle:OauthUser');
    	$oauth = $oauth_repository->findOneBy( array('oauth_service_id' => $fb_service_id, 'oauth_service_user_id' => $fb_id) );
    	if (!$oauth) {
    		$user = $this->_registerUserFromFacebookData($oauth_repository, $fb_id, $fb_service_id, $data);
    	} else {
    		$user = $this->getDoctrine()->getRepository('StudyAppUserBundle:User')->find( $oauth->getUserId() );
    	}
    	if (!$user) {
    		return $this->generateUrl('study_app_home');
    	}
    	//авторизуем пользователя этим uid
    	$auth_token = new UsernamePasswordToken($user, $user->getPassword(), 'secured_area', array('ROLE_USER') );
    	$auth_token->setUser($user);
    	$this->get('security.context')->setToken($auth_token);
    	$this->_loadUserFBookFriends($access_token);
    	return $this->generateUrl('study_app_home');
    }
     private function _loadUserFbookFriends($access_token) {
    	$fb_friends = array();
    	$client_id = $app_id = $this->container->getParameter('oauth')['facebook']['app_id'];
    	$client_secret = $app_secret = $this->container->getParameter('oauth')['facebook']['app_secret'];
    	
    	FacebookSession::setDefaultApplication($app_id, $app_secret);
    	
    	$fb_session = new FacebookSession($access_token);
    	 
    	$app_access_token = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id='. $client_id .'&client_secret='. $client_secret .'&grant_type=client_credentials&redirect_uri=http://'. $this->getRequest()->getHost() .'/' . $this->generateUrl('oauth_facebook'));
    	$request = new FacebookRequest(
    			$fb_session,
    			'GET',
    			'/'.$app_id .'/accounts/test-users?' . $app_access_token
    	);
    	$response = $request->execute();
    	$graphObject = $response->getGraphObject();
    	$test_users_data = $graphObject->asArray();
    	//var_dump($test_users_data);die('L = ' . __LINE__);
    	
    	if (isset($test_users_data['data']) && is_array($test_users_data['data']) && count($test_users_data['data']) ) {
    		//search user_access_token
    		$user_access_token = '';
    		foreach ($test_users_data['data'] as $test_user) {
    			if (isset($test_user->id) && isset($test_user->access_token)) {
    				$user_access_token = $test_user->access_token;
    				break;
    			}
    		}
    		if ($user_access_token) {
    			$test_user_session = new FacebookSession($user_access_token);
    			foreach ($test_users_data['data'] as $test_user) {
    				if (isset($test_user->id)) {
    					$request = new FacebookRequest(
    							$test_user_session,
    							'GET',
    							'/'. $test_user->id .'/?access_token=' .$user_access_token
    					);
    					$response = $request->execute();
    					$graphObject = $response->getGraphObject();
    					$fb_friends[] = $graphObject->asArray();
    				}
    			}
    		}
    	}
    	$this->getRequest()->getSession()->set('fb_friends', $fb_friends);
    }
    /**
     * @return int
    */
    private function _getFacebookServiceId()
    {
    	$service_name = 'facebook';
    	$repository = $this->getDoctrine()->getRepository('StudyAppOAuthBundle:OauthService');
    	$web_service = $repository->findOneBy( array('string_id' => $service_name) );
    	if (!$web_service) {
    		$web_service = $this->_registerWebService($service_name);
    	}
    	return $web_service->getId();
    }
    /**
     * @param string $service_name
     * @return StudyAppOAuthBundle:OauthService
     */
    private function _registerWebService($service_name)
    {
    	$em = $this->getDoctrine()->getManager();
    	$service = new OauthService();
    	$service->setStringId($service_name);
    	$em->persist($service);
    	$em->flush();
    	$repository = $this->getDoctrine()->getRepository('StudyAppOAuthBundle:OauthService');
    	$service = $repository->findOneBy( array('string_id' => $service_name) );
    	return $service;
    }
    /**
     * @param Manager $ouath_repository
     * @param int $fb_id
     * @param int $fb_service_id
     * @param StdClass $data
     * @return StudyAppUserBundle:User
     */
    private function _registerUserFromFacebookData($ouath_repository, $fb_id, $fb_service_id, $data)
    {
    	$username = md5($fb_id);
    	$user = new User();
    	$user->setFirstName($data->first_name);
    	$user->setLastName($data->last_name);
    	$user->setEmailIsVerify(1);
    	$user->setRole(1);
    	$user->setUsername($username);
    	$user->setPassword($username);
    	$user->setActivationCode($username);
    	$user->setEmail('null@null.null');
    	
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($user);
    	$em->flush();
    	$repository = $this->getDoctrine()->getRepository('StudyAppUserBundle:User');
    	$user = $repository->findOneByUsername($username);
    	
    	$oauth = new OauthUser();
    	$oauth->setOauthServiceId($fb_service_id);
    	$oauth->setOauthServiceUserId($fb_id);
    	$oauth->setUserId($user->getId());
    	$em->persist($oauth);
    	$em->flush();
    	return $user;
    }
}
