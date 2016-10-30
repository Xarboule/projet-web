<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_02c481117f1dfae28e0d8f6674ea8f3ba544a07ee046511f925d8da62aae9f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c5e84fd36a5d371f3e519167fab9e59f3092879ddbd65c02ecdcb99c76e89165 = $this->env->getExtension("native_profiler");
        $__internal_c5e84fd36a5d371f3e519167fab9e59f3092879ddbd65c02ecdcb99c76e89165->enter($__internal_c5e84fd36a5d371f3e519167fab9e59f3092879ddbd65c02ecdcb99c76e89165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e84fd36a5d371f3e519167fab9e59f3092879ddbd65c02ecdcb99c76e89165->leave($__internal_c5e84fd36a5d371f3e519167fab9e59f3092879ddbd65c02ecdcb99c76e89165_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d3b4fa83567f8c71a8285158c4451a1c7938226a9689c3fe84cea427333b7c3 = $this->env->getExtension("native_profiler");
        $__internal_0d3b4fa83567f8c71a8285158c4451a1c7938226a9689c3fe84cea427333b7c3->enter($__internal_0d3b4fa83567f8c71a8285158c4451a1c7938226a9689c3fe84cea427333b7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0d3b4fa83567f8c71a8285158c4451a1c7938226a9689c3fe84cea427333b7c3->leave($__internal_0d3b4fa83567f8c71a8285158c4451a1c7938226a9689c3fe84cea427333b7c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
