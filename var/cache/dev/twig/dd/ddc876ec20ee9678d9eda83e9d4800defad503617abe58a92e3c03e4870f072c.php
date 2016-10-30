<?php

/* :circuit:addStep.html.twig */
class __TwigTemplate_485ddecfaa1279f1680da67937ea00c8bd73fd324ee846e2adc93641fa161ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:addStep.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd532d37e0346edc9c5f0cb2dde7419ff68d589ed0ddb8a03a3a1d8d4493d03b = $this->env->getExtension("native_profiler");
        $__internal_cd532d37e0346edc9c5f0cb2dde7419ff68d589ed0ddb8a03a3a1d8d4493d03b->enter($__internal_cd532d37e0346edc9c5f0cb2dde7419ff68d589ed0ddb8a03a3a1d8d4493d03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:addStep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd532d37e0346edc9c5f0cb2dde7419ff68d589ed0ddb8a03a3a1d8d4493d03b->leave($__internal_cd532d37e0346edc9c5f0cb2dde7419ff68d589ed0ddb8a03a3a1d8d4493d03b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c2a56f4c5ecb5518ddf72970011e4d624b1b6573cb24aae4706efbe061ae4824 = $this->env->getExtension("native_profiler");
        $__internal_c2a56f4c5ecb5518ddf72970011e4d624b1b6573cb24aae4706efbe061ae4824->enter($__internal_c2a56f4c5ecb5518ddf72970011e4d624b1b6573cb24aae4706efbe061ae4824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "

    <h3>Ajout d'une étape</h3>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_c2a56f4c5ecb5518ddf72970011e4d624b1b6573cb24aae4706efbe061ae4824->leave($__internal_c2a56f4c5ecb5518ddf72970011e4d624b1b6573cb24aae4706efbe061ae4824_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:addStep.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* */
/*     <h3>Ajout d'une étape</h3>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %} {# main #}*/
