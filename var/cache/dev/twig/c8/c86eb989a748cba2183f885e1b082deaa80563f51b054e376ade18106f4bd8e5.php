<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_bed888fe73a32558f913be938717aa50c8559ea6d03734cf48afcf44788b11c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_520c55c04ebea47b6684b0cadf0696da84bd1c00eee3b61745c9f6c9a0f5d6bf = $this->env->getExtension("native_profiler");
        $__internal_520c55c04ebea47b6684b0cadf0696da84bd1c00eee3b61745c9f6c9a0f5d6bf->enter($__internal_520c55c04ebea47b6684b0cadf0696da84bd1c00eee3b61745c9f6c9a0f5d6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520c55c04ebea47b6684b0cadf0696da84bd1c00eee3b61745c9f6c9a0f5d6bf->leave($__internal_520c55c04ebea47b6684b0cadf0696da84bd1c00eee3b61745c9f6c9a0f5d6bf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb43c1ab704841666402a59f1061f3787342767d8ca034a8c41506322248d34f = $this->env->getExtension("native_profiler");
        $__internal_fb43c1ab704841666402a59f1061f3787342767d8ca034a8c41506322248d34f->enter($__internal_fb43c1ab704841666402a59f1061f3787342767d8ca034a8c41506322248d34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fb43c1ab704841666402a59f1061f3787342767d8ca034a8c41506322248d34f->leave($__internal_fb43c1ab704841666402a59f1061f3787342767d8ca034a8c41506322248d34f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
