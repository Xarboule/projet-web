<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dbeb2ba8595d7848b48b9f8739f4902f8e96b2b60cfeb1d5a6da68c24036b482 extends Twig_Template
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
        $__internal_6ef6def5c50530f81f6f00c9c0f5a498a8fc8c863dd2b6a27e9265f47c6fabfa = $this->env->getExtension("native_profiler");
        $__internal_6ef6def5c50530f81f6f00c9c0f5a498a8fc8c863dd2b6a27e9265f47c6fabfa->enter($__internal_6ef6def5c50530f81f6f00c9c0f5a498a8fc8c863dd2b6a27e9265f47c6fabfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6ef6def5c50530f81f6f00c9c0f5a498a8fc8c863dd2b6a27e9265f47c6fabfa->leave($__internal_6ef6def5c50530f81f6f00c9c0f5a498a8fc8c863dd2b6a27e9265f47c6fabfa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
