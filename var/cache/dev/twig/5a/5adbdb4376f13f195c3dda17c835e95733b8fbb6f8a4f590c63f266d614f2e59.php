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
        $__internal_481e66a731f5d632a5d681ea151b5f8d2a4c6cf0ed60caf2686f8fd57a196c5d = $this->env->getExtension("native_profiler");
        $__internal_481e66a731f5d632a5d681ea151b5f8d2a4c6cf0ed60caf2686f8fd57a196c5d->enter($__internal_481e66a731f5d632a5d681ea151b5f8d2a4c6cf0ed60caf2686f8fd57a196c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_481e66a731f5d632a5d681ea151b5f8d2a4c6cf0ed60caf2686f8fd57a196c5d->leave($__internal_481e66a731f5d632a5d681ea151b5f8d2a4c6cf0ed60caf2686f8fd57a196c5d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d335549780f13be7cc2b9a7c9095d69f833d96c10362726e56d009abd48114a4 = $this->env->getExtension("native_profiler");
        $__internal_d335549780f13be7cc2b9a7c9095d69f833d96c10362726e56d009abd48114a4->enter($__internal_d335549780f13be7cc2b9a7c9095d69f833d96c10362726e56d009abd48114a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d335549780f13be7cc2b9a7c9095d69f833d96c10362726e56d009abd48114a4->leave($__internal_d335549780f13be7cc2b9a7c9095d69f833d96c10362726e56d009abd48114a4_prof);

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
