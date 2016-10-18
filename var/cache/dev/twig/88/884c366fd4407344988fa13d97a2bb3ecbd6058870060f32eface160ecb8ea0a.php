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
        $__internal_7367ad092f680d357aceb2ae28da3df4ef23d07856693fa9c6051eeb62075774 = $this->env->getExtension("native_profiler");
        $__internal_7367ad092f680d357aceb2ae28da3df4ef23d07856693fa9c6051eeb62075774->enter($__internal_7367ad092f680d357aceb2ae28da3df4ef23d07856693fa9c6051eeb62075774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7367ad092f680d357aceb2ae28da3df4ef23d07856693fa9c6051eeb62075774->leave($__internal_7367ad092f680d357aceb2ae28da3df4ef23d07856693fa9c6051eeb62075774_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbce9d8076c683ccdecfb5d83767bb86676470d7526416a73a1c1b53ddd996fd = $this->env->getExtension("native_profiler");
        $__internal_dbce9d8076c683ccdecfb5d83767bb86676470d7526416a73a1c1b53ddd996fd->enter($__internal_dbce9d8076c683ccdecfb5d83767bb86676470d7526416a73a1c1b53ddd996fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dbce9d8076c683ccdecfb5d83767bb86676470d7526416a73a1c1b53ddd996fd->leave($__internal_dbce9d8076c683ccdecfb5d83767bb86676470d7526416a73a1c1b53ddd996fd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_44e37ecfd82f7329844a4dd639e97b2fe55723525589c81f4f6f4f93214975c9 = $this->env->getExtension("native_profiler");
        $__internal_44e37ecfd82f7329844a4dd639e97b2fe55723525589c81f4f6f4f93214975c9->enter($__internal_44e37ecfd82f7329844a4dd639e97b2fe55723525589c81f4f6f4f93214975c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_44e37ecfd82f7329844a4dd639e97b2fe55723525589c81f4f6f4f93214975c9->leave($__internal_44e37ecfd82f7329844a4dd639e97b2fe55723525589c81f4f6f4f93214975c9_prof);

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
