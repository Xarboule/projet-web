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
        $__internal_6ea7788784f5f9e82d5081b2f696e4f8e462274f6176a94ab205dafb27c79304 = $this->env->getExtension("native_profiler");
        $__internal_6ea7788784f5f9e82d5081b2f696e4f8e462274f6176a94ab205dafb27c79304->enter($__internal_6ea7788784f5f9e82d5081b2f696e4f8e462274f6176a94ab205dafb27c79304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea7788784f5f9e82d5081b2f696e4f8e462274f6176a94ab205dafb27c79304->leave($__internal_6ea7788784f5f9e82d5081b2f696e4f8e462274f6176a94ab205dafb27c79304_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e93b9426894ccfb05f07816894d7ef05f6e682a23dfe8c8d107a87487fb2bd6 = $this->env->getExtension("native_profiler");
        $__internal_3e93b9426894ccfb05f07816894d7ef05f6e682a23dfe8c8d107a87487fb2bd6->enter($__internal_3e93b9426894ccfb05f07816894d7ef05f6e682a23dfe8c8d107a87487fb2bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3e93b9426894ccfb05f07816894d7ef05f6e682a23dfe8c8d107a87487fb2bd6->leave($__internal_3e93b9426894ccfb05f07816894d7ef05f6e682a23dfe8c8d107a87487fb2bd6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_25678d6069227b972643daff14cde7e9296c01d2167b6b14d6d51ba1ec62c5ee = $this->env->getExtension("native_profiler");
        $__internal_25678d6069227b972643daff14cde7e9296c01d2167b6b14d6d51ba1ec62c5ee->enter($__internal_25678d6069227b972643daff14cde7e9296c01d2167b6b14d6d51ba1ec62c5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25678d6069227b972643daff14cde7e9296c01d2167b6b14d6d51ba1ec62c5ee->leave($__internal_25678d6069227b972643daff14cde7e9296c01d2167b6b14d6d51ba1ec62c5ee_prof);

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
