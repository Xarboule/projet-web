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
        $__internal_bd09151b1b670d61768819b837f42f5965e430ccefdf4184f7661b942d7d4156 = $this->env->getExtension("native_profiler");
        $__internal_bd09151b1b670d61768819b837f42f5965e430ccefdf4184f7661b942d7d4156->enter($__internal_bd09151b1b670d61768819b837f42f5965e430ccefdf4184f7661b942d7d4156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd09151b1b670d61768819b837f42f5965e430ccefdf4184f7661b942d7d4156->leave($__internal_bd09151b1b670d61768819b837f42f5965e430ccefdf4184f7661b942d7d4156_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f7cff9c2f5f4e2981af26d2d2122a4fd74f4863ff5047796433bc61ee679d54 = $this->env->getExtension("native_profiler");
        $__internal_3f7cff9c2f5f4e2981af26d2d2122a4fd74f4863ff5047796433bc61ee679d54->enter($__internal_3f7cff9c2f5f4e2981af26d2d2122a4fd74f4863ff5047796433bc61ee679d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3f7cff9c2f5f4e2981af26d2d2122a4fd74f4863ff5047796433bc61ee679d54->leave($__internal_3f7cff9c2f5f4e2981af26d2d2122a4fd74f4863ff5047796433bc61ee679d54_prof);

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
