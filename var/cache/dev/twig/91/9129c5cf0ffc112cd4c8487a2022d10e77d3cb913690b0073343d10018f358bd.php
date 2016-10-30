<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_02c481117f1dfae28e0d8f6674ea8f3ba544a07ee046511f925d8da62aae9f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dd32aefc2cc99301b35038f39c5c65565f1b4f9374df7b095a988a65899c407 = $this->env->getExtension("native_profiler");
        $__internal_2dd32aefc2cc99301b35038f39c5c65565f1b4f9374df7b095a988a65899c407->enter($__internal_2dd32aefc2cc99301b35038f39c5c65565f1b4f9374df7b095a988a65899c407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dd32aefc2cc99301b35038f39c5c65565f1b4f9374df7b095a988a65899c407->leave($__internal_2dd32aefc2cc99301b35038f39c5c65565f1b4f9374df7b095a988a65899c407_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76bb2971912a2daa47b3277338ef57a77529b6d45735c81bd64f7d4d8ce920e3 = $this->env->getExtension("native_profiler");
        $__internal_76bb2971912a2daa47b3277338ef57a77529b6d45735c81bd64f7d4d8ce920e3->enter($__internal_76bb2971912a2daa47b3277338ef57a77529b6d45735c81bd64f7d4d8ce920e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_76bb2971912a2daa47b3277338ef57a77529b6d45735c81bd64f7d4d8ce920e3->leave($__internal_76bb2971912a2daa47b3277338ef57a77529b6d45735c81bd64f7d4d8ce920e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
