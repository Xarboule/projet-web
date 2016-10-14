<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c947e472181ab6933de18e59917c1a38b7a9a49bdd61a241c6777ba5c11e93c8 extends Twig_Template
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
        $__internal_30212ed1d3f9cf15e826a59083007661857b0cd73e1d54f71fb9a03a8971169d = $this->env->getExtension("native_profiler");
        $__internal_30212ed1d3f9cf15e826a59083007661857b0cd73e1d54f71fb9a03a8971169d->enter($__internal_30212ed1d3f9cf15e826a59083007661857b0cd73e1d54f71fb9a03a8971169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_30212ed1d3f9cf15e826a59083007661857b0cd73e1d54f71fb9a03a8971169d->leave($__internal_30212ed1d3f9cf15e826a59083007661857b0cd73e1d54f71fb9a03a8971169d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
