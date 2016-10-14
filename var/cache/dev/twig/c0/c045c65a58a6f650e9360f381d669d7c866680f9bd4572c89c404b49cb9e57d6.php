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
        $__internal_f9eda043c118f7911849f1c2a2da9ba5048419a50f93e451c51fc0cc302b14c7 = $this->env->getExtension("native_profiler");
        $__internal_f9eda043c118f7911849f1c2a2da9ba5048419a50f93e451c51fc0cc302b14c7->enter($__internal_f9eda043c118f7911849f1c2a2da9ba5048419a50f93e451c51fc0cc302b14c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f9eda043c118f7911849f1c2a2da9ba5048419a50f93e451c51fc0cc302b14c7->leave($__internal_f9eda043c118f7911849f1c2a2da9ba5048419a50f93e451c51fc0cc302b14c7_prof);

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
