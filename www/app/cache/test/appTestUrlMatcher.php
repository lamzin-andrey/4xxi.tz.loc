<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

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
