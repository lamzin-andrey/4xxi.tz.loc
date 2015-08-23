<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'studyapp_cron_cron_cron' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\CronBundle\\Controller\\CronController::cronAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cron',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'studyapp_cron_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'StudyApp\\CronBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_ccomment_firstchild_view' => array (  0 =>   array (    0 => 'parent_id',  ),  1 =>   array (    '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::commentChildsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/firstchilds',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'parent_id',    ),    2 =>     array (      0 => 'text',      1 => '/comments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_comments_update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::updateAction',  ),  2 =>   array (    '_method' => 'PATCH',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_comments_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_comment' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::commentAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/comments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_comments' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_comments_page' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'form' => NULL,    'has_errors' => false,    '_controller' => 'StudyApp\\CommentBundle\\Controller\\DefaultController::pageAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/comments/page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oauth_facebook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\OAuthBundle\\Controller\\DefaultController::facebookLoginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/oauth/facebook',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\StudyAppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile_update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\UserBundle\\Controller\\DefaultController::changeProfileAction',  ),  2 =>   array (    '_method' => 'PATCH',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\UserBundle\\Controller\\DefaultController::profileAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\SecurityBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_signup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\SecurityBundle\\Controller\\DefaultController::signupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registration',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\SecurityBundle\\Controller\\DefaultController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_email_sended' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StudyApp\\SecurityBundle\\Controller\\DefaultController::emailSendedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/emailsended',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'study_app_confirm_email' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'StudyApp\\SecurityBundle\\Controller\\DefaultController::emailConfirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/confirmemail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
