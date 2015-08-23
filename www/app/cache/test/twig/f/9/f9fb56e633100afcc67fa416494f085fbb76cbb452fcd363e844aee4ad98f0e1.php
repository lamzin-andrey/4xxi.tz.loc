<?php

/* StudyAppStudyAppBundle::layout.html.twig */
class __TwigTemplate_f9fb56e633100afcc67fa416494f085fbb76cbb452fcd363e844aee4ad98f0e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4af358cd95de64cd3f6a469c0881fa7ded60df475d6a2e2c0f70490aba119a7c = $this->env->getExtension("native_profiler");
        $__internal_4af358cd95de64cd3f6a469c0881fa7ded60df475d6a2e2c0f70490aba119a7c->enter($__internal_4af358cd95de64cd3f6a469c0881fa7ded60df475d6a2e2c0f70490aba119a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppStudyAppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\">
\t<title>Simple Application Simfony 2</title>
\t";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 13
        echo "\t";
        $this->displayBlock('javascript', $context, $blocks);
        // line 19
        echo "\t        
</head>
<body>
";
        // line 22
        $this->displayBlock('navbar', $context, $blocks);
        // line 53
        echo "<div class=\"container\">
    <div class=\"row row-offcanvas row-offcanvas-right\">
     <div class=\"col-xs-12\">
";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "\t</div>
\t</div>
\t</div>
</body>
</html>
";
        
        $__internal_4af358cd95de64cd3f6a469c0881fa7ded60df475d6a2e2c0f70490aba119a7c->leave($__internal_4af358cd95de64cd3f6a469c0881fa7ded60df475d6a2e2c0f70490aba119a7c_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_242c108a63ce35e63ec6675a3580b2a6f4b54ec4de75ec69cf11345e0868b615 = $this->env->getExtension("native_profiler");
        $__internal_242c108a63ce35e63ec6675a3580b2a6f4b54ec4de75ec69cf11345e0868b615->enter($__internal_242c108a63ce35e63ec6675a3580b2a6f4b54ec4de75ec69cf11345e0868b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/pagination.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/offcanvas.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/app.css"), "html", null, true);
        echo "\">
\t";
        
        $__internal_242c108a63ce35e63ec6675a3580b2a6f4b54ec4de75ec69cf11345e0868b615->leave($__internal_242c108a63ce35e63ec6675a3580b2a6f4b54ec4de75ec69cf11345e0868b615_prof);

    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ac7e7e3d08691108ca9be967cc9116cbdcaad3fbb44ef726f86fd8d948da95fc = $this->env->getExtension("native_profiler");
        $__internal_ac7e7e3d08691108ca9be967cc9116cbdcaad3fbb44ef726f86fd8d948da95fc->enter($__internal_ac7e7e3d08691108ca9be967cc9116cbdcaad3fbb44ef726f86fd8d948da95fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/bootstrap-paginator.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/app.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_ac7e7e3d08691108ca9be967cc9116cbdcaad3fbb44ef726f86fd8d948da95fc->leave($__internal_ac7e7e3d08691108ca9be967cc9116cbdcaad3fbb44ef726f86fd8d948da95fc_prof);

    }

    // line 22
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_a40f2344ed5b1ff84bafce67052359640e34d85d82f9f49db9608a82c936cf6d = $this->env->getExtension("native_profiler");
        $__internal_a40f2344ed5b1ff84bafce67052359640e34d85d82f9f49db9608a82c936cf6d->enter($__internal_a40f2344ed5b1ff84bafce67052359640e34d85d82f9f49db9608a82c936cf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 23
        if ( !(isset($context["is_auth"]) ? $context["is_auth"] : $this->getContext($context, "is_auth"))) {
            // line 24
            echo "<nav class=\"navbar navbar-fixed-top navbar-inverse\">
    <div class=\"container\">
\t    <div class=\"navbar-header\">
\t      <a class=\"navbar-brand\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("study_app_home");
            echo "\" >";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Home", array(), "messages");
            echo "</a>
\t    </div>
\t    <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("study_app_signup");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Sign Up", array(), "messages");
            echo "</a></li>
          </ul>
        </div>
    </div><!-- /.container -->
</nav><!-- /.navbar -->
";
        } else {
            // line 37
            echo "<nav class=\"navbar navbar-fixed-top navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
        <a class=\"navbar-brand white\" href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("study_app_home");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Simple Application Example", array(), "messages");
            echo "</a>
    </div>
    <div id=\"navbar\" class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav\">
      <li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("profile");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Change Profile", array(), "messages");
            echo "</a></li>
      <li><a href=\"#\" id=\"menu-add-comment\">";
            // line 45
            echo $this->env->getExtension('translator')->getTranslator()->trans("Comment", array(), "messages");
            echo "</a></li>
      <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
            echo "</a></li>
    </ul>
    </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
";
        }
        
        $__internal_a40f2344ed5b1ff84bafce67052359640e34d85d82f9f49db9608a82c936cf6d->leave($__internal_a40f2344ed5b1ff84bafce67052359640e34d85d82f9f49db9608a82c936cf6d_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_a575ca2bcf2dd691606a1cb0a767d05ff725884e3445b7b4bb50e29f430f188f = $this->env->getExtension("native_profiler");
        $__internal_a575ca2bcf2dd691606a1cb0a767d05ff725884e3445b7b4bb50e29f430f188f->enter($__internal_a575ca2bcf2dd691606a1cb0a767d05ff725884e3445b7b4bb50e29f430f188f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a575ca2bcf2dd691606a1cb0a767d05ff725884e3445b7b4bb50e29f430f188f->leave($__internal_a575ca2bcf2dd691606a1cb0a767d05ff725884e3445b7b4bb50e29f430f188f_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 56,  181 => 46,  177 => 45,  171 => 44,  162 => 40,  157 => 37,  146 => 31,  137 => 27,  132 => 24,  130 => 23,  124 => 22,  115 => 17,  111 => 16,  107 => 15,  102 => 14,  96 => 13,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  70 => 7,  64 => 6,  52 => 58,  50 => 56,  45 => 53,  43 => 22,  38 => 19,  35 => 13,  33 => 6,  26 => 1,);
    }
}
