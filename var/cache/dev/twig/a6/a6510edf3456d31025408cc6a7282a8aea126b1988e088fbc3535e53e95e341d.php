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
        $__internal_54f1763db7f01182f2aba8ed5cdfd8413fc003f488f7045ccd910528fd7e8721 = $this->env->getExtension("native_profiler");
        $__internal_54f1763db7f01182f2aba8ed5cdfd8413fc003f488f7045ccd910528fd7e8721->enter($__internal_54f1763db7f01182f2aba8ed5cdfd8413fc003f488f7045ccd910528fd7e8721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f1763db7f01182f2aba8ed5cdfd8413fc003f488f7045ccd910528fd7e8721->leave($__internal_54f1763db7f01182f2aba8ed5cdfd8413fc003f488f7045ccd910528fd7e8721_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f932ce2d0ff391b0d5d4d173dea8d90af98ec6d233851da9211069662ee75c92 = $this->env->getExtension("native_profiler");
        $__internal_f932ce2d0ff391b0d5d4d173dea8d90af98ec6d233851da9211069662ee75c92->enter($__internal_f932ce2d0ff391b0d5d4d173dea8d90af98ec6d233851da9211069662ee75c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f932ce2d0ff391b0d5d4d173dea8d90af98ec6d233851da9211069662ee75c92->leave($__internal_f932ce2d0ff391b0d5d4d173dea8d90af98ec6d233851da9211069662ee75c92_prof);

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
