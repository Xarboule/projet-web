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
        $__internal_583675c4d1bcb6a04480dd44c622d9715dd67758b3eff267c759cd8681b0042b = $this->env->getExtension("native_profiler");
        $__internal_583675c4d1bcb6a04480dd44c622d9715dd67758b3eff267c759cd8681b0042b->enter($__internal_583675c4d1bcb6a04480dd44c622d9715dd67758b3eff267c759cd8681b0042b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_583675c4d1bcb6a04480dd44c622d9715dd67758b3eff267c759cd8681b0042b->leave($__internal_583675c4d1bcb6a04480dd44c622d9715dd67758b3eff267c759cd8681b0042b_prof);

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
