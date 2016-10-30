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
        $__internal_04009b6e76998caec2b8836d560f7025431102f9c09d59b0cc2f8559289f5f73 = $this->env->getExtension("native_profiler");
        $__internal_04009b6e76998caec2b8836d560f7025431102f9c09d59b0cc2f8559289f5f73->enter($__internal_04009b6e76998caec2b8836d560f7025431102f9c09d59b0cc2f8559289f5f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04009b6e76998caec2b8836d560f7025431102f9c09d59b0cc2f8559289f5f73->leave($__internal_04009b6e76998caec2b8836d560f7025431102f9c09d59b0cc2f8559289f5f73_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86bcb2ddad3b53f4a2231ac98e8ae869e45d00c683f833ecd4779823edb94f95 = $this->env->getExtension("native_profiler");
        $__internal_86bcb2ddad3b53f4a2231ac98e8ae869e45d00c683f833ecd4779823edb94f95->enter($__internal_86bcb2ddad3b53f4a2231ac98e8ae869e45d00c683f833ecd4779823edb94f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_86bcb2ddad3b53f4a2231ac98e8ae869e45d00c683f833ecd4779823edb94f95->leave($__internal_86bcb2ddad3b53f4a2231ac98e8ae869e45d00c683f833ecd4779823edb94f95_prof);

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
