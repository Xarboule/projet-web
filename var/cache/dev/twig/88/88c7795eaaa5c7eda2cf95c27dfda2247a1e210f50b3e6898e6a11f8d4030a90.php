<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_024c6825cd1c3093d4eaf2e16b12781c29ff0230e01a7248cbb4f198c07f663b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e6f6a7cb91f5f6310d887ee4e29788b1fb7e225e88ec5693bc976b56c67c499 = $this->env->getExtension("native_profiler");
        $__internal_1e6f6a7cb91f5f6310d887ee4e29788b1fb7e225e88ec5693bc976b56c67c499->enter($__internal_1e6f6a7cb91f5f6310d887ee4e29788b1fb7e225e88ec5693bc976b56c67c499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e6f6a7cb91f5f6310d887ee4e29788b1fb7e225e88ec5693bc976b56c67c499->leave($__internal_1e6f6a7cb91f5f6310d887ee4e29788b1fb7e225e88ec5693bc976b56c67c499_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98dfc953faa6b0b2a6d52ab414809828afbc3bbd7e804170a4956706f1dc20b3 = $this->env->getExtension("native_profiler");
        $__internal_98dfc953faa6b0b2a6d52ab414809828afbc3bbd7e804170a4956706f1dc20b3->enter($__internal_98dfc953faa6b0b2a6d52ab414809828afbc3bbd7e804170a4956706f1dc20b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_98dfc953faa6b0b2a6d52ab414809828afbc3bbd7e804170a4956706f1dc20b3->leave($__internal_98dfc953faa6b0b2a6d52ab414809828afbc3bbd7e804170a4956706f1dc20b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
