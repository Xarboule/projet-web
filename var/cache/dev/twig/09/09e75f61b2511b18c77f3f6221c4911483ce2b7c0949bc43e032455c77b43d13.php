<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9df24fc1c59730ee87b3a3f113651fd184100c9b25e042c7e9b68d4afd84e5d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_3567711196ec95e29d630b7c1961b0603d6d2c0a8d6a11674a76aa2ded68653f = $this->env->getExtension("native_profiler");
        $__internal_3567711196ec95e29d630b7c1961b0603d6d2c0a8d6a11674a76aa2ded68653f->enter($__internal_3567711196ec95e29d630b7c1961b0603d6d2c0a8d6a11674a76aa2ded68653f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3567711196ec95e29d630b7c1961b0603d6d2c0a8d6a11674a76aa2ded68653f->leave($__internal_3567711196ec95e29d630b7c1961b0603d6d2c0a8d6a11674a76aa2ded68653f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a26652473a4cbd4bb89b9f47a9f98d147ea3876c72985545a6f3997b4c7c635 = $this->env->getExtension("native_profiler");
        $__internal_8a26652473a4cbd4bb89b9f47a9f98d147ea3876c72985545a6f3997b4c7c635->enter($__internal_8a26652473a4cbd4bb89b9f47a9f98d147ea3876c72985545a6f3997b4c7c635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8a26652473a4cbd4bb89b9f47a9f98d147ea3876c72985545a6f3997b4c7c635->leave($__internal_8a26652473a4cbd4bb89b9f47a9f98d147ea3876c72985545a6f3997b4c7c635_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
