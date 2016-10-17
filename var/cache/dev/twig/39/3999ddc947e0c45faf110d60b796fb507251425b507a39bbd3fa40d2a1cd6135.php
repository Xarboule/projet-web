<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d49b1e675509ca09963a379cf62423ad2228bc3840d1721684cbde4301f0e2e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b60cca8375d017bdb2367a11ef30617f657b47019e6d76cb4adc1f917000919 = $this->env->getExtension("native_profiler");
        $__internal_5b60cca8375d017bdb2367a11ef30617f657b47019e6d76cb4adc1f917000919->enter($__internal_5b60cca8375d017bdb2367a11ef30617f657b47019e6d76cb4adc1f917000919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5b60cca8375d017bdb2367a11ef30617f657b47019e6d76cb4adc1f917000919->leave($__internal_5b60cca8375d017bdb2367a11ef30617f657b47019e6d76cb4adc1f917000919_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fbd5aa4c4a4068534aa7c63d6c854bce36eaadb2ea3914af864791ff833b9bf = $this->env->getExtension("native_profiler");
        $__internal_9fbd5aa4c4a4068534aa7c63d6c854bce36eaadb2ea3914af864791ff833b9bf->enter($__internal_9fbd5aa4c4a4068534aa7c63d6c854bce36eaadb2ea3914af864791ff833b9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9fbd5aa4c4a4068534aa7c63d6c854bce36eaadb2ea3914af864791ff833b9bf->leave($__internal_9fbd5aa4c4a4068534aa7c63d6c854bce36eaadb2ea3914af864791ff833b9bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
