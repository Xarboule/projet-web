<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_879a12d88489e7956528f9e8c5af4ec72abde57cb801df6158ac74e733f98952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_c27484e16818c870c407723c106ebdf293b980d7a09f0f9fb329e3c4853b602e = $this->env->getExtension("native_profiler");
        $__internal_c27484e16818c870c407723c106ebdf293b980d7a09f0f9fb329e3c4853b602e->enter($__internal_c27484e16818c870c407723c106ebdf293b980d7a09f0f9fb329e3c4853b602e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27484e16818c870c407723c106ebdf293b980d7a09f0f9fb329e3c4853b602e->leave($__internal_c27484e16818c870c407723c106ebdf293b980d7a09f0f9fb329e3c4853b602e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10bbe077c5f7134ddcfa1d20901ff6a51791863838fe644c8a357ca566930a06 = $this->env->getExtension("native_profiler");
        $__internal_10bbe077c5f7134ddcfa1d20901ff6a51791863838fe644c8a357ca566930a06->enter($__internal_10bbe077c5f7134ddcfa1d20901ff6a51791863838fe644c8a357ca566930a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_10bbe077c5f7134ddcfa1d20901ff6a51791863838fe644c8a357ca566930a06->leave($__internal_10bbe077c5f7134ddcfa1d20901ff6a51791863838fe644c8a357ca566930a06_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
