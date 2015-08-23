<?php

/* StudyAppUserBundle:Default:profile.html.twig */
class __TwigTemplate_dcc75e8d14efd027a22d9de0c7fdc1925370755b86a00877503e8e7bcbed1cdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppUserBundle:Default:profile.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudyAppStudyAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1f2ed350e163a6f1afb88c30bc1963512df54b5ff45f657823c72b4dcc97363 = $this->env->getExtension("native_profiler");
        $__internal_f1f2ed350e163a6f1afb88c30bc1963512df54b5ff45f657823c72b4dcc97363->enter($__internal_f1f2ed350e163a6f1afb88c30bc1963512df54b5ff45f657823c72b4dcc97363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppUserBundle:Default:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1f2ed350e163a6f1afb88c30bc1963512df54b5ff45f657823c72b4dcc97363->leave($__internal_f1f2ed350e163a6f1afb88c30bc1963512df54b5ff45f657823c72b4dcc97363_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_73946cdb31be437573b54fdb75f2a0b8e0444ef0872332c3223cce1e09159ad8 = $this->env->getExtension("native_profiler");
        $__internal_73946cdb31be437573b54fdb75f2a0b8e0444ef0872332c3223cce1e09159ad8->enter($__internal_73946cdb31be437573b54fdb75f2a0b8e0444ef0872332c3223cce1e09159ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/authpage.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/signup.css"), "html", null, true);
        echo "\">
";
        
        $__internal_73946cdb31be437573b54fdb75f2a0b8e0444ef0872332c3223cce1e09159ad8->leave($__internal_73946cdb31be437573b54fdb75f2a0b8e0444ef0872332c3223cce1e09159ad8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e4b9668f366f038909b55c31c4ffcd54e5b5635330b88b0db70892e3df2d655 = $this->env->getExtension("native_profiler");
        $__internal_5e4b9668f366f038909b55c31c4ffcd54e5b5635330b88b0db70892e3df2d655->enter($__internal_5e4b9668f366f038909b55c31c4ffcd54e5b5635330b88b0db70892e3df2d655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $this->displayBlock('navbar', $context, $blocks);
        // line 23
        echo "<div class=\"container\">
  <form class=\"form-authpage form-signup\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("profile_update");
        echo "\" method=\"POST\">
  \t<div class=\"bg-danger text-danger ";
        // line 25
        if ( !$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) {
            echo "hide";
        }
        echo "\" id=\"errorsarea\">
\t   ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t</div>
    <h2 class=\"form-signup-heading\">";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Change you profile data", array(), "messages");
        echo "</h2>
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget', array("attr" => array("class" => "form-control mar-bot-10")));
        echo "
    <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"  value=\"";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("Save", array(), "messages");
        echo "\">
    <input type=\"hidden\" name=\"_method\" value=\"patch\"/>
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

</div> <!-- /container -->
";
        
        $__internal_5e4b9668f366f038909b55c31c4ffcd54e5b5635330b88b0db70892e3df2d655->leave($__internal_5e4b9668f366f038909b55c31c4ffcd54e5b5635330b88b0db70892e3df2d655_prof);

    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_55625f534afa9c442217a03954226413bb4428fce465423e331318e4d81ef8a6 = $this->env->getExtension("native_profiler");
        $__internal_55625f534afa9c442217a03954226413bb4428fce465423e331318e4d81ef8a6->enter($__internal_55625f534afa9c442217a03954226413bb4428fce465423e331318e4d81ef8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 10
        echo "<nav class=\"navbar navbar-fixed-top navbar-inverse\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand white\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("study_app_home");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Simple Application Example", array(), "messages");
        echo "</a>
    </div>
    <div id=\"navbar\" class=\"collapse navbar-collapse\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
        echo "</a></li>
      </ul>
    </div><!-- /.nav-collapse -->
  </div><!-- /.container -->
</nav><!-- /.navbar -->
";
        
        $__internal_55625f534afa9c442217a03954226413bb4428fce465423e331318e4d81ef8a6->leave($__internal_55625f534afa9c442217a03954226413bb4428fce465423e331318e4d81ef8a6_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppUserBundle:Default:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 17,  125 => 13,  120 => 10,  114 => 9,  102 => 33,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  80 => 26,  74 => 25,  70 => 24,  67 => 23,  65 => 9,  59 => 8,  50 => 5,  46 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
