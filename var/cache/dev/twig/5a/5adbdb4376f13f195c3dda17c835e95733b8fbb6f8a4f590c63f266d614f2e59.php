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
        $__internal_e4a49157a1e55fb64f4c75e3dca24fc42ace84d9f1db735ae2fa9de5d8619769 = $this->env->getExtension("native_profiler");
        $__internal_e4a49157a1e55fb64f4c75e3dca24fc42ace84d9f1db735ae2fa9de5d8619769->enter($__internal_e4a49157a1e55fb64f4c75e3dca24fc42ace84d9f1db735ae2fa9de5d8619769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4a49157a1e55fb64f4c75e3dca24fc42ace84d9f1db735ae2fa9de5d8619769->leave($__internal_e4a49157a1e55fb64f4c75e3dca24fc42ace84d9f1db735ae2fa9de5d8619769_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e470b5a9c71ab770eea7a9b3fc7ffc40393656aa71cd181962c0bc8c3f4b5219 = $this->env->getExtension("native_profiler");
        $__internal_e470b5a9c71ab770eea7a9b3fc7ffc40393656aa71cd181962c0bc8c3f4b5219->enter($__internal_e470b5a9c71ab770eea7a9b3fc7ffc40393656aa71cd181962c0bc8c3f4b5219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e470b5a9c71ab770eea7a9b3fc7ffc40393656aa71cd181962c0bc8c3f4b5219->leave($__internal_e470b5a9c71ab770eea7a9b3fc7ffc40393656aa71cd181962c0bc8c3f4b5219_prof);

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
