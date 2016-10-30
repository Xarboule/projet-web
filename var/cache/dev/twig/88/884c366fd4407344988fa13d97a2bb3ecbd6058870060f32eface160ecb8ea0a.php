<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5df6915f2f101bd2cd9738212f5afbb61535608e99345dcdabfcf3a0e200c38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a96218e8c26fa654f53fea9e7b175bff110cf3b4ea77b6dd382b548a2437965f = $this->env->getExtension("native_profiler");
        $__internal_a96218e8c26fa654f53fea9e7b175bff110cf3b4ea77b6dd382b548a2437965f->enter($__internal_a96218e8c26fa654f53fea9e7b175bff110cf3b4ea77b6dd382b548a2437965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a96218e8c26fa654f53fea9e7b175bff110cf3b4ea77b6dd382b548a2437965f->leave($__internal_a96218e8c26fa654f53fea9e7b175bff110cf3b4ea77b6dd382b548a2437965f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c2654cf30832ee1ddbd3452c993ed109f3c7daa6d8b5fb40fd0453fcaf3be3a = $this->env->getExtension("native_profiler");
        $__internal_4c2654cf30832ee1ddbd3452c993ed109f3c7daa6d8b5fb40fd0453fcaf3be3a->enter($__internal_4c2654cf30832ee1ddbd3452c993ed109f3c7daa6d8b5fb40fd0453fcaf3be3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4c2654cf30832ee1ddbd3452c993ed109f3c7daa6d8b5fb40fd0453fcaf3be3a->leave($__internal_4c2654cf30832ee1ddbd3452c993ed109f3c7daa6d8b5fb40fd0453fcaf3be3a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18751437be31d445eea93b3912b9243ee3afebc5850c8f113941ee9485594007 = $this->env->getExtension("native_profiler");
        $__internal_18751437be31d445eea93b3912b9243ee3afebc5850c8f113941ee9485594007->enter($__internal_18751437be31d445eea93b3912b9243ee3afebc5850c8f113941ee9485594007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_18751437be31d445eea93b3912b9243ee3afebc5850c8f113941ee9485594007->leave($__internal_18751437be31d445eea93b3912b9243ee3afebc5850c8f113941ee9485594007_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
