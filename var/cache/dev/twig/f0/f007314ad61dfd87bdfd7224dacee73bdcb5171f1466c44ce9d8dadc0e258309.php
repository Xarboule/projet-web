<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b4bcfe692fb453a0948be46bac0cc5ca3ad78e0a159931644e9ace1dc7af17b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_39799aef5e540e7265994183f0ab1c1aef3d0b259d4ce7d3a85bc8d8f1bcc533 = $this->env->getExtension("native_profiler");
        $__internal_39799aef5e540e7265994183f0ab1c1aef3d0b259d4ce7d3a85bc8d8f1bcc533->enter($__internal_39799aef5e540e7265994183f0ab1c1aef3d0b259d4ce7d3a85bc8d8f1bcc533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39799aef5e540e7265994183f0ab1c1aef3d0b259d4ce7d3a85bc8d8f1bcc533->leave($__internal_39799aef5e540e7265994183f0ab1c1aef3d0b259d4ce7d3a85bc8d8f1bcc533_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6ad2a3e69e9660b5d87f814f255b08649dc29c4baa94129844ff0e736813577 = $this->env->getExtension("native_profiler");
        $__internal_e6ad2a3e69e9660b5d87f814f255b08649dc29c4baa94129844ff0e736813577->enter($__internal_e6ad2a3e69e9660b5d87f814f255b08649dc29c4baa94129844ff0e736813577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e6ad2a3e69e9660b5d87f814f255b08649dc29c4baa94129844ff0e736813577->leave($__internal_e6ad2a3e69e9660b5d87f814f255b08649dc29c4baa94129844ff0e736813577_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
