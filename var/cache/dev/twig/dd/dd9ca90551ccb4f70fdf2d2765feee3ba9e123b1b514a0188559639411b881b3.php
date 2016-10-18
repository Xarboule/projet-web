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
        $__internal_f33ad223d004ce902a8597ab7f8f8526dfef80c10738d912b9388dc49c78acde = $this->env->getExtension("native_profiler");
        $__internal_f33ad223d004ce902a8597ab7f8f8526dfef80c10738d912b9388dc49c78acde->enter($__internal_f33ad223d004ce902a8597ab7f8f8526dfef80c10738d912b9388dc49c78acde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f33ad223d004ce902a8597ab7f8f8526dfef80c10738d912b9388dc49c78acde->leave($__internal_f33ad223d004ce902a8597ab7f8f8526dfef80c10738d912b9388dc49c78acde_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1c6f7850020a937c67cdb0c67a1d4ecca111e36c6618864a881b88c8f1e151a = $this->env->getExtension("native_profiler");
        $__internal_f1c6f7850020a937c67cdb0c67a1d4ecca111e36c6618864a881b88c8f1e151a->enter($__internal_f1c6f7850020a937c67cdb0c67a1d4ecca111e36c6618864a881b88c8f1e151a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f1c6f7850020a937c67cdb0c67a1d4ecca111e36c6618864a881b88c8f1e151a->leave($__internal_f1c6f7850020a937c67cdb0c67a1d4ecca111e36c6618864a881b88c8f1e151a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d30d01fbe468c326035f65dd578204e7be745cf5cbdfeff05cf2d2f9b8b3281 = $this->env->getExtension("native_profiler");
        $__internal_1d30d01fbe468c326035f65dd578204e7be745cf5cbdfeff05cf2d2f9b8b3281->enter($__internal_1d30d01fbe468c326035f65dd578204e7be745cf5cbdfeff05cf2d2f9b8b3281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d30d01fbe468c326035f65dd578204e7be745cf5cbdfeff05cf2d2f9b8b3281->leave($__internal_1d30d01fbe468c326035f65dd578204e7be745cf5cbdfeff05cf2d2f9b8b3281_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cabca19e0fd5ea5fe1c466d0c08c20a927c6c4e696b0dc519ee4801ca37ee59 = $this->env->getExtension("native_profiler");
        $__internal_3cabca19e0fd5ea5fe1c466d0c08c20a927c6c4e696b0dc519ee4801ca37ee59->enter($__internal_3cabca19e0fd5ea5fe1c466d0c08c20a927c6c4e696b0dc519ee4801ca37ee59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3cabca19e0fd5ea5fe1c466d0c08c20a927c6c4e696b0dc519ee4801ca37ee59->leave($__internal_3cabca19e0fd5ea5fe1c466d0c08c20a927c6c4e696b0dc519ee4801ca37ee59_prof);

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
