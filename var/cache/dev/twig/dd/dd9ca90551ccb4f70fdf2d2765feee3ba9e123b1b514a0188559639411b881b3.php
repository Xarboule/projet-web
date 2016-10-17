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
        $__internal_c361e89c9c778b54c6025440cc230a9ecb02339c9db2454af593a972b1511d8b = $this->env->getExtension("native_profiler");
        $__internal_c361e89c9c778b54c6025440cc230a9ecb02339c9db2454af593a972b1511d8b->enter($__internal_c361e89c9c778b54c6025440cc230a9ecb02339c9db2454af593a972b1511d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c361e89c9c778b54c6025440cc230a9ecb02339c9db2454af593a972b1511d8b->leave($__internal_c361e89c9c778b54c6025440cc230a9ecb02339c9db2454af593a972b1511d8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d4ce23b75b12cd90a74bf7c9e75c2187c5fbcd9094722d9647ed8e540821172 = $this->env->getExtension("native_profiler");
        $__internal_3d4ce23b75b12cd90a74bf7c9e75c2187c5fbcd9094722d9647ed8e540821172->enter($__internal_3d4ce23b75b12cd90a74bf7c9e75c2187c5fbcd9094722d9647ed8e540821172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3d4ce23b75b12cd90a74bf7c9e75c2187c5fbcd9094722d9647ed8e540821172->leave($__internal_3d4ce23b75b12cd90a74bf7c9e75c2187c5fbcd9094722d9647ed8e540821172_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4c0094bbc35f22b282218d53e3157f8f1d864ab54b38664d3f1a6d8d4189625e = $this->env->getExtension("native_profiler");
        $__internal_4c0094bbc35f22b282218d53e3157f8f1d864ab54b38664d3f1a6d8d4189625e->enter($__internal_4c0094bbc35f22b282218d53e3157f8f1d864ab54b38664d3f1a6d8d4189625e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4c0094bbc35f22b282218d53e3157f8f1d864ab54b38664d3f1a6d8d4189625e->leave($__internal_4c0094bbc35f22b282218d53e3157f8f1d864ab54b38664d3f1a6d8d4189625e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67a22482b04a31dfd4fb1fd10a4006d9a0b0b5323f91295c9c5af4df3ef8a8d1 = $this->env->getExtension("native_profiler");
        $__internal_67a22482b04a31dfd4fb1fd10a4006d9a0b0b5323f91295c9c5af4df3ef8a8d1->enter($__internal_67a22482b04a31dfd4fb1fd10a4006d9a0b0b5323f91295c9c5af4df3ef8a8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_67a22482b04a31dfd4fb1fd10a4006d9a0b0b5323f91295c9c5af4df3ef8a8d1->leave($__internal_67a22482b04a31dfd4fb1fd10a4006d9a0b0b5323f91295c9c5af4df3ef8a8d1_prof);

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
