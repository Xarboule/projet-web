<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_45d1787edfac03253dfe00d87d87da907a92fcd13267a63b2860ff2d593f749f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7ca0504c7be215b49ff5c23e05d003f4d659aa8c5426693903a4080a6ee0d8df = $this->env->getExtension("native_profiler");
        $__internal_7ca0504c7be215b49ff5c23e05d003f4d659aa8c5426693903a4080a6ee0d8df->enter($__internal_7ca0504c7be215b49ff5c23e05d003f4d659aa8c5426693903a4080a6ee0d8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca0504c7be215b49ff5c23e05d003f4d659aa8c5426693903a4080a6ee0d8df->leave($__internal_7ca0504c7be215b49ff5c23e05d003f4d659aa8c5426693903a4080a6ee0d8df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_172cc321abc169c32041ed9705c62302757413bb01eac25a494d346271507e32 = $this->env->getExtension("native_profiler");
        $__internal_172cc321abc169c32041ed9705c62302757413bb01eac25a494d346271507e32->enter($__internal_172cc321abc169c32041ed9705c62302757413bb01eac25a494d346271507e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_172cc321abc169c32041ed9705c62302757413bb01eac25a494d346271507e32->leave($__internal_172cc321abc169c32041ed9705c62302757413bb01eac25a494d346271507e32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
