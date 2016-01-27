<?php

namespace StudyApp\StudyAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use StudyApp\UserBundle\Entity\User;
use StudyApp\CommentBundle\Entity\Comment;
use StudyApp\CommentBundle\Form\Type\CommentType;

class DefaultController extends Controller
{
     /**
     * @Route("/", name="study_app_home")
     * @Template()
    */
    public function indexAction()
    {
        $fb_friends = ($this->getRequest()->getSession()->has('fb_friends') ? $this->getRequest()->getSession()->get('fb_friends') : array());
    	
        $result = array(
    		'is_auth' => is_object($this->get('security.context')->getToken()->getUser()),
    		'pages_total' => 0,
    		'count' => 0,
    		'error' => null,
    		'has_errors' => null,
    		'host' => $this->getRequest()->getHost(),
    		'username' => null,
            'login_form' => $this->createForm(new \StudyApp\UserBundle\Form\Type\UserRegistrationType(), new User())->createView(),
    		'facebook_client_id' => $this->container->getParameter('oauth')['facebook']['app_id'],
    		'oauth_facebook_route' => $this->generateUrl('oauth_facebook'),
            'form' => $this->createForm( new CommentType(), new Comment() )->createView(),
            'fb_friends'   => $fb_friends,
            'template'     => 'main'
    	);
        return $result;
    }

    /**
     * @Route("/portfels", name="study_app_portfels")
     * @Template("StudyAppStudyAppBundle:Default:portfels.html.twig")
     */
    public function portfelsAction()
    {
        $fb_friends = ($this->getRequest()->getSession()->has('fb_friends') ? $this->getRequest()->getSession()->get('fb_friends') : array());

        $result = array(
            'is_auth' => is_object($this->get('security.context')->getToken()->getUser()),
            'pages_total' => 0,
            'count' => 0,
            'error' => null,
            'has_errors' => null,
            'host' => $this->getRequest()->getHost(),
            'username' => null,
            //'login_form' => $this->createForm(new \StudyApp\UserBundle\Form\Type\UserRegistrationType(), new User())->createView(),
            //'facebook_client_id' => $this->container->getParameter('oauth')['facebook']['app_id'],
            //'oauth_facebook_route' => $this->generateUrl('oauth_facebook'),
            //'form' => $this->createForm( new CommentType(), new Comment() )->createView(),
            'fb_friends'   => $fb_friends,
            'template'     => 'portfels_list'
        );
        return $result;
    }

}
