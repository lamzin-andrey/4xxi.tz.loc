<?php

/* StudyAppStudyAppBundle:Default:anonymous_page.html.twig */
class __TwigTemplate_618522c2414ccfe5954405abc5e950a81aad1bea20ab9cf00975d2ad31448d7c extends Twig_Template
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
        $__internal_c255c3df6710e3f2d5aec220d3c0c7045b53d9296b1137a0c3d4cd1450e75c61 = $this->env->getExtension("native_profiler");
        $__internal_c255c3df6710e3f2d5aec220d3c0c7045b53d9296b1137a0c3d4cd1450e75c61->enter($__internal_c255c3df6710e3f2d5aec220d3c0c7045b53d9296b1137a0c3d4cd1450e75c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppStudyAppBundle:Default:anonymous_page.html.twig"));

        // line 1
        $this->loadTemplate("StudyAppSecurityBundle:Default:login.html.twig", "StudyAppStudyAppBundle:Default:anonymous_page.html.twig", 1)->display($context);
        
        $__internal_c255c3df6710e3f2d5aec220d3c0c7045b53d9296b1137a0c3d4cd1450e75c61->leave($__internal_c255c3df6710e3f2d5aec220d3c0c7045b53d9296b1137a0c3d4cd1450e75c61_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle:Default:anonymous_page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
