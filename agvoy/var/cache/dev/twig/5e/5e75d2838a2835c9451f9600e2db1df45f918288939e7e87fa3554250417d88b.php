<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9dcd1591a65f73f0029fd6e7075d3c67e4d599c14225b4ae56c4d5b2a023ad7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0064937fec55705c657beccab70f41864d3b956c845b705bdb47cf77edbab220 = $this->env->getExtension("native_profiler");
        $__internal_0064937fec55705c657beccab70f41864d3b956c845b705bdb47cf77edbab220->enter($__internal_0064937fec55705c657beccab70f41864d3b956c845b705bdb47cf77edbab220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0064937fec55705c657beccab70f41864d3b956c845b705bdb47cf77edbab220->leave($__internal_0064937fec55705c657beccab70f41864d3b956c845b705bdb47cf77edbab220_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
