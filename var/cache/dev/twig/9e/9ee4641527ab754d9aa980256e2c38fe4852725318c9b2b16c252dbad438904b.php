<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ff4640512c540fb249cc3ce04a555e120e7883e16a1f8e36b6aa4177198cb8ec extends Twig_Template
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
        $__internal_05bd2e27c0a9ba9bb9a7a45e62cd1186bd5f892119aa3216b6719226c5e99687 = $this->env->getExtension("native_profiler");
        $__internal_05bd2e27c0a9ba9bb9a7a45e62cd1186bd5f892119aa3216b6719226c5e99687->enter($__internal_05bd2e27c0a9ba9bb9a7a45e62cd1186bd5f892119aa3216b6719226c5e99687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_05bd2e27c0a9ba9bb9a7a45e62cd1186bd5f892119aa3216b6719226c5e99687->leave($__internal_05bd2e27c0a9ba9bb9a7a45e62cd1186bd5f892119aa3216b6719226c5e99687_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
