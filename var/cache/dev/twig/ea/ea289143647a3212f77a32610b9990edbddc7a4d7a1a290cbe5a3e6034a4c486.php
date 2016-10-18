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
        $__internal_6327e4469d3acfaa82e702071064e71a9a0ec54b019b8a2120822f78d02f3cd3 = $this->env->getExtension("native_profiler");
        $__internal_6327e4469d3acfaa82e702071064e71a9a0ec54b019b8a2120822f78d02f3cd3->enter($__internal_6327e4469d3acfaa82e702071064e71a9a0ec54b019b8a2120822f78d02f3cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6327e4469d3acfaa82e702071064e71a9a0ec54b019b8a2120822f78d02f3cd3->leave($__internal_6327e4469d3acfaa82e702071064e71a9a0ec54b019b8a2120822f78d02f3cd3_prof);

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
