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
        $__internal_7764fedee6d8e755e7c3f27f9f52c5601ef8b826b4c9931451abefd9f03aa568 = $this->env->getExtension("native_profiler");
        $__internal_7764fedee6d8e755e7c3f27f9f52c5601ef8b826b4c9931451abefd9f03aa568->enter($__internal_7764fedee6d8e755e7c3f27f9f52c5601ef8b826b4c9931451abefd9f03aa568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7764fedee6d8e755e7c3f27f9f52c5601ef8b826b4c9931451abefd9f03aa568->leave($__internal_7764fedee6d8e755e7c3f27f9f52c5601ef8b826b4c9931451abefd9f03aa568_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1a9b8651021496b7b859ee1c36a63809a75358fe2ddbe00b179deb157ce8d33 = $this->env->getExtension("native_profiler");
        $__internal_c1a9b8651021496b7b859ee1c36a63809a75358fe2ddbe00b179deb157ce8d33->enter($__internal_c1a9b8651021496b7b859ee1c36a63809a75358fe2ddbe00b179deb157ce8d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c1a9b8651021496b7b859ee1c36a63809a75358fe2ddbe00b179deb157ce8d33->leave($__internal_c1a9b8651021496b7b859ee1c36a63809a75358fe2ddbe00b179deb157ce8d33_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9af14b3d73a6adf46985d8b81417b41ddfc01e949efcc9a1c8b7f4ab05487c56 = $this->env->getExtension("native_profiler");
        $__internal_9af14b3d73a6adf46985d8b81417b41ddfc01e949efcc9a1c8b7f4ab05487c56->enter($__internal_9af14b3d73a6adf46985d8b81417b41ddfc01e949efcc9a1c8b7f4ab05487c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9af14b3d73a6adf46985d8b81417b41ddfc01e949efcc9a1c8b7f4ab05487c56->leave($__internal_9af14b3d73a6adf46985d8b81417b41ddfc01e949efcc9a1c8b7f4ab05487c56_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c59bd07610e6b3d5ae213565c96320281aeff16da51bf379477cd55067a40ca1 = $this->env->getExtension("native_profiler");
        $__internal_c59bd07610e6b3d5ae213565c96320281aeff16da51bf379477cd55067a40ca1->enter($__internal_c59bd07610e6b3d5ae213565c96320281aeff16da51bf379477cd55067a40ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c59bd07610e6b3d5ae213565c96320281aeff16da51bf379477cd55067a40ca1->leave($__internal_c59bd07610e6b3d5ae213565c96320281aeff16da51bf379477cd55067a40ca1_prof);

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
