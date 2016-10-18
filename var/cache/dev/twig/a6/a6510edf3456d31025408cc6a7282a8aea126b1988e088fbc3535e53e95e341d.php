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
        $__internal_2e4fcd05e1c06986bb7cf13dd11426b446d789c095748c8b755a56748a0a4a50 = $this->env->getExtension("native_profiler");
        $__internal_2e4fcd05e1c06986bb7cf13dd11426b446d789c095748c8b755a56748a0a4a50->enter($__internal_2e4fcd05e1c06986bb7cf13dd11426b446d789c095748c8b755a56748a0a4a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e4fcd05e1c06986bb7cf13dd11426b446d789c095748c8b755a56748a0a4a50->leave($__internal_2e4fcd05e1c06986bb7cf13dd11426b446d789c095748c8b755a56748a0a4a50_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6047702ed0685d04bd6b857ee541c2c9fbe7bf83669fc0428e1386ca03749731 = $this->env->getExtension("native_profiler");
        $__internal_6047702ed0685d04bd6b857ee541c2c9fbe7bf83669fc0428e1386ca03749731->enter($__internal_6047702ed0685d04bd6b857ee541c2c9fbe7bf83669fc0428e1386ca03749731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_6047702ed0685d04bd6b857ee541c2c9fbe7bf83669fc0428e1386ca03749731->leave($__internal_6047702ed0685d04bd6b857ee541c2c9fbe7bf83669fc0428e1386ca03749731_prof);

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
