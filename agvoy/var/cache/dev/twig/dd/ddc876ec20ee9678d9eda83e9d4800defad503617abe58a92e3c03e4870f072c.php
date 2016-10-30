<?php

/* circuit/addStep.html.twig */
class __TwigTemplate_485ddecfaa1279f1680da67937ea00c8bd73fd324ee846e2adc93641fa161ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "circuit/addStep.html.twig", 1);
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
        $__internal_8976683a8abb033ea364ddec92089862afc13c1623661bf72c902fe1aa6d4179 = $this->env->getExtension("native_profiler");
        $__internal_8976683a8abb033ea364ddec92089862afc13c1623661bf72c902fe1aa6d4179->enter($__internal_8976683a8abb033ea364ddec92089862afc13c1623661bf72c902fe1aa6d4179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuit/addStep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8976683a8abb033ea364ddec92089862afc13c1623661bf72c902fe1aa6d4179->leave($__internal_8976683a8abb033ea364ddec92089862afc13c1623661bf72c902fe1aa6d4179_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_899bdcccd0fdde8db048f1cef748949c269fcbceab0cfbbe9cccf9bb4212225a = $this->env->getExtension("native_profiler");
        $__internal_899bdcccd0fdde8db048f1cef748949c269fcbceab0cfbbe9cccf9bb4212225a->enter($__internal_899bdcccd0fdde8db048f1cef748949c269fcbceab0cfbbe9cccf9bb4212225a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "

    <h3>Ajout d'une étape</h3>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_899bdcccd0fdde8db048f1cef748949c269fcbceab0cfbbe9cccf9bb4212225a->leave($__internal_899bdcccd0fdde8db048f1cef748949c269fcbceab0cfbbe9cccf9bb4212225a_prof);

    }

    public function getTemplateName()
    {
        return "circuit/addStep.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* */
/*     <h3>Ajout d'une étape</h3>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %} {# main #}*/
