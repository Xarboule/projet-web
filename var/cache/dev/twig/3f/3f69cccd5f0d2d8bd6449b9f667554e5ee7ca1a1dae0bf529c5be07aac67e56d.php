<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_3cafca8a61321af0de6f822f5b47255846da78c3859a4793c151d86794ed02e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_2b779595b2ddaab9b8dee5af36a8ca4ec5a5303721532cf6a8454ab7bf1404c4 = $this->env->getExtension("native_profiler");
        $__internal_2b779595b2ddaab9b8dee5af36a8ca4ec5a5303721532cf6a8454ab7bf1404c4->enter($__internal_2b779595b2ddaab9b8dee5af36a8ca4ec5a5303721532cf6a8454ab7bf1404c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b779595b2ddaab9b8dee5af36a8ca4ec5a5303721532cf6a8454ab7bf1404c4->leave($__internal_2b779595b2ddaab9b8dee5af36a8ca4ec5a5303721532cf6a8454ab7bf1404c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_000827079fdcfa2ea37a93cca80b216734078987f5cd786845e69a7384820647 = $this->env->getExtension("native_profiler");
        $__internal_000827079fdcfa2ea37a93cca80b216734078987f5cd786845e69a7384820647->enter($__internal_000827079fdcfa2ea37a93cca80b216734078987f5cd786845e69a7384820647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_000827079fdcfa2ea37a93cca80b216734078987f5cd786845e69a7384820647->leave($__internal_000827079fdcfa2ea37a93cca80b216734078987f5cd786845e69a7384820647_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
