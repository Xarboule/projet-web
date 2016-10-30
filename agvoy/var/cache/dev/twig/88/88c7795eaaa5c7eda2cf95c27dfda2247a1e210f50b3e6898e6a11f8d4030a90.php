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
        $__internal_ce40b3a8c3caa391a91f7780427ded0d63ce11f9e6c615380da4ea6166b384bc = $this->env->getExtension("native_profiler");
        $__internal_ce40b3a8c3caa391a91f7780427ded0d63ce11f9e6c615380da4ea6166b384bc->enter($__internal_ce40b3a8c3caa391a91f7780427ded0d63ce11f9e6c615380da4ea6166b384bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce40b3a8c3caa391a91f7780427ded0d63ce11f9e6c615380da4ea6166b384bc->leave($__internal_ce40b3a8c3caa391a91f7780427ded0d63ce11f9e6c615380da4ea6166b384bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cf13b3b25c6131efefff70a22c4d21454fbdda8b51994fc5073fbee42e6662b = $this->env->getExtension("native_profiler");
        $__internal_8cf13b3b25c6131efefff70a22c4d21454fbdda8b51994fc5073fbee42e6662b->enter($__internal_8cf13b3b25c6131efefff70a22c4d21454fbdda8b51994fc5073fbee42e6662b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8cf13b3b25c6131efefff70a22c4d21454fbdda8b51994fc5073fbee42e6662b->leave($__internal_8cf13b3b25c6131efefff70a22c4d21454fbdda8b51994fc5073fbee42e6662b_prof);

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
