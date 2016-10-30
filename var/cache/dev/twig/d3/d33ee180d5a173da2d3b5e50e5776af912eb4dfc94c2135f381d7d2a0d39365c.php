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
        $__internal_f99908e9a11ee5c191162ed62ef92674b08758a3ae362979be2582b683d007fc = $this->env->getExtension("native_profiler");
        $__internal_f99908e9a11ee5c191162ed62ef92674b08758a3ae362979be2582b683d007fc->enter($__internal_f99908e9a11ee5c191162ed62ef92674b08758a3ae362979be2582b683d007fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f99908e9a11ee5c191162ed62ef92674b08758a3ae362979be2582b683d007fc->leave($__internal_f99908e9a11ee5c191162ed62ef92674b08758a3ae362979be2582b683d007fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22c32b5042eab191a8487a162532344339737ee6bb3d45af6c05f915c434a59b = $this->env->getExtension("native_profiler");
        $__internal_22c32b5042eab191a8487a162532344339737ee6bb3d45af6c05f915c434a59b->enter($__internal_22c32b5042eab191a8487a162532344339737ee6bb3d45af6c05f915c434a59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_22c32b5042eab191a8487a162532344339737ee6bb3d45af6c05f915c434a59b->leave($__internal_22c32b5042eab191a8487a162532344339737ee6bb3d45af6c05f915c434a59b_prof);

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
