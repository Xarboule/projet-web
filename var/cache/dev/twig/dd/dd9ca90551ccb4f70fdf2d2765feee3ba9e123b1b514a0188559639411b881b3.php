<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bf74ba446e4010521500209c5841101df3fab03cda999e029277a734ee576d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_cd83e6f7a8733962db9b954fd7dad1313cd2042c9ac0e57ed2ec6c6edb5ac559 = $this->env->getExtension("native_profiler");
        $__internal_cd83e6f7a8733962db9b954fd7dad1313cd2042c9ac0e57ed2ec6c6edb5ac559->enter($__internal_cd83e6f7a8733962db9b954fd7dad1313cd2042c9ac0e57ed2ec6c6edb5ac559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd83e6f7a8733962db9b954fd7dad1313cd2042c9ac0e57ed2ec6c6edb5ac559->leave($__internal_cd83e6f7a8733962db9b954fd7dad1313cd2042c9ac0e57ed2ec6c6edb5ac559_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e9b713baff9f2758b88c8a94cae52fbcd9f72a331cb830c2c0bae9afe517a8c = $this->env->getExtension("native_profiler");
        $__internal_3e9b713baff9f2758b88c8a94cae52fbcd9f72a331cb830c2c0bae9afe517a8c->enter($__internal_3e9b713baff9f2758b88c8a94cae52fbcd9f72a331cb830c2c0bae9afe517a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e9b713baff9f2758b88c8a94cae52fbcd9f72a331cb830c2c0bae9afe517a8c->leave($__internal_3e9b713baff9f2758b88c8a94cae52fbcd9f72a331cb830c2c0bae9afe517a8c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b40a71deb1c9fc919fbc445da704240db3a5c358445afd3a11d0ead8446328e9 = $this->env->getExtension("native_profiler");
        $__internal_b40a71deb1c9fc919fbc445da704240db3a5c358445afd3a11d0ead8446328e9->enter($__internal_b40a71deb1c9fc919fbc445da704240db3a5c358445afd3a11d0ead8446328e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b40a71deb1c9fc919fbc445da704240db3a5c358445afd3a11d0ead8446328e9->leave($__internal_b40a71deb1c9fc919fbc445da704240db3a5c358445afd3a11d0ead8446328e9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35e0be661c6382fcd08b4e2714c92828280487601ad840da22a72203f236198f = $this->env->getExtension("native_profiler");
        $__internal_35e0be661c6382fcd08b4e2714c92828280487601ad840da22a72203f236198f->enter($__internal_35e0be661c6382fcd08b4e2714c92828280487601ad840da22a72203f236198f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35e0be661c6382fcd08b4e2714c92828280487601ad840da22a72203f236198f->leave($__internal_35e0be661c6382fcd08b4e2714c92828280487601ad840da22a72203f236198f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
