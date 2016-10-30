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
        $__internal_8caf20640d35681ac951924643d7aa57db9a72677e19d51ec31fb34a9e054ee1 = $this->env->getExtension("native_profiler");
        $__internal_8caf20640d35681ac951924643d7aa57db9a72677e19d51ec31fb34a9e054ee1->enter($__internal_8caf20640d35681ac951924643d7aa57db9a72677e19d51ec31fb34a9e054ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8caf20640d35681ac951924643d7aa57db9a72677e19d51ec31fb34a9e054ee1->leave($__internal_8caf20640d35681ac951924643d7aa57db9a72677e19d51ec31fb34a9e054ee1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a06cd1d8c1e6df8e9d705f358660528535d1e59d035e7afd2a617d554f9a8b5e = $this->env->getExtension("native_profiler");
        $__internal_a06cd1d8c1e6df8e9d705f358660528535d1e59d035e7afd2a617d554f9a8b5e->enter($__internal_a06cd1d8c1e6df8e9d705f358660528535d1e59d035e7afd2a617d554f9a8b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a06cd1d8c1e6df8e9d705f358660528535d1e59d035e7afd2a617d554f9a8b5e->leave($__internal_a06cd1d8c1e6df8e9d705f358660528535d1e59d035e7afd2a617d554f9a8b5e_prof);

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
