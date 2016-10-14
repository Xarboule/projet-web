<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_93478ea954ec6683c6a1e0c85e02ea1319e6ff4d0369a0d60cd65751e9123105 extends Twig_Template
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
        $__internal_51964ef4d52a80643d5b77badb15eaddec4bbf5c467d4eb5ce6a9f2a3b7295fa = $this->env->getExtension("native_profiler");
        $__internal_51964ef4d52a80643d5b77badb15eaddec4bbf5c467d4eb5ce6a9f2a3b7295fa->enter($__internal_51964ef4d52a80643d5b77badb15eaddec4bbf5c467d4eb5ce6a9f2a3b7295fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_51964ef4d52a80643d5b77badb15eaddec4bbf5c467d4eb5ce6a9f2a3b7295fa->leave($__internal_51964ef4d52a80643d5b77badb15eaddec4bbf5c467d4eb5ce6a9f2a3b7295fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
