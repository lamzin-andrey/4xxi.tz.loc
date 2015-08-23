<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // studyapp_cron_cron_cron
        if ($pathinfo === '/cron') {
            return array (  '_controller' => 'StudyApp\\CronBundle\\Controller\\CronController::cronAction',  '_route' => 'studyapp_cron_cron_cron',);
        }

        // studyapp_cron_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'studyapp_cron_default_index')), array (  '_controller' => 'StudyApp\\CronBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/comments')) {
            // study_app_ccomment_firstchild_view
            if (preg_match('#^/comments/(?P<parent_id>[^/]++)/firstchilds$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_app_ccomment_firstchild_view')), array (  '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::commentChildsAction',));
            }

            // study_app_comments_update
            if ($pathinfo === '/comments') {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_study_app_comments_update;
                }

                return array (  '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::updateAction',  '_route' => 'study_app_comments_update',);
            }
            not_study_app_comments_update:

            // study_app_comments_add
            if ($pathinfo === '/comments') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_study_app_comments_add;
                }

                return array (  '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::createAction',  '_route' => 'study_app_comments_add',);
            }
            not_study_app_comments_add:

            // study_app_comment
            if (preg_match('#^/comments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_study_app_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_app_comment')), array (  '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::commentAction',));
            }
            not_study_app_comment:

            // study_app_comments
            if ($pathinfo === '/comments') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_study_app_comments;
                }

                return array (  '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::indexAction',  '_route' => 'study_app_comments',);
            }
            not_study_app_comments:

            // study_app_comments_page
            if (0 === strpos($pathinfo, '/comments/page') && preg_match('#^/comments/page/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_study_app_comments_page;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_app_comments_page')), array (  'form' => NULL,  'has_errors' => false,  '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::pageAction',));
            }
            not_study_app_comments_page:

        }

        // oauth_facebook
        if ($pathinfo === '/oauth/facebook') {
            return array (  '_controller' => 'StudyApp\\OAuthBundle\\Controller\\DefaultController::facebookLoginAction',  '_route' => 'oauth_facebook',);
        }

        // study_app_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'study_app_home');
            }

            return array (  '_controller' => 'StudyApp\\StudyAppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'study_app_home',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // profile_update
            if ($pathinfo === '/profile') {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_profile_update;
                }

                return array (  '_controller' => 'StudyApp\\UserBundle\\Controller\\DefaultController::changeProfileAction',  '_route' => 'profile_update',);
            }
            not_profile_update:

            // profile
            if ($pathinfo === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_profile;
                }

                return array (  '_controller' => 'StudyApp\\UserBundle\\Controller\\DefaultController::profileAction',  '_route' => 'profile',);
            }
            not_profile:

        }

        // study_app_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'StudyApp\\SecurityBundle\\Controller\\DefaultController::loginAction',  '_route' => 'study_app_login',);
        }

        // study_app_signup
        if ($pathinfo === '/registration') {
            return array (  '_controller' => 'StudyApp\\SecurityBundle\\Controller\\DefaultController::signupAction',  '_route' => 'study_app_signup',);
        }

        // study_app_user_create
        if ($pathinfo === '/user/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_study_app_user_create;
            }

            return array (  '_controller' => 'StudyApp\\SecurityBundle\\Controller\\DefaultController::createAction',  '_route' => 'study_app_user_create',);
        }
        not_study_app_user_create:

        // study_app_email_sended
        if ($pathinfo === '/emailsended') {
            return array (  '_controller' => 'StudyApp\\SecurityBundle\\Controller\\DefaultController::emailSendedAction',  '_route' => 'study_app_email_sended',);
        }

        // study_app_confirm_email
        if (0 === strpos($pathinfo, '/confirmemail') && preg_match('#^/confirmemail/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'study_app_confirm_email')), array (  '_controller' => 'StudyApp\\SecurityBundle\\Controller\\DefaultController::emailConfirmAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array('_route' => 'login');
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
