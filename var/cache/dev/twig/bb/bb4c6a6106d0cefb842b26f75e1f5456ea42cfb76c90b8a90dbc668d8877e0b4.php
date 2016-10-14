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
        $__internal_e1a39bc12bdf4a69ec0264f9af99fd62e2b19e650bfc07bfc9a8b68d9d23e4ee = $this->env->getExtension("native_profiler");
        $__internal_e1a39bc12bdf4a69ec0264f9af99fd62e2b19e650bfc07bfc9a8b68d9d23e4ee->enter($__internal_e1a39bc12bdf4a69ec0264f9af99fd62e2b19e650bfc07bfc9a8b68d9d23e4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1a39bc12bdf4a69ec0264f9af99fd62e2b19e650bfc07bfc9a8b68d9d23e4ee->leave($__internal_e1a39bc12bdf4a69ec0264f9af99fd62e2b19e650bfc07bfc9a8b68d9d23e4ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e05e2f635b8420396dbee609e6ea1831d42e9fa222a5f4c08b4b3e7338147556 = $this->env->getExtension("native_profiler");
        $__internal_e05e2f635b8420396dbee609e6ea1831d42e9fa222a5f4c08b4b3e7338147556->enter($__internal_e05e2f635b8420396dbee609e6ea1831d42e9fa222a5f4c08b4b3e7338147556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e05e2f635b8420396dbee609e6ea1831d42e9fa222a5f4c08b4b3e7338147556->leave($__internal_e05e2f635b8420396dbee609e6ea1831d42e9fa222a5f4c08b4b3e7338147556_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1247eacd4a1a97f0c9fe36ef846c7b7b27933dd1f4f802ab2351c6a45c777471 = $this->env->getExtension("native_profiler");
        $__internal_1247eacd4a1a97f0c9fe36ef846c7b7b27933dd1f4f802ab2351c6a45c777471->enter($__internal_1247eacd4a1a97f0c9fe36ef846c7b7b27933dd1f4f802ab2351c6a45c777471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1247eacd4a1a97f0c9fe36ef846c7b7b27933dd1f4f802ab2351c6a45c777471->leave($__internal_1247eacd4a1a97f0c9fe36ef846c7b7b27933dd1f4f802ab2351c6a45c777471_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c236b42e85ed35cb455149006ea0cf8e23c779048dd46879360c35dc9a3cf40e = $this->env->getExtension("native_profiler");
        $__internal_c236b42e85ed35cb455149006ea0cf8e23c779048dd46879360c35dc9a3cf40e->enter($__internal_c236b42e85ed35cb455149006ea0cf8e23c779048dd46879360c35dc9a3cf40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c236b42e85ed35cb455149006ea0cf8e23c779048dd46879360c35dc9a3cf40e->leave($__internal_c236b42e85ed35cb455149006ea0cf8e23c779048dd46879360c35dc9a3cf40e_prof);

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
