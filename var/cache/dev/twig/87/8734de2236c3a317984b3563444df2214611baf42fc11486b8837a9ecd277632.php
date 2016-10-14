<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_33753ead2e8ba62734f91277018427c134c28010ba7d25edfcf004bc84231c07 extends Twig_Template
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
        $__internal_3514c5e822372cbfe549c6fdd83bbd2bdf23083d100fb8809d3650c0c6ffa173 = $this->env->getExtension("native_profiler");
        $__internal_3514c5e822372cbfe549c6fdd83bbd2bdf23083d100fb8809d3650c0c6ffa173->enter($__internal_3514c5e822372cbfe549c6fdd83bbd2bdf23083d100fb8809d3650c0c6ffa173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3514c5e822372cbfe549c6fdd83bbd2bdf23083d100fb8809d3650c0c6ffa173->leave($__internal_3514c5e822372cbfe549c6fdd83bbd2bdf23083d100fb8809d3650c0c6ffa173_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
