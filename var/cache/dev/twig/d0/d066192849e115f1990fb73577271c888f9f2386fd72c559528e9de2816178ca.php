<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ab6b82836dbc638d05a483eefa7771598a01f2a2bdab7e71069b5a5c4604f85f extends Twig_Template
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
        $__internal_215fcb8b63417071425224390adf282baf527b913f0fbc8098f06b59ec7b2900 = $this->env->getExtension("native_profiler");
        $__internal_215fcb8b63417071425224390adf282baf527b913f0fbc8098f06b59ec7b2900->enter($__internal_215fcb8b63417071425224390adf282baf527b913f0fbc8098f06b59ec7b2900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_215fcb8b63417071425224390adf282baf527b913f0fbc8098f06b59ec7b2900->leave($__internal_215fcb8b63417071425224390adf282baf527b913f0fbc8098f06b59ec7b2900_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
