<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f172b5248f1a97159ead870fca76872bce2cc02f1e926679ff6ee3b402d81df8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b369519412255443cfbcb9a325463349fcaff4fcf9f9a56563013af6ea5d88d8 = $this->env->getExtension("native_profiler");
        $__internal_b369519412255443cfbcb9a325463349fcaff4fcf9f9a56563013af6ea5d88d8->enter($__internal_b369519412255443cfbcb9a325463349fcaff4fcf9f9a56563013af6ea5d88d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b369519412255443cfbcb9a325463349fcaff4fcf9f9a56563013af6ea5d88d8->leave($__internal_b369519412255443cfbcb9a325463349fcaff4fcf9f9a56563013af6ea5d88d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f2d1f54eeb2207214ee9f83488f658e5cbaa2d09d5a73eeae89e06ebb067ec4 = $this->env->getExtension("native_profiler");
        $__internal_4f2d1f54eeb2207214ee9f83488f658e5cbaa2d09d5a73eeae89e06ebb067ec4->enter($__internal_4f2d1f54eeb2207214ee9f83488f658e5cbaa2d09d5a73eeae89e06ebb067ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4f2d1f54eeb2207214ee9f83488f658e5cbaa2d09d5a73eeae89e06ebb067ec4->leave($__internal_4f2d1f54eeb2207214ee9f83488f658e5cbaa2d09d5a73eeae89e06ebb067ec4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
