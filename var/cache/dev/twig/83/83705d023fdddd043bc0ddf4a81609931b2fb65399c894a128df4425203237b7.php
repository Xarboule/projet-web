<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_23e796593095c12203db6058aa33e1afc36b955ee32985e0b977981b1f8e3b01 extends Twig_Template
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
        $__internal_781ef4d63568fec23515c8352ed6478e2700609b662601011f9cdc234ff82296 = $this->env->getExtension("native_profiler");
        $__internal_781ef4d63568fec23515c8352ed6478e2700609b662601011f9cdc234ff82296->enter($__internal_781ef4d63568fec23515c8352ed6478e2700609b662601011f9cdc234ff82296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_781ef4d63568fec23515c8352ed6478e2700609b662601011f9cdc234ff82296->leave($__internal_781ef4d63568fec23515c8352ed6478e2700609b662601011f9cdc234ff82296_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
