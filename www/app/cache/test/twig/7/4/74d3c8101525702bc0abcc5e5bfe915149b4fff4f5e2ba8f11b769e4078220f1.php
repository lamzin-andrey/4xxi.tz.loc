<?php

/* StudyAppCommentBundle:Default:index.html.twig */
class __TwigTemplate_74d3c8101525702bc0abcc5e5bfe915149b4fff4f5e2ba8f11b769e4078220f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppCommentBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
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
        $__internal_b2d42c8c60b26fbaede27cb90dfebe5306cf4414bcce835b05d58c775298b5f6 = $this->env->getExtension("native_profiler");
        $__internal_b2d42c8c60b26fbaede27cb90dfebe5306cf4414bcce835b05d58c775298b5f6->enter($__internal_b2d42c8c60b26fbaede27cb90dfebe5306cf4414bcce835b05d58c775298b5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppCommentBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2d42c8c60b26fbaede27cb90dfebe5306cf4414bcce835b05d58c775298b5f6->leave($__internal_b2d42c8c60b26fbaede27cb90dfebe5306cf4414bcce835b05d58c775298b5f6_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_04dbfdba02b1c8fb76ccc13564142dd67885a9bba6893418a486663c454ea57f = $this->env->getExtension("native_profiler");
        $__internal_04dbfdba02b1c8fb76ccc13564142dd67885a9bba6893418a486663c454ea57f->enter($__internal_04dbfdba02b1c8fb76ccc13564142dd67885a9bba6893418a486663c454ea57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-glyphicons.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/commentlist.css"), "html", null, true);
        echo "\">
";
        
        $__internal_04dbfdba02b1c8fb76ccc13564142dd67885a9bba6893418a486663c454ea57f->leave($__internal_04dbfdba02b1c8fb76ccc13564142dd67885a9bba6893418a486663c454ea57f_prof);

    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_eac542425acb2139bd5a0b79ba03ac9527ba2ea7403bc91aa3dbc23410c18fac = $this->env->getExtension("native_profiler");
        $__internal_eac542425acb2139bd5a0b79ba03ac9527ba2ea7403bc91aa3dbc23410c18fac->enter($__internal_eac542425acb2139bd5a0b79ba03ac9527ba2ea7403bc91aa3dbc23410c18fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 8
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script>
 \tvar totalPages = '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["pages_total"]) ? $context["pages_total"] : $this->getContext($context, "pages_total")), "html", null, true);
        echo "';
 </script>\t
";
        
        $__internal_eac542425acb2139bd5a0b79ba03ac9527ba2ea7403bc91aa3dbc23410c18fac->leave($__internal_eac542425acb2139bd5a0b79ba03ac9527ba2ea7403bc91aa3dbc23410c18fac_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_a0d98ad88475dbeea67cad8d798583aa59f2d6e72da10939d6d67ec512e022e7 = $this->env->getExtension("native_profiler");
        $__internal_a0d98ad88475dbeea67cad8d798583aa59f2d6e72da10939d6d67ec512e022e7->enter($__internal_a0d98ad88475dbeea67cad8d798583aa59f2d6e72da10939d6d67ec512e022e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 14
        echo "<nav class=\"navbar navbar-fixed-top navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand white\" href=\"/\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Simple Application Example", array(), "messages");
        echo "</a>
        </div>
  <div id=\"navbar\" class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav\">
      <li><a href=\"/profile\">";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Change Profile", array(), "messages");
        echo "</a></li>
      <li><a href=\"#\" id=\"menu-add-comment\">";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("Comment", array(), "messages");
        echo "</a></li>
      <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
        echo "</a></li>
    </ul>
  </div><!-- /.nav-collapse -->
</div><!-- /.container -->
</nav><!-- /.navbar -->
";
        
        $__internal_a0d98ad88475dbeea67cad8d798583aa59f2d6e72da10939d6d67ec512e022e7->leave($__internal_a0d98ad88475dbeea67cad8d798583aa59f2d6e72da10939d6d67ec512e022e7_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5dbc36826db0b52bc374be6b7cc2a79b0e2c5ea31910b8ef2b9bbf321195318 = $this->env->getExtension("native_profiler");
        $__internal_d5dbc36826db0b52bc374be6b7cc2a79b0e2c5ea31910b8ef2b9bbf321195318->enter($__internal_d5dbc36826db0b52bc374be6b7cc2a79b0e2c5ea31910b8ef2b9bbf321195318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        $this->loadTemplate("StudyAppCommentBundle:Default:list.html.twig", "StudyAppCommentBundle:Default:index.html.twig", 30)->display($context);
        
        $__internal_d5dbc36826db0b52bc374be6b7cc2a79b0e2c5ea31910b8ef2b9bbf321195318->leave($__internal_d5dbc36826db0b52bc374be6b7cc2a79b0e2c5ea31910b8ef2b9bbf321195318_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppCommentBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 30,  122 => 29,  107 => 23,  103 => 22,  99 => 21,  92 => 17,  87 => 14,  81 => 13,  71 => 10,  66 => 8,  60 => 7,  51 => 5,  47 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
