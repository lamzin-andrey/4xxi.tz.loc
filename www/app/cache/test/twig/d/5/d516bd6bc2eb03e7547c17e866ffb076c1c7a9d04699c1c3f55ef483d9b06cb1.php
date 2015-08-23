<?php

/* StudyAppOAuthBundle:Default:index.html.twig */
class __TwigTemplate_d516bd6bc2eb03e7547c17e866ffb076c1c7a9d04699c1c3f55ef483d9b06cb1 extends Twig_Template
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
        $__internal_2580ee21c3bb9464b86af16175d1a3281c33289c9e941c9ba9bc1bb411de47a6 = $this->env->getExtension("native_profiler");
        $__internal_2580ee21c3bb9464b86af16175d1a3281c33289c9e941c9ba9bc1bb411de47a6->enter($__internal_2580ee21c3bb9464b86af16175d1a3281c33289c9e941c9ba9bc1bb411de47a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppOAuthBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_2580ee21c3bb9464b86af16175d1a3281c33289c9e941c9ba9bc1bb411de47a6->leave($__internal_2580ee21c3bb9464b86af16175d1a3281c33289c9e941c9ba9bc1bb411de47a6_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppOAuthBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
