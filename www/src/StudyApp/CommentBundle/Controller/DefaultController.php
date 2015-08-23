<?php

namespace StudyApp\CommentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use StudyApp\CommentBundle\Form\Type\CommentType;
use StudyApp\CommentBundle\Entity\Comment;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    /**
	 * @Route("/comments/{parent_id}/firstchilds", name="study_app_ccomment_firstchild_view")
	 */
	public function commentChildsAction($parent_id, Request $request)
	{
		$parent_id = intval($parent_id);
		if ($parent_id && $request->getMethod() == 'GET' && $comments = $this->getDoctrine()->getRepository('StudyAppCommentBundle:Comment')->findBy( array('parent_id' => $parent_id)  )) {
			$data = array();
			foreach ($comments as $comment ) {
				$created_at = explode(' ', $comment->getCreatedAt());
				$date = explode('-', $created_at[0]);
				$time = explode(':', $created_at[1]);
                				$item = array(
						'id' => $comment->getId(),
						'body' => $comment->getBody(),
						'user_name' =>   $comment->getUser()->getFirstName() . ' ' . $comment->getUser()->getLastName(),
						'parent_id' =>   $comment->getParentId(),
						'count_child' => $comment->getCountChild(),
						'date' => $date[2] . ' июня ' . $date[0] . ' в ' . $time[0] . ' ' . $time[1]
				);
				$data[] = $item;
			}
			return $this->_json(array('list' => $data));
		}
		throw $this->createNotFoundException('The comment does not exist');
	}
    /**
     * @Route("/comments", name="study_app_comments_update", requirements={ "_method" : "PATCH" })
     * @Template("StudyAppCommentBundle:Default:index.html.twig")
     */
    public function updateAction()
    {
        $request = $this->getRequest();
        $has_error = false;
        $form = $this->createForm( new CommentType('PATCH'), new Comment() );
        $new_comment = null;
        if ( $request->getMethod() == 'PATCH' ) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $new_comment = $this->getDoctrine()->getRepository('StudyAppCommentBundle:Comment')->find($form->getData()->getId());
                if ($new_comment->getId() && $new_comment->getBody() != $form->getData()->getBody()) {
                    $new_comment->setBody( $form->getData()->getBody() );
                    $em = $this->getDoctrine()->getEntityManager();
                    $em->persist($new_comment);
                    $em->flush();
                }
            } else {
                $has_error = true;
            }
        }
        if ($request->request->get('xhr')) {
            if ($has_error) {
                return $this->_json( array(
                    'errors' => $this->_prepareAjaxError( $form->getErrors(true, true) )
                ) );
            } elseif($new_comment) {
                $data = $new_comment->asArray();
                $data['user_name'] = $data['user']['first_name'] . ' ' . $data['user']['last_name'];
                $data['user_pic'] = $request->getUriForPath('/img/5.jpeg');
                return $this->_json($data);
            }
        }
        return $this->pageAction(1, $form, $has_error);
    }
    /**
     * @Route("/comments", name="study_app_comments_add", requirements={ "_method" : "POST" })
     * @Template("StudyAppCommentBundle:Default:index.html.twig")
     */
    public function createAction()
    {
        $request = $this->getRequest();
        $has_error = false;
        if ($request->getMethod() == 'POST') {
            $form = $this->createForm( new CommentType(), new Comment() );
            $form->handleRequest($request);
            if ($form->isValid()) {
                $comment = $form->getData();
                $comment->setPath('');
                $parent_path = '';
                if ($parent_id = $comment->getParentId()) {
                    $parent_comment = $this->getDoctrine()->getRepository( get_class($comment))->find($parent_id);
                    if ($parent_comment) {
                        $s = $parent_comment->getPath();
                        $parent_path = $s .  $parent_id . '/';
                        if (!$s) {
                            $parent_path = '/' . $parent_id . '/';
                        }
                        $comment->setPath( $parent_path );
                    }
                } else {
                    $comment->setParentId(0);
                }
                $comment->setUserId( $this->getUser()->getId() );
                $comment->setUser($this->getUser());
                $comment->setResourceUrl( $this->_getResourceUrl($request) );
                if (!$comment->getResourceUrl()) {
                    $form->addError( new FormError( $this->get('translator')->trans('Unknown resource') ) );
                    $has_error = true;
                } 
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getEntityManager();
                    $em->persist($comment);
                    $em->flush();
                    if ($parent_id) {
                        //update count child
                        $ids_data = explode('/', $parent_path);
                        $ids = array();
                        $count = 0;
                        foreach ($ids_data as $id) {
                            $id = intval($id);
                            if ($id) {
                                $ids[] = $id;
                                $count++;
                            }
                        }
                        if ($count) {
                            $sql_query = 'UPDATE StudyAppCommentBundle:Comment AS c SET c.count_child = c.count_child + 1 WHERE c.id IN ('. join(',', $ids) .')';
                            $em->createQuery($sql_query)->execute();
                        }
                    }
                    if ($request->request->get('xhr')) {
                        $data = $comment->asArray();
                        $data['user_name'] = $data['user']['first_name'] . ' ' . $data['user']['last_name'];
                        $data['user_pic'] = $request->getUriForPath('/img/5.jpeg');
                        return $this->_json($data);
                    }
                }
                    
            } else {
                $has_error = true;
            }
        }
        if ($has_error && $request->request->get('xhr')) {
            return $this->_json( array(
                'errors' => $this->_prepareAjaxError( $form->getErrors(true, true) )
            ) );
        }
        return $this->pageAction(1, $form, $has_error);
    }
    /**
     * json
     * @param integer $id
     * @Route("/comments/{id}", name="study_app_comment", requirements={ "_method" : "GET" })
     */
    public function commentAction($id)
    {
        $comment = $this->getDoctrine()->getRepository('StudyAppCommentBundle:Comment')->find($id);
        return $this->_json($comment->asArray());
    }
    /**
     * @Route("/comments", name="study_app_comments", requirements={ "_method" : "GET" })
     * @Template()
     */
    public function indexAction()
    {
        return $this->pageAction(1);
    }
    /**
     * @Route("/comments/page/{page}", name="study_app_comments_page", requirements={ "_method" : "GET" })
     * @Template("StudyAppCommentBundle:Default:index.html.twig")
     */
    public function pageAction($page, $form = null, $has_errors = false)
    {
        $raw_page = $page;
		$page = (int)$page;
		$format = str_replace($page, '', $raw_page);
        $limit = 10;
        $offset = ($page - 1) * $limit;
        if (!$form) {
            $form = $this->createForm( new CommentType(), new Comment() );
        }
        $request = $this->getRequest();
        $url = $request->getBaseUrl() .  $request->getPathInfo();
        $url = str_replace('/page/' . $page, '', $url);
        if ($format == '.json') {
            $url = $this->_getResourceUrl($request);
        }
        $comments = $this->getDoctrine()->getRepository('StudyAppCommentBundle:Comment')->findBy(
            array('resource_url' => $url, 'parent_id' => 0), 
            array('id' => 'desc'),
            $limit,
            $offset
        );
        $variables = array(
            'comments' => $comments,
            'count'    => count($comments),
            'has_errors' => $has_errors
        );
        $total_comments = current($this->getDoctrine()->getEntityManager()->createQuery('SELECT COUNT(c.id) FROM StudyAppCommentBundle:Comment AS c WHERE c.parent_id = 0 AND c.resource_url = \'' . $url . '\'')->getSingleResult());
		$variables['pages_total'] = ceil($total_comments / $limit);
        if ($format == '.json') {
			$list = array();
			foreach ($variables['comments'] as $comment) {
				$created_at = explode(' ', $comment->getCreatedAt());
				$date = explode('-', $created_at[0]);
				$time = explode(':', $created_at[1]);
				$item = array(
						'id' => $comment->getId(),
						'body' => $comment->getBody(),
						'user_name' =>   $comment->getUser()->getFirstName() . ' ' . $comment->getUser()->getLastName(),
						'parent_id' =>   $comment->getParentId(),
						'count_child' => $comment->getCountChild(),
						'date' => $date[2] . ' июня ' . $date[0] . ' в ' . $time[0] . ' ' . $time[1]
				);
				$list[] = $item;
			}
			$variables['comments'] = $list;
			return $this->_json($variables); 
		}
        $variables['form'] = $form->createView();
        return $variables;
    }
    
    /**
     * get resource url from referrer
    */
    private function _getResourceUrl($request) 
    {
        $data = parse_url( $request->headers->get('referer') );
        if (isset($data['path']) && isset($data['host']) && $data['host'] == $request->getHost()) {
            return ($data['path'] == '/' ? '/' : preg_replace("#/$#", '', $data['path']));
        }
        return false;
    }
    /**
     * json response
    */
    private function _json($data) 
    {
        $data = json_encode($data);
        $response = new Response($data);
        $response->headers->set("Content-Type", "application/json");
        return $response;
    }
    /**
	 * Получает сообщения из ConstraintsViolationList
	 * @param ConstraintViolationList $data
	 * @return array
	 */
	private function _prepareAjaxError($data) {
		$count = $data->count();
		$result = array();
		foreach ($data as $_error) {
			$result[] = $_error->getMessage();
		}
		return $result;
	}
}
