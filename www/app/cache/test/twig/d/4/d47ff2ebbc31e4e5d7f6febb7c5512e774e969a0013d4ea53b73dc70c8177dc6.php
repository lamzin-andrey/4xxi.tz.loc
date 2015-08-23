<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d47ff2ebbc31e4e5d7f6febb7c5512e774e969a0013d4ea53b73dc70c8177dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_505261335172fc321d6c5917894f64d2a8d7e382174c801c2ca65bbb8386fb3a = $this->env->getExtension("native_profiler");
        $__internal_505261335172fc321d6c5917894f64d2a8d7e382174c801c2ca65bbb8386fb3a->enter($__internal_505261335172fc321d6c5917894f64d2a8d7e382174c801c2ca65bbb8386fb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_505261335172fc321d6c5917894f64d2a8d7e382174c801c2ca65bbb8386fb3a->leave($__internal_505261335172fc321d6c5917894f64d2a8d7e382174c801c2ca65bbb8386fb3a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4fbd234e6425c50480b14e9d420299dab407c6b5a01c3b9dad8b531dd0ad8529 = $this->env->getExtension("native_profiler");
        $__internal_4fbd234e6425c50480b14e9d420299dab407c6b5a01c3b9dad8b531dd0ad8529->enter($__internal_4fbd234e6425c50480b14e9d420299dab407c6b5a01c3b9dad8b531dd0ad8529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4fbd234e6425c50480b14e9d420299dab407c6b5a01c3b9dad8b531dd0ad8529->leave($__internal_4fbd234e6425c50480b14e9d420299dab407c6b5a01c3b9dad8b531dd0ad8529_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b26b18359fcb9397e9c42d9312feaf91b6eb70631034dbc310208f2f6e1b07d = $this->env->getExtension("native_profiler");
        $__internal_6b26b18359fcb9397e9c42d9312feaf91b6eb70631034dbc310208f2f6e1b07d->enter($__internal_6b26b18359fcb9397e9c42d9312feaf91b6eb70631034dbc310208f2f6e1b07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b26b18359fcb9397e9c42d9312feaf91b6eb70631034dbc310208f2f6e1b07d->leave($__internal_6b26b18359fcb9397e9c42d9312feaf91b6eb70631034dbc310208f2f6e1b07d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_794fc5398f0e1b0b5c8291713c9e5ead2de3169fdb8108bbee02fefd04621e12 = $this->env->getExtension("native_profiler");
        $__internal_794fc5398f0e1b0b5c8291713c9e5ead2de3169fdb8108bbee02fefd04621e12->enter($__internal_794fc5398f0e1b0b5c8291713c9e5ead2de3169fdb8108bbee02fefd04621e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_794fc5398f0e1b0b5c8291713c9e5ead2de3169fdb8108bbee02fefd04621e12->leave($__internal_794fc5398f0e1b0b5c8291713c9e5ead2de3169fdb8108bbee02fefd04621e12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
