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
        $__internal_9974980ec0ca0da10b0f6ac9e9bc76ebb2c68b974e628d6f64db09b96fb54a99 = $this->env->getExtension("native_profiler");
        $__internal_9974980ec0ca0da10b0f6ac9e9bc76ebb2c68b974e628d6f64db09b96fb54a99->enter($__internal_9974980ec0ca0da10b0f6ac9e9bc76ebb2c68b974e628d6f64db09b96fb54a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9974980ec0ca0da10b0f6ac9e9bc76ebb2c68b974e628d6f64db09b96fb54a99->leave($__internal_9974980ec0ca0da10b0f6ac9e9bc76ebb2c68b974e628d6f64db09b96fb54a99_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8574ede50b5dcbcdeec6f3e9580acd45aec08edfc46e3111f699452a7b22d2c = $this->env->getExtension("native_profiler");
        $__internal_d8574ede50b5dcbcdeec6f3e9580acd45aec08edfc46e3111f699452a7b22d2c->enter($__internal_d8574ede50b5dcbcdeec6f3e9580acd45aec08edfc46e3111f699452a7b22d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d8574ede50b5dcbcdeec6f3e9580acd45aec08edfc46e3111f699452a7b22d2c->leave($__internal_d8574ede50b5dcbcdeec6f3e9580acd45aec08edfc46e3111f699452a7b22d2c_prof);

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
