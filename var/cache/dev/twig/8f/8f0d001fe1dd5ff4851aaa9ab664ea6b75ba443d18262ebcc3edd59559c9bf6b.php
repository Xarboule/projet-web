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
        $__internal_6cb97da6c6f466f2ca3f928d249084521a92e2eea3b0ccce56252db3edabed96 = $this->env->getExtension("native_profiler");
        $__internal_6cb97da6c6f466f2ca3f928d249084521a92e2eea3b0ccce56252db3edabed96->enter($__internal_6cb97da6c6f466f2ca3f928d249084521a92e2eea3b0ccce56252db3edabed96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6cb97da6c6f466f2ca3f928d249084521a92e2eea3b0ccce56252db3edabed96->leave($__internal_6cb97da6c6f466f2ca3f928d249084521a92e2eea3b0ccce56252db3edabed96_prof);

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
