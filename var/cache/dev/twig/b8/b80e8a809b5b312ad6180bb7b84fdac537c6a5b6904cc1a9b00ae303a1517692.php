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
        $__internal_37af3f5ecf794cc65bbead105e22a48ff55e3d48311a2f72b515b884ae837429 = $this->env->getExtension("native_profiler");
        $__internal_37af3f5ecf794cc65bbead105e22a48ff55e3d48311a2f72b515b884ae837429->enter($__internal_37af3f5ecf794cc65bbead105e22a48ff55e3d48311a2f72b515b884ae837429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_37af3f5ecf794cc65bbead105e22a48ff55e3d48311a2f72b515b884ae837429->leave($__internal_37af3f5ecf794cc65bbead105e22a48ff55e3d48311a2f72b515b884ae837429_prof);

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
