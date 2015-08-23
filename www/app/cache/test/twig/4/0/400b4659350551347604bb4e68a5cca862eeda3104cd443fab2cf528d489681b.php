<?php

/* StudyAppStudyAppBundle:Default:article.html.twig */
class __TwigTemplate_400b4659350551347604bb4e68a5cca862eeda3104cd443fab2cf528d489681b extends Twig_Template
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
        $__internal_34941fa791d1485000dc48a2c54dd75af73d8f93dc2c3e92d45c2908ed388291 = $this->env->getExtension("native_profiler");
        $__internal_34941fa791d1485000dc48a2c54dd75af73d8f93dc2c3e92d45c2908ed388291->enter($__internal_34941fa791d1485000dc48a2c54dd75af73d8f93dc2c3e92d45c2908ed388291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudyAppStudyAppBundle:Default:article.html.twig"));

        // line 1
        echo "<div class=\"jumbotron\">
<h1>Это пример приложения</h1>
<p>Можно читать текст и оставлять комментарии. А можно не оставлять.
</p>
</div>
";
        // line 6
        if ((isset($context["fb_friends"]) ? $context["fb_friends"] : $this->getContext($context, "fb_friends"))) {
            // line 7
            echo "<div class=\"fbook_friends\">
    <div class=\"fb_friends_title\">Your Friends from Facebook already here!</div>
    <div>&nbsp;</div>
    <ul class=\"fb_friends\">
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fb_friends"]) ? $context["fb_friends"] : $this->getContext($context, "fb_friends")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 12
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "link", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </ul>
</div>
";
        }
        
        $__internal_34941fa791d1485000dc48a2c54dd75af73d8f93dc2c3e92d45c2908ed388291->leave($__internal_34941fa791d1485000dc48a2c54dd75af73d8f93dc2c3e92d45c2908ed388291_prof);

    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  41 => 12,  37 => 11,  31 => 7,  29 => 6,  22 => 1,);
    }
}
