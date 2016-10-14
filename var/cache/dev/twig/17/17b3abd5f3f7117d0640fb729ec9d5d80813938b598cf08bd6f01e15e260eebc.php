<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a735ee92d0d477e476b239bdd1d439a69b7834c80fd33d144ed0334e303b8350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_77433b90a2af91cfb54d94ab56f7ff859c3862fb2ef3a500cb215ead6aa801a0 = $this->env->getExtension("native_profiler");
        $__internal_77433b90a2af91cfb54d94ab56f7ff859c3862fb2ef3a500cb215ead6aa801a0->enter($__internal_77433b90a2af91cfb54d94ab56f7ff859c3862fb2ef3a500cb215ead6aa801a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77433b90a2af91cfb54d94ab56f7ff859c3862fb2ef3a500cb215ead6aa801a0->leave($__internal_77433b90a2af91cfb54d94ab56f7ff859c3862fb2ef3a500cb215ead6aa801a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e472db4bf5bd2fca3245f01438d48bd0d4703f69fff8f88f13aead385c25988 = $this->env->getExtension("native_profiler");
        $__internal_6e472db4bf5bd2fca3245f01438d48bd0d4703f69fff8f88f13aead385c25988->enter($__internal_6e472db4bf5bd2fca3245f01438d48bd0d4703f69fff8f88f13aead385c25988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6e472db4bf5bd2fca3245f01438d48bd0d4703f69fff8f88f13aead385c25988->leave($__internal_6e472db4bf5bd2fca3245f01438d48bd0d4703f69fff8f88f13aead385c25988_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
