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
        $__internal_f826f977b6acd4bf0df57722dbe8e1b98702d3ffd3bf49ab0954bb4a9200e6ff = $this->env->getExtension("native_profiler");
        $__internal_f826f977b6acd4bf0df57722dbe8e1b98702d3ffd3bf49ab0954bb4a9200e6ff->enter($__internal_f826f977b6acd4bf0df57722dbe8e1b98702d3ffd3bf49ab0954bb4a9200e6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f826f977b6acd4bf0df57722dbe8e1b98702d3ffd3bf49ab0954bb4a9200e6ff->leave($__internal_f826f977b6acd4bf0df57722dbe8e1b98702d3ffd3bf49ab0954bb4a9200e6ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e0a659620154c360b9b3118d79159151f9d7fa398197b986db242226c6ec0b5 = $this->env->getExtension("native_profiler");
        $__internal_8e0a659620154c360b9b3118d79159151f9d7fa398197b986db242226c6ec0b5->enter($__internal_8e0a659620154c360b9b3118d79159151f9d7fa398197b986db242226c6ec0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8e0a659620154c360b9b3118d79159151f9d7fa398197b986db242226c6ec0b5->leave($__internal_8e0a659620154c360b9b3118d79159151f9d7fa398197b986db242226c6ec0b5_prof);

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
