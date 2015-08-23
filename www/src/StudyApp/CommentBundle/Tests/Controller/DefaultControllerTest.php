<?php
namespace StudyApp\CommentBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use StudyApp\UserBundle\Entity\User;
class DefaultControllerTest extends WebTestCase
{
    public function testAddComment()
    {
        $client = static::createClient();
        $t = $client->getContainer()->get('translator');
        //valid comment
        $user = $this->_createAndLoginUser('123456', $client, $em, $r);
        $crawler = $client->request('GET', '/comments');
        
        $comment_text = "test comment " . uniqid( date('YmdHis') );
        $form = $crawler->selectButton($t->trans('Add comment'))->form(array(
            'comment_type[body]' => $comment_text
        ));
        $client->submit($form);
        
        $crawler = $client->request('GET', '/comments');
        
        $this->assertTrue($crawler->filter('html:contains("' . $user->getFirstName() . ' ' . $user->getLastName() . '")')->count() > 0);
        $this->assertTrue($crawler->filter('html:contains("' . $comment_text . '")')->count() > 0);
        
        //empty body
        $form = $crawler->selectButton($t->trans('Add comment'))->form(array(
            'comment_type[body]' => ''
        ));
        $crawler = $client->submit($form);
        $this->assertTrue($crawler->filter('html:contains("Комментарий должен содержать текст")')->count() > 0);
        
        $this->_deleteTestUser($user, $em);
    }
    
    public function testCommentChildsAction()
    {
        $client = static::createClient();
        $t = $client->getContainer()->get('translator');
        //add comment
        $user = $this->_createAndLoginUser('123456', $client, $em, $r);
        $crawler = $client->request('GET', '/comments');
        
        $comment_text = "test comment " . uniqid( date('YmdHis') );
        $form = $crawler->selectButton($t->trans('Add comment'))->form(array(
            'comment_type[body]' => $comment_text
        ));
        $client->submit($form);
        
        $crawler = $client->request('GET', '/comments');
        
        //add child comment
        $this->_getEnvParam($client, $em2, $comments_rep, 'StudyAppCommentBundle:Comment');
        $user_comments = $comments_rep->findBy(array('user_id' => $user->getId()));
        
        $parent_id = $user_comments[0]->getId();
        
        
        
        $comment_child_text = "test child comment " . uniqid( date('YmdHis') );
        $form = $crawler->selectButton($t->trans('Add comment'))->form(array(
            'comment_type[body]' => $comment_child_text,
            'comment_type[parent_id]' => $parent_id
        ));
        $crawler = $client->submit($form);
        //get child comments
        $client->request('GET', '/comments/' . $parent_id . '/firstchilds');
        $response = $client->getResponse();
        $data = json_decode($response->getContent());
        $user_full_name = $user->getFirstName() . ' '. $user->getLastName();
        $this->assertTrue($data->list[0]->body == $comment_child_text);
        $this->assertTrue($data->list[0]->user_name == $user_full_name);
        $this->assertTrue($data->list[0]->parent_id == $parent_id);
        $this->_deleteTestUser($user, $em);
    }
    /*var_dump($user_comments);
        $this->_deleteTestUser($user, $em);
        die;*/
    public function testUpdateAction()
    {
        $client = static::createClient();
        $t = $client->getContainer()->get('translator');
        //add comment
        $user = $this->_createAndLoginUser('123456', $client, $em, $r);
        $crawler = $client->request('GET', '/comments');
        
        $comment_text = "test comment " . uniqid( date('YmdHis') );
        $form = $crawler->selectButton($t->trans('Add comment'))->form(array(
            'comment_type[body]' => $comment_text
        ));
        $client->submit($form);
        
        $crawler = $client->request('GET', '/comments');
        //update comment
        $this->_getEnvParam($client, $em2, $comments_rep, 'StudyAppCommentBundle:Comment');
        $user_comments = $comments_rep->findBy(array('user_id' => $user->getId()));
        
        $comment_id = $user_comments[0]->getId();
        
        $comment_update_text = "test child comment " . uniqid( date('YmdHis') );
        $form = $crawler->selectButton($t->trans('Add comment'))->form(array(
            'comment_type[body]' => $comment_update_text,
            'comment_type[id]' => $comment_id
        ), 'PATCH');
        $crawler = $client->submit($form);
        //check updated
        $crawler = $client->request('GET', '/comments');
        $this->assertTrue($crawler->filter('html:contains("' . $comment_update_text . '")')->count() > 0);
        $this->_deleteTestUser($user, $em);
    }
    
    private function _createAndLoginUser($password, &$client, &$em, &$r)
    {
        $t = $client->getContainer()->get('translator');
        $user = $this->_createTestUserEx($password, $client, $em, $r);
        $crawler = $client->request('GET', '/');
        $form = $crawler->selectButton($t->trans('Login'))->form(array(
            '_username' => $user->getUsername(),
            '_password' => $password
        ));
        $client->submit($form);
        return $user;
    }
    
    private function _createTestUserEx($password, $client, &$em, &$r)
    {
        $this->_getEnvParam($client, $em, $r, 'StudyAppUserBundle:User');
        return $this->_createTestUser($em, $r, $uname = 'tstuser' . date('His'), $password, $client);
        
    }
    private function _createTestUser($em, $r, $username = null, $password = null, $client = null)
    {
        $user = new User();
        $user->setEmailIsVerify(1);
        $code = '1';
        $user->setFirstName( md5( uniqid(date('YmdHis') . $code) ) );
        $user->setEmail( 'test' . md5( uniqid(date('YmdHis') . $code) ) . '@test.test' );
        $user->setLastName( md5( uniqid(date('YmdHis') . $code) ) );
        $user->setRole(1);
        $username = $username ? $username : md5( uniqid(date('YmdHis') . $code) );
        if (!$password && !$client) {
            $password = $username;
        } elseif($client){
            $encoder = $client->getContainer()->get('security.encoder_factory')->getEncoder($user);
            $password = $encoder->encodePassword($password, $user->getSalt());
        }
        $user->setUsername( $username );
        $user->setPassword( $password );
        $user->setActivationCode( md5( uniqid(date('YmdHis') . $code) ) );
        $em->persist($user);
        $em->flush();
        return $user;
    }
    
    private function _getEnvParam($client, &$em, &$r, $scope)
    {
        $doctrine = $client->getContainer()->get("doctrine");
        $em = $doctrine->getEntityManager();
        $r = $doctrine->getRepository($scope);
    }
    private function _deleteTestUser($user, $em)
    {
        $em->createQuery("DELETE FROM StudyAppCommentBundle:Comment AS u WHERE u.user_id = {$user->getId()}")->getSingleResult();
        $em->createQuery("DELETE FROM StudyAppUserBundle:User AS u WHERE u.id = {$user->getId()}")->getSingleResult();
    }
}
