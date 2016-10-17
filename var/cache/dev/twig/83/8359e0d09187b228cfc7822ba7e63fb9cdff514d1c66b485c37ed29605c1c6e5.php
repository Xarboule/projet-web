<?php

/* circuit/modify.html.twig */
class __TwigTemplate_805b4d74ef1f8da2b359bbef0a13605691db4810f04ff7e84e2c71c9609928af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "circuit/modify.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_075fba83178ecdf5f3286eef3a6b8e7a98a9cd31c505bbfad44f2c03fb6e2964 = $this->env->getExtension("native_profiler");
        $__internal_075fba83178ecdf5f3286eef3a6b8e7a98a9cd31c505bbfad44f2c03fb6e2964->enter($__internal_075fba83178ecdf5f3286eef3a6b8e7a98a9cd31c505bbfad44f2c03fb6e2964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuit/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_075fba83178ecdf5f3286eef3a6b8e7a98a9cd31c505bbfad44f2c03fb6e2964->leave($__internal_075fba83178ecdf5f3286eef3a6b8e7a98a9cd31c505bbfad44f2c03fb6e2964_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_6a5502e1d43be237484a94d90908c5eff7cfa20a51a89e5148bb1fe44c022745 = $this->env->getExtension("native_profiler");
        $__internal_6a5502e1d43be237484a94d90908c5eff7cfa20a51a89e5148bb1fe44c022745->enter($__internal_6a5502e1d43be237484a94d90908c5eff7cfa20a51a89e5148bb1fe44c022745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <h3>Ajout d'un voyage</h3>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_6a5502e1d43be237484a94d90908c5eff7cfa20a51a89e5148bb1fe44c022745->leave($__internal_6a5502e1d43be237484a94d90908c5eff7cfa20a51a89e5148bb1fe44c022745_prof);

    }

    public function getTemplateName()
    {
        return "circuit/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <h3>Ajout d'un voyage</h3>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %} {# main #}*/
