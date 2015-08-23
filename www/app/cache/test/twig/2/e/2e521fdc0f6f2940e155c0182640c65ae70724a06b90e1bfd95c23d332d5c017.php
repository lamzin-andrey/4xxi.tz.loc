<?php

/* StudyAppSecurityBundle:Default:message.html.twig */
class __TwigTemplate_2e521fdc0f6f2940e155c0182640c65ae70724a06b90e1bfd95c23d332d5c017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppSecurityBundle:Default:message.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudyAppStudyAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ae33783eee54d097a4e6c7e009db38bf0a8d745d86196c47c2832b3f4089bc5 = $this->env->getExtension("native_profiler");
        $__internal_9ae33783eee54d097a4e6c7e009db38bf0a8d745d86196c47c2832b3f4089bc5->enter($__internal_9ae33783eee54d097a4e6c7e009db38bf0a8d745d86196c47c2832b3f4089bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppSecurityBundle:Default:message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ae33783eee54d097a4e6c7e009db38bf0a8d745d86196c47c2832b3f4089bc5->leave($__internal_9ae33783eee54d097a4e6c7e009db38bf0a8d745d86196c47c2832b3f4089bc5_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_8bf689849f6e5011a8c80e141b45f73d8d574bec6c295125bcf83757f4c4f186 = $this->env->getExtension("native_profiler");
        $__internal_8bf689849f6e5011a8c80e141b45f73d8d574bec6c295125bcf83757f4c4f186->enter($__internal_8bf689849f6e5011a8c80e141b45f73d8d574bec6c295125bcf83757f4c4f186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-glyphicons.css"), "html", null, true);
        echo "\">
";
        
        $__internal_8bf689849f6e5011a8c80e141b45f73d8d574bec6c295125bcf83757f4c4f186->leave($__internal_8bf689849f6e5011a8c80e141b45f73d8d574bec6c295125bcf83757f4c4f186_prof);

    }

    // line 6
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_160b980c479aa2223dde0018e7ba2da7a0dec384238c3ac884f4df9d6d851ead = $this->env->getExtension("native_profiler");
        $__internal_160b980c479aa2223dde0018e7ba2da7a0dec384238c3ac884f4df9d6d851ead->enter($__internal_160b980c479aa2223dde0018e7ba2da7a0dec384238c3ac884f4df9d6d851ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 7
        echo "<nav class=\"navbar navbar-fixed-top navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <a class=\"navbar-brand white\" href=\"/\">";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Simple Application Example", array(), "messages");
        echo "</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/profile\">";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Change Profile", array(), "messages");
        echo "</a></li>
            <li><a href=\"#\" id=\"menu-add-comment\">";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("Comment", array(), "messages");
        echo "</a></li>
            <li><a href=\"/logout\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
        echo "</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
         <div class=\"container\">
     <div class=\"row row-offcanvas row-offcanvas-right\">
     <div class=\"col-xs-12\">
\t\t<nav class=\"navbar navbar-fixed-top navbar-inverse\">
      <div class=\"container\">
\t    <div class=\"navbar-header\">
\t      <a class=\"navbar-brand\" href=\"/\" >";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Home", array(), "messages");
        echo "</a>
\t    </div>
\t    <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("study_app_login");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login", array(), "messages");
        echo "</a></li>
          </ul>
        </div>
  </div><!-- /.container -->
</nav><!-- /.navbar -->
";
        
        $__internal_160b980c479aa2223dde0018e7ba2da7a0dec384238c3ac884f4df9d6d851ead->leave($__internal_160b980c479aa2223dde0018e7ba2da7a0dec384238c3ac884f4df9d6d851ead_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_63e1757f591ad4ad1bffcf8a43f1018a13900997d10db99fe94219fdd090838a = $this->env->getExtension("native_profiler");
        $__internal_63e1757f591ad4ad1bffcf8a43f1018a13900997d10db99fe94219fdd090838a->enter($__internal_63e1757f591ad4ad1bffcf8a43f1018a13900997d10db99fe94219fdd090838a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "    <div class=\"bg-";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo " pad-15\">";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</div>
    ";
        // line 39
        if ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route"))) {
            // line 40
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")));
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["link_text"]) ? $context["link_text"] : $this->getContext($context, "link_text")), "html", null, true);
            echo "</a>
    ";
        }
        
        $__internal_63e1757f591ad4ad1bffcf8a43f1018a13900997d10db99fe94219fdd090838a->leave($__internal_63e1757f591ad4ad1bffcf8a43f1018a13900997d10db99fe94219fdd090838a_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppSecurityBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  130 => 39,  123 => 38,  117 => 37,  102 => 31,  95 => 27,  81 => 16,  77 => 15,  73 => 14,  66 => 10,  61 => 7,  55 => 6,  46 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
