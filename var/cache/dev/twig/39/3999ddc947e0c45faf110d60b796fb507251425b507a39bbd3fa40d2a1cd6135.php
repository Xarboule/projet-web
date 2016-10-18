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
        $__internal_267678752a18540e4445366e41f4ad902ef1715b9872b26d402eda2ecc80c7aa = $this->env->getExtension("native_profiler");
        $__internal_267678752a18540e4445366e41f4ad902ef1715b9872b26d402eda2ecc80c7aa->enter($__internal_267678752a18540e4445366e41f4ad902ef1715b9872b26d402eda2ecc80c7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_267678752a18540e4445366e41f4ad902ef1715b9872b26d402eda2ecc80c7aa->leave($__internal_267678752a18540e4445366e41f4ad902ef1715b9872b26d402eda2ecc80c7aa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_925f810ad84dca527d603d0f25c0ff5d3988383e56c28c2995b08fe02b6951f8 = $this->env->getExtension("native_profiler");
        $__internal_925f810ad84dca527d603d0f25c0ff5d3988383e56c28c2995b08fe02b6951f8->enter($__internal_925f810ad84dca527d603d0f25c0ff5d3988383e56c28c2995b08fe02b6951f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_925f810ad84dca527d603d0f25c0ff5d3988383e56c28c2995b08fe02b6951f8->leave($__internal_925f810ad84dca527d603d0f25c0ff5d3988383e56c28c2995b08fe02b6951f8_prof);

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
