<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_74f1c94bfaa5f17dae63b56a225b64a88b7f8d98ae14c66568ea48f952a95d4a extends Twig_Template
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
        $__internal_f92b94ab6f06a1a6c2a7a50283a4ef4809d1fd262fffcb841d95926258810d00 = $this->env->getExtension("native_profiler");
        $__internal_f92b94ab6f06a1a6c2a7a50283a4ef4809d1fd262fffcb841d95926258810d00->enter($__internal_f92b94ab6f06a1a6c2a7a50283a4ef4809d1fd262fffcb841d95926258810d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f92b94ab6f06a1a6c2a7a50283a4ef4809d1fd262fffcb841d95926258810d00->leave($__internal_f92b94ab6f06a1a6c2a7a50283a4ef4809d1fd262fffcb841d95926258810d00_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
