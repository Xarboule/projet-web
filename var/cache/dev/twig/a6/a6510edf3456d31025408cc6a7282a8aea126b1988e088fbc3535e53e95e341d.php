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
        $__internal_2b8cc706f134059d8adc6c694d1f5c5ca0306bab2138bc50581a8881eeaca63d = $this->env->getExtension("native_profiler");
        $__internal_2b8cc706f134059d8adc6c694d1f5c5ca0306bab2138bc50581a8881eeaca63d->enter($__internal_2b8cc706f134059d8adc6c694d1f5c5ca0306bab2138bc50581a8881eeaca63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8cc706f134059d8adc6c694d1f5c5ca0306bab2138bc50581a8881eeaca63d->leave($__internal_2b8cc706f134059d8adc6c694d1f5c5ca0306bab2138bc50581a8881eeaca63d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f41223321e45a3b0880146cd5d7e65589701fd783a4fb761428b6ada798d5581 = $this->env->getExtension("native_profiler");
        $__internal_f41223321e45a3b0880146cd5d7e65589701fd783a4fb761428b6ada798d5581->enter($__internal_f41223321e45a3b0880146cd5d7e65589701fd783a4fb761428b6ada798d5581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f41223321e45a3b0880146cd5d7e65589701fd783a4fb761428b6ada798d5581->leave($__internal_f41223321e45a3b0880146cd5d7e65589701fd783a4fb761428b6ada798d5581_prof);

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
