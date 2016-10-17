<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a735ee92d0d477e476b239bdd1d439a69b7834c80fd33d144ed0334e303b8350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_45dc7a97f005559596eb1e71ea4baaaebe02d8c8fdd62e67a2880d09fd5aabc9 = $this->env->getExtension("native_profiler");
        $__internal_45dc7a97f005559596eb1e71ea4baaaebe02d8c8fdd62e67a2880d09fd5aabc9->enter($__internal_45dc7a97f005559596eb1e71ea4baaaebe02d8c8fdd62e67a2880d09fd5aabc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45dc7a97f005559596eb1e71ea4baaaebe02d8c8fdd62e67a2880d09fd5aabc9->leave($__internal_45dc7a97f005559596eb1e71ea4baaaebe02d8c8fdd62e67a2880d09fd5aabc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d71f2289ff4a8ce08746acc65a3874f4ea64186a1a839146f96d9cc1eecf30f0 = $this->env->getExtension("native_profiler");
        $__internal_d71f2289ff4a8ce08746acc65a3874f4ea64186a1a839146f96d9cc1eecf30f0->enter($__internal_d71f2289ff4a8ce08746acc65a3874f4ea64186a1a839146f96d9cc1eecf30f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d71f2289ff4a8ce08746acc65a3874f4ea64186a1a839146f96d9cc1eecf30f0->leave($__internal_d71f2289ff4a8ce08746acc65a3874f4ea64186a1a839146f96d9cc1eecf30f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
