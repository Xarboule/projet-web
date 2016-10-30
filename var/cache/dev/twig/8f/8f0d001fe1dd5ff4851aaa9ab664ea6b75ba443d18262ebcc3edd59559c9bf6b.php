<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9b4bdc1a7380bb95876234bf7e1e7bc3564ba07526bad4048a854a8937e61eff extends Twig_Template
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
        $__internal_3ed7ed383edcf21fb30a137566fd1d4653c8a336aa5b625394236d31746e59eb = $this->env->getExtension("native_profiler");
        $__internal_3ed7ed383edcf21fb30a137566fd1d4653c8a336aa5b625394236d31746e59eb->enter($__internal_3ed7ed383edcf21fb30a137566fd1d4653c8a336aa5b625394236d31746e59eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3ed7ed383edcf21fb30a137566fd1d4653c8a336aa5b625394236d31746e59eb->leave($__internal_3ed7ed383edcf21fb30a137566fd1d4653c8a336aa5b625394236d31746e59eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
