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
        $__internal_9d21a615ed0eabb5d28eeff75b97792ec4d69c3b270106f540534abf7c0fddea = $this->env->getExtension("native_profiler");
        $__internal_9d21a615ed0eabb5d28eeff75b97792ec4d69c3b270106f540534abf7c0fddea->enter($__internal_9d21a615ed0eabb5d28eeff75b97792ec4d69c3b270106f540534abf7c0fddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d21a615ed0eabb5d28eeff75b97792ec4d69c3b270106f540534abf7c0fddea->leave($__internal_9d21a615ed0eabb5d28eeff75b97792ec4d69c3b270106f540534abf7c0fddea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c30940330efd80ab00b09521f179f5841c90125b0f57a1814340952984194ed8 = $this->env->getExtension("native_profiler");
        $__internal_c30940330efd80ab00b09521f179f5841c90125b0f57a1814340952984194ed8->enter($__internal_c30940330efd80ab00b09521f179f5841c90125b0f57a1814340952984194ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c30940330efd80ab00b09521f179f5841c90125b0f57a1814340952984194ed8->leave($__internal_c30940330efd80ab00b09521f179f5841c90125b0f57a1814340952984194ed8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ecd2e4d7c01a8aa38b20774f8919a3c99a0ca08666e1525af38194b525d45d8 = $this->env->getExtension("native_profiler");
        $__internal_3ecd2e4d7c01a8aa38b20774f8919a3c99a0ca08666e1525af38194b525d45d8->enter($__internal_3ecd2e4d7c01a8aa38b20774f8919a3c99a0ca08666e1525af38194b525d45d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3ecd2e4d7c01a8aa38b20774f8919a3c99a0ca08666e1525af38194b525d45d8->leave($__internal_3ecd2e4d7c01a8aa38b20774f8919a3c99a0ca08666e1525af38194b525d45d8_prof);

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
