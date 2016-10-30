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
        $__internal_8beb1efe00f28cd64301d453bd90967371e25dd11a56f72b597987eb45a80d71 = $this->env->getExtension("native_profiler");
        $__internal_8beb1efe00f28cd64301d453bd90967371e25dd11a56f72b597987eb45a80d71->enter($__internal_8beb1efe00f28cd64301d453bd90967371e25dd11a56f72b597987eb45a80d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_8beb1efe00f28cd64301d453bd90967371e25dd11a56f72b597987eb45a80d71->leave($__internal_8beb1efe00f28cd64301d453bd90967371e25dd11a56f72b597987eb45a80d71_prof);

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
