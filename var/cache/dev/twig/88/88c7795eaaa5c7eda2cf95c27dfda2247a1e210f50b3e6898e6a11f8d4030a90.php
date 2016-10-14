<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_024c6825cd1c3093d4eaf2e16b12781c29ff0230e01a7248cbb4f198c07f663b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_8c65c8c3fb905d9fe319d6e74fd11c058e0ab0a12292c7033795b7a21bbaea96 = $this->env->getExtension("native_profiler");
        $__internal_8c65c8c3fb905d9fe319d6e74fd11c058e0ab0a12292c7033795b7a21bbaea96->enter($__internal_8c65c8c3fb905d9fe319d6e74fd11c058e0ab0a12292c7033795b7a21bbaea96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c65c8c3fb905d9fe319d6e74fd11c058e0ab0a12292c7033795b7a21bbaea96->leave($__internal_8c65c8c3fb905d9fe319d6e74fd11c058e0ab0a12292c7033795b7a21bbaea96_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c88a5064a19c0d5a2cbc42c359016cba24da2cd16d0a80961de8829c1adbe8cf = $this->env->getExtension("native_profiler");
        $__internal_c88a5064a19c0d5a2cbc42c359016cba24da2cd16d0a80961de8829c1adbe8cf->enter($__internal_c88a5064a19c0d5a2cbc42c359016cba24da2cd16d0a80961de8829c1adbe8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c88a5064a19c0d5a2cbc42c359016cba24da2cd16d0a80961de8829c1adbe8cf->leave($__internal_c88a5064a19c0d5a2cbc42c359016cba24da2cd16d0a80961de8829c1adbe8cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
