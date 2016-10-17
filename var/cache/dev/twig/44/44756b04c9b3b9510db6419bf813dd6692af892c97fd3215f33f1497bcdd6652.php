<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_641f695987c1dbf7621b83dfb921290e3983ab68a64f0a208509523082755a25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_2e38613304df10fe1d8968f1f9b29b2c9df732dd826584f4699a0536924fe8ca = $this->env->getExtension("native_profiler");
        $__internal_2e38613304df10fe1d8968f1f9b29b2c9df732dd826584f4699a0536924fe8ca->enter($__internal_2e38613304df10fe1d8968f1f9b29b2c9df732dd826584f4699a0536924fe8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e38613304df10fe1d8968f1f9b29b2c9df732dd826584f4699a0536924fe8ca->leave($__internal_2e38613304df10fe1d8968f1f9b29b2c9df732dd826584f4699a0536924fe8ca_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75e311ee4363641f0d5c3df3f9c00aef17934ce79fb09a1b095bcb2c67ab0e78 = $this->env->getExtension("native_profiler");
        $__internal_75e311ee4363641f0d5c3df3f9c00aef17934ce79fb09a1b095bcb2c67ab0e78->enter($__internal_75e311ee4363641f0d5c3df3f9c00aef17934ce79fb09a1b095bcb2c67ab0e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_75e311ee4363641f0d5c3df3f9c00aef17934ce79fb09a1b095bcb2c67ab0e78->leave($__internal_75e311ee4363641f0d5c3df3f9c00aef17934ce79fb09a1b095bcb2c67ab0e78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
