<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9df24fc1c59730ee87b3a3f113651fd184100c9b25e042c7e9b68d4afd84e5d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_d45702c89a27b23f617bb9c996bb784b60d0c257b4a559b840c62a39c87a5bc3 = $this->env->getExtension("native_profiler");
        $__internal_d45702c89a27b23f617bb9c996bb784b60d0c257b4a559b840c62a39c87a5bc3->enter($__internal_d45702c89a27b23f617bb9c996bb784b60d0c257b4a559b840c62a39c87a5bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d45702c89a27b23f617bb9c996bb784b60d0c257b4a559b840c62a39c87a5bc3->leave($__internal_d45702c89a27b23f617bb9c996bb784b60d0c257b4a559b840c62a39c87a5bc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3010bd63728c7825ed2ad3e1adff270fbef2d0e5974088c9859d8425451aac3d = $this->env->getExtension("native_profiler");
        $__internal_3010bd63728c7825ed2ad3e1adff270fbef2d0e5974088c9859d8425451aac3d->enter($__internal_3010bd63728c7825ed2ad3e1adff270fbef2d0e5974088c9859d8425451aac3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3010bd63728c7825ed2ad3e1adff270fbef2d0e5974088c9859d8425451aac3d->leave($__internal_3010bd63728c7825ed2ad3e1adff270fbef2d0e5974088c9859d8425451aac3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
