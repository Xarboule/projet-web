<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_bf74ba446e4010521500209c5841101df3fab03cda999e029277a734ee576d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_109184cf915d3b351ff75ddc35560efd1ad9f7bccf810534369c9a066e153bff = $this->env->getExtension("native_profiler");
        $__internal_109184cf915d3b351ff75ddc35560efd1ad9f7bccf810534369c9a066e153bff->enter($__internal_109184cf915d3b351ff75ddc35560efd1ad9f7bccf810534369c9a066e153bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_109184cf915d3b351ff75ddc35560efd1ad9f7bccf810534369c9a066e153bff->leave($__internal_109184cf915d3b351ff75ddc35560efd1ad9f7bccf810534369c9a066e153bff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0173ba023dd53a4b3e2399ead4e41c80138eb6be9d35a79460d39d7b647ba628 = $this->env->getExtension("native_profiler");
        $__internal_0173ba023dd53a4b3e2399ead4e41c80138eb6be9d35a79460d39d7b647ba628->enter($__internal_0173ba023dd53a4b3e2399ead4e41c80138eb6be9d35a79460d39d7b647ba628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0173ba023dd53a4b3e2399ead4e41c80138eb6be9d35a79460d39d7b647ba628->leave($__internal_0173ba023dd53a4b3e2399ead4e41c80138eb6be9d35a79460d39d7b647ba628_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14aaa22eda20348eb8c2e9e45ccb515fe890cbc4f607dfd8e77d9346646bc310 = $this->env->getExtension("native_profiler");
        $__internal_14aaa22eda20348eb8c2e9e45ccb515fe890cbc4f607dfd8e77d9346646bc310->enter($__internal_14aaa22eda20348eb8c2e9e45ccb515fe890cbc4f607dfd8e77d9346646bc310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_14aaa22eda20348eb8c2e9e45ccb515fe890cbc4f607dfd8e77d9346646bc310->leave($__internal_14aaa22eda20348eb8c2e9e45ccb515fe890cbc4f607dfd8e77d9346646bc310_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4769744df26fc607a784f72288dd56cb3b5f56b53db6d71e4c6538d8bb9fab7 = $this->env->getExtension("native_profiler");
        $__internal_b4769744df26fc607a784f72288dd56cb3b5f56b53db6d71e4c6538d8bb9fab7->enter($__internal_b4769744df26fc607a784f72288dd56cb3b5f56b53db6d71e4c6538d8bb9fab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b4769744df26fc607a784f72288dd56cb3b5f56b53db6d71e4c6538d8bb9fab7->leave($__internal_b4769744df26fc607a784f72288dd56cb3b5f56b53db6d71e4c6538d8bb9fab7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
