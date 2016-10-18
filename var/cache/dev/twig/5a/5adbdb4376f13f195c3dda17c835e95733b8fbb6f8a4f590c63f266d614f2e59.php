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
        $__internal_03fadd8362be2c8a7f486a6f925a0be6b5fea1c93b84ddbfe20e8df0f7ffd591 = $this->env->getExtension("native_profiler");
        $__internal_03fadd8362be2c8a7f486a6f925a0be6b5fea1c93b84ddbfe20e8df0f7ffd591->enter($__internal_03fadd8362be2c8a7f486a6f925a0be6b5fea1c93b84ddbfe20e8df0f7ffd591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03fadd8362be2c8a7f486a6f925a0be6b5fea1c93b84ddbfe20e8df0f7ffd591->leave($__internal_03fadd8362be2c8a7f486a6f925a0be6b5fea1c93b84ddbfe20e8df0f7ffd591_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f918d21606dc053e5fead708472ddeb5416d19b9558f268e0a9c7fdadab860a3 = $this->env->getExtension("native_profiler");
        $__internal_f918d21606dc053e5fead708472ddeb5416d19b9558f268e0a9c7fdadab860a3->enter($__internal_f918d21606dc053e5fead708472ddeb5416d19b9558f268e0a9c7fdadab860a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f918d21606dc053e5fead708472ddeb5416d19b9558f268e0a9c7fdadab860a3->leave($__internal_f918d21606dc053e5fead708472ddeb5416d19b9558f268e0a9c7fdadab860a3_prof);

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
