<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7637d9f9e8036bb86e7f3ed467b1e6543492b29f77277a4630a528bb1e9ff62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_087c792a6dc2ef6d830798f9ac7c002f9b1911abc3de81c5a0beceb3ff795fa3 = $this->env->getExtension("native_profiler");
        $__internal_087c792a6dc2ef6d830798f9ac7c002f9b1911abc3de81c5a0beceb3ff795fa3->enter($__internal_087c792a6dc2ef6d830798f9ac7c002f9b1911abc3de81c5a0beceb3ff795fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_087c792a6dc2ef6d830798f9ac7c002f9b1911abc3de81c5a0beceb3ff795fa3->leave($__internal_087c792a6dc2ef6d830798f9ac7c002f9b1911abc3de81c5a0beceb3ff795fa3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65ea50a5a0de670fa15db19be63724d005392c21e1cafaba6cc33accf3bfe644 = $this->env->getExtension("native_profiler");
        $__internal_65ea50a5a0de670fa15db19be63724d005392c21e1cafaba6cc33accf3bfe644->enter($__internal_65ea50a5a0de670fa15db19be63724d005392c21e1cafaba6cc33accf3bfe644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_65ea50a5a0de670fa15db19be63724d005392c21e1cafaba6cc33accf3bfe644->leave($__internal_65ea50a5a0de670fa15db19be63724d005392c21e1cafaba6cc33accf3bfe644_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ced1fe64291157134466c29097cf79a8270536c72344d98b6a151d3336bb55d9 = $this->env->getExtension("native_profiler");
        $__internal_ced1fe64291157134466c29097cf79a8270536c72344d98b6a151d3336bb55d9->enter($__internal_ced1fe64291157134466c29097cf79a8270536c72344d98b6a151d3336bb55d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ced1fe64291157134466c29097cf79a8270536c72344d98b6a151d3336bb55d9->leave($__internal_ced1fe64291157134466c29097cf79a8270536c72344d98b6a151d3336bb55d9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f803e0c0772e9cfefbb9879f246b60c4d44196fd16a79c652cd5d80236e4fac = $this->env->getExtension("native_profiler");
        $__internal_6f803e0c0772e9cfefbb9879f246b60c4d44196fd16a79c652cd5d80236e4fac->enter($__internal_6f803e0c0772e9cfefbb9879f246b60c4d44196fd16a79c652cd5d80236e4fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6f803e0c0772e9cfefbb9879f246b60c4d44196fd16a79c652cd5d80236e4fac->leave($__internal_6f803e0c0772e9cfefbb9879f246b60c4d44196fd16a79c652cd5d80236e4fac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
