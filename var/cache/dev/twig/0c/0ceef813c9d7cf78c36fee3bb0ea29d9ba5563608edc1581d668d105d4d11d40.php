<?php

/* :circuit:add.html.twig */
class __TwigTemplate_b9d06f2c6c043c81b4c3cacd0e932360850b0b82d0856fc032a375fc6c3b4437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:add.html.twig", 1);
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
        $__internal_4a36ac5234f01cc94c91d0cfb267b95369145f0ab06d97dcae30131a6ae61f47 = $this->env->getExtension("native_profiler");
        $__internal_4a36ac5234f01cc94c91d0cfb267b95369145f0ab06d97dcae30131a6ae61f47->enter($__internal_4a36ac5234f01cc94c91d0cfb267b95369145f0ab06d97dcae30131a6ae61f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a36ac5234f01cc94c91d0cfb267b95369145f0ab06d97dcae30131a6ae61f47->leave($__internal_4a36ac5234f01cc94c91d0cfb267b95369145f0ab06d97dcae30131a6ae61f47_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_66e255d003f55a169a27f63ec52af379761fbcff0c726fefccc6b1a869875a0d = $this->env->getExtension("native_profiler");
        $__internal_66e255d003f55a169a27f63ec52af379761fbcff0c726fefccc6b1a869875a0d->enter($__internal_66e255d003f55a169a27f63ec52af379761fbcff0c726fefccc6b1a869875a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "

    <h3>Ajout d'un voyage</h3>

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
        
        $__internal_66e255d003f55a169a27f63ec52af379761fbcff0c726fefccc6b1a869875a0d->leave($__internal_66e255d003f55a169a27f63ec52af379761fbcff0c726fefccc6b1a869875a0d_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:add.html.twig";
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
/*     <h3>Ajout d'un voyage</h3>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %} {# main #}*/
