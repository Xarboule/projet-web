<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4bb5381a882cdedb41770ea86e2db5d19984f94c6e703e0b01d061959d60a8f5 extends Twig_Template
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
        $__internal_f2052f18e030cc96c90782463ea18b569601cabe88cc9e915c2e9f7b6c7df34f = $this->env->getExtension("native_profiler");
        $__internal_f2052f18e030cc96c90782463ea18b569601cabe88cc9e915c2e9f7b6c7df34f->enter($__internal_f2052f18e030cc96c90782463ea18b569601cabe88cc9e915c2e9f7b6c7df34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f2052f18e030cc96c90782463ea18b569601cabe88cc9e915c2e9f7b6c7df34f->leave($__internal_f2052f18e030cc96c90782463ea18b569601cabe88cc9e915c2e9f7b6c7df34f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
