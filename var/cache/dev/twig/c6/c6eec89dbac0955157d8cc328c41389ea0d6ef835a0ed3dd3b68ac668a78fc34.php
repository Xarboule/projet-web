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
        $__internal_ce8e647834a572231b62bb16780d140899a957b201cc4894bb7bf5271cefe0c2 = $this->env->getExtension("native_profiler");
        $__internal_ce8e647834a572231b62bb16780d140899a957b201cc4894bb7bf5271cefe0c2->enter($__internal_ce8e647834a572231b62bb16780d140899a957b201cc4894bb7bf5271cefe0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ce8e647834a572231b62bb16780d140899a957b201cc4894bb7bf5271cefe0c2->leave($__internal_ce8e647834a572231b62bb16780d140899a957b201cc4894bb7bf5271cefe0c2_prof);

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
