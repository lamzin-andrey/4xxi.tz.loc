<?php

/* StudyAppStudyAppBundle:Default:index.html.twig */
class __TwigTemplate_f1cbe01afc3b5ae9847543f557eaeb27af8f8961a2de2ce1492d6c4b30ba00f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85d1d0835c9c82f07cf1b33d046f188e509dbb39737ad967f6175ae6e3a4cb1c = $this->env->getExtension("native_profiler");
        $__internal_85d1d0835c9c82f07cf1b33d046f188e509dbb39737ad967f6175ae6e3a4cb1c->enter($__internal_85d1d0835c9c82f07cf1b33d046f188e509dbb39737ad967f6175ae6e3a4cb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppStudyAppBundle:Default:index.html.twig"));

        // line 1
        if ((isset($context["is_auth"]) ? $context["is_auth"] : $this->getContext($context, "is_auth"))) {
            // line 2
            $this->loadTemplate("StudyAppStudyAppBundle:Default:member_page.html.twig", "StudyAppStudyAppBundle:Default:index.html.twig", 2)->display($context);
        } else {
            // line 4
            $this->loadTemplate("StudyAppStudyAppBundle:Default:anonymous_page.html.twig", "StudyAppStudyAppBundle:Default:index.html.twig", 4)->display($context);
        }
        
        $__internal_85d1d0835c9c82f07cf1b33d046f188e509dbb39737ad967f6175ae6e3a4cb1c->leave($__internal_85d1d0835c9c82f07cf1b33d046f188e509dbb39737ad967f6175ae6e3a4cb1c_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  24 => 2,  22 => 1,);
    }
}
