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
        $__internal_2e6c729c9947348c1a0ac523faa351ba8badde8e298db9e58dd9c2031fb5edbf = $this->env->getExtension("native_profiler");
        $__internal_2e6c729c9947348c1a0ac523faa351ba8badde8e298db9e58dd9c2031fb5edbf->enter($__internal_2e6c729c9947348c1a0ac523faa351ba8badde8e298db9e58dd9c2031fb5edbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e6c729c9947348c1a0ac523faa351ba8badde8e298db9e58dd9c2031fb5edbf->leave($__internal_2e6c729c9947348c1a0ac523faa351ba8badde8e298db9e58dd9c2031fb5edbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c9512507128caafa9acdadff17d1d7c478a905cdbd7e2672f9aacfc42b0c082 = $this->env->getExtension("native_profiler");
        $__internal_1c9512507128caafa9acdadff17d1d7c478a905cdbd7e2672f9aacfc42b0c082->enter($__internal_1c9512507128caafa9acdadff17d1d7c478a905cdbd7e2672f9aacfc42b0c082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_1c9512507128caafa9acdadff17d1d7c478a905cdbd7e2672f9aacfc42b0c082->leave($__internal_1c9512507128caafa9acdadff17d1d7c478a905cdbd7e2672f9aacfc42b0c082_prof);

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
