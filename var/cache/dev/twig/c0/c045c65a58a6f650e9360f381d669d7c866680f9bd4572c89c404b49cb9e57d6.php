<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f6d5a0771fdbd517c272b162a7f3680685f6f7c1ff7c78a892987adfc05b1f64 extends Twig_Template
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
        $__internal_989a104a6d90b5ea91798a0c3e75a65c8da1f1080c1535566cd8e2ccdad9d87a = $this->env->getExtension("native_profiler");
        $__internal_989a104a6d90b5ea91798a0c3e75a65c8da1f1080c1535566cd8e2ccdad9d87a->enter($__internal_989a104a6d90b5ea91798a0c3e75a65c8da1f1080c1535566cd8e2ccdad9d87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_989a104a6d90b5ea91798a0c3e75a65c8da1f1080c1535566cd8e2ccdad9d87a->leave($__internal_989a104a6d90b5ea91798a0c3e75a65c8da1f1080c1535566cd8e2ccdad9d87a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
