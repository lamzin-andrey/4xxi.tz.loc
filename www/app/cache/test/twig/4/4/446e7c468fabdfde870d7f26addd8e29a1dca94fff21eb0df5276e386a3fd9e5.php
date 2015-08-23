<?php

/* StudyAppStudyAppBundle:Default:member_page.html.twig */
class __TwigTemplate_446e7c468fabdfde870d7f26addd8e29a1dca94fff21eb0df5276e386a3fd9e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppStudyAppBundle:Default:member_page.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudyAppStudyAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be28ff4acb8df8129923e32246dfb21dfd0ff09e3872a4e8818b95020d5cdff8 = $this->env->getExtension("native_profiler");
        $__internal_be28ff4acb8df8129923e32246dfb21dfd0ff09e3872a4e8818b95020d5cdff8->enter($__internal_be28ff4acb8df8129923e32246dfb21dfd0ff09e3872a4e8818b95020d5cdff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppStudyAppBundle:Default:member_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be28ff4acb8df8129923e32246dfb21dfd0ff09e3872a4e8818b95020d5cdff8->leave($__internal_be28ff4acb8df8129923e32246dfb21dfd0ff09e3872a4e8818b95020d5cdff8_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0142d5198b0468e973d4c46088a687720da810ac432ae6b4fd36897fa647a8da = $this->env->getExtension("native_profiler");
        $__internal_0142d5198b0468e973d4c46088a687720da810ac432ae6b4fd36897fa647a8da->enter($__internal_0142d5198b0468e973d4c46088a687720da810ac432ae6b4fd36897fa647a8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_0142d5198b0468e973d4c46088a687720da810ac432ae6b4fd36897fa647a8da->leave($__internal_0142d5198b0468e973d4c46088a687720da810ac432ae6b4fd36897fa647a8da_prof);

    }

    // line 8
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5ee03e36ccb5546a721bab6533f483fe52d2af6c13f2de4549344b1dc241f064 = $this->env->getExtension("native_profiler");
        $__internal_5ee03e36ccb5546a721bab6533f483fe52d2af6c13f2de4549344b1dc241f064->enter($__internal_5ee03e36ccb5546a721bab6533f483fe52d2af6c13f2de4549344b1dc241f064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 9
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script>
 \tvar totalPages = '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["pages_total"]) ? $context["pages_total"] : $this->getContext($context, "pages_total")), "html", null, true);
        echo "';
</script>\t
";
        
        $__internal_5ee03e36ccb5546a721bab6533f483fe52d2af6c13f2de4549344b1dc241f064->leave($__internal_5ee03e36ccb5546a721bab6533f483fe52d2af6c13f2de4549344b1dc241f064_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_ded8fc62ff4fc121e66c4d7ac54e077953ca0e25063a91b4b03dbb5d6da527b3 = $this->env->getExtension("native_profiler");
        $__internal_ded8fc62ff4fc121e66c4d7ac54e077953ca0e25063a91b4b03dbb5d6da527b3->enter($__internal_ded8fc62ff4fc121e66c4d7ac54e077953ca0e25063a91b4b03dbb5d6da527b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "\t";
        $this->loadTemplate("StudyAppStudyAppBundle:Default:article.html.twig", "StudyAppStudyAppBundle:Default:member_page.html.twig", 18)->display($context);
        // line 19
        echo "\t";
        $this->loadTemplate("StudyAppCommentBundle:Default:list.html.twig", "StudyAppStudyAppBundle:Default:member_page.html.twig", 19)->display($context);
        
        $__internal_ded8fc62ff4fc121e66c4d7ac54e077953ca0e25063a91b4b03dbb5d6da527b3->leave($__internal_ded8fc62ff4fc121e66c4d7ac54e077953ca0e25063a91b4b03dbb5d6da527b3_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle:Default:member_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  86 => 18,  80 => 17,  70 => 11,  65 => 9,  59 => 8,  50 => 5,  46 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
