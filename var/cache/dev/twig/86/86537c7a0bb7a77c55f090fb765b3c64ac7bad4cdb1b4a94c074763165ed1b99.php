<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_fa4d0d03a2a1f7aed300a3cf871aca8de586f35d242f1afb8a05fbfcf98679ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d87f68d4d2dcee9baaaddb3b294dfa0155a9e3e27e6a8daaa6eb3f381b73ff0 = $this->env->getExtension("native_profiler");
        $__internal_1d87f68d4d2dcee9baaaddb3b294dfa0155a9e3e27e6a8daaa6eb3f381b73ff0->enter($__internal_1d87f68d4d2dcee9baaaddb3b294dfa0155a9e3e27e6a8daaa6eb3f381b73ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d87f68d4d2dcee9baaaddb3b294dfa0155a9e3e27e6a8daaa6eb3f381b73ff0->leave($__internal_1d87f68d4d2dcee9baaaddb3b294dfa0155a9e3e27e6a8daaa6eb3f381b73ff0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f47e72cc4012cd9d7f42fabf95c8bd0a43b79167f3d73e31960ec3f56e0cab61 = $this->env->getExtension("native_profiler");
        $__internal_f47e72cc4012cd9d7f42fabf95c8bd0a43b79167f3d73e31960ec3f56e0cab61->enter($__internal_f47e72cc4012cd9d7f42fabf95c8bd0a43b79167f3d73e31960ec3f56e0cab61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f47e72cc4012cd9d7f42fabf95c8bd0a43b79167f3d73e31960ec3f56e0cab61->leave($__internal_f47e72cc4012cd9d7f42fabf95c8bd0a43b79167f3d73e31960ec3f56e0cab61_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fcb3b1bbbb6ce891b7efdfad131795e18b608090a3097aecc9067b516ae2d214 = $this->env->getExtension("native_profiler");
        $__internal_fcb3b1bbbb6ce891b7efdfad131795e18b608090a3097aecc9067b516ae2d214->enter($__internal_fcb3b1bbbb6ce891b7efdfad131795e18b608090a3097aecc9067b516ae2d214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fcb3b1bbbb6ce891b7efdfad131795e18b608090a3097aecc9067b516ae2d214->leave($__internal_fcb3b1bbbb6ce891b7efdfad131795e18b608090a3097aecc9067b516ae2d214_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d74f409a88cb74d11d3bb72d8d9a7803c7261c7189758b60a090d434539995b = $this->env->getExtension("native_profiler");
        $__internal_5d74f409a88cb74d11d3bb72d8d9a7803c7261c7189758b60a090d434539995b->enter($__internal_5d74f409a88cb74d11d3bb72d8d9a7803c7261c7189758b60a090d434539995b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5d74f409a88cb74d11d3bb72d8d9a7803c7261c7189758b60a090d434539995b->leave($__internal_5d74f409a88cb74d11d3bb72d8d9a7803c7261c7189758b60a090d434539995b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
