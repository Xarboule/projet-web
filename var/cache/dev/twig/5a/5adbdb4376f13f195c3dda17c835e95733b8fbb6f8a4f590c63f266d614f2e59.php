<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0fe1475da73dc4e211ae5c5f7c9f9a97891d8b1e883fee148f8598389805cd1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_3be1f5ef6cf2268f0bcb047d19010c9c092fd49450ddfdc2e32cf61d59408a11 = $this->env->getExtension("native_profiler");
        $__internal_3be1f5ef6cf2268f0bcb047d19010c9c092fd49450ddfdc2e32cf61d59408a11->enter($__internal_3be1f5ef6cf2268f0bcb047d19010c9c092fd49450ddfdc2e32cf61d59408a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3be1f5ef6cf2268f0bcb047d19010c9c092fd49450ddfdc2e32cf61d59408a11->leave($__internal_3be1f5ef6cf2268f0bcb047d19010c9c092fd49450ddfdc2e32cf61d59408a11_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c770e8b1988dbfc6a007af5c005f6df29bf8d737b4e6d8d81f8468a0118e2643 = $this->env->getExtension("native_profiler");
        $__internal_c770e8b1988dbfc6a007af5c005f6df29bf8d737b4e6d8d81f8468a0118e2643->enter($__internal_c770e8b1988dbfc6a007af5c005f6df29bf8d737b4e6d8d81f8468a0118e2643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c770e8b1988dbfc6a007af5c005f6df29bf8d737b4e6d8d81f8468a0118e2643->leave($__internal_c770e8b1988dbfc6a007af5c005f6df29bf8d737b4e6d8d81f8468a0118e2643_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
