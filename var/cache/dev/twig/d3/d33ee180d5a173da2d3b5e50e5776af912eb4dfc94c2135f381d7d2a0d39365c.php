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
        $__internal_f9b90fdbb5c7b9fad75ee450b73d467a02c8869ea620b7a1c76609027be2b3ed = $this->env->getExtension("native_profiler");
        $__internal_f9b90fdbb5c7b9fad75ee450b73d467a02c8869ea620b7a1c76609027be2b3ed->enter($__internal_f9b90fdbb5c7b9fad75ee450b73d467a02c8869ea620b7a1c76609027be2b3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9b90fdbb5c7b9fad75ee450b73d467a02c8869ea620b7a1c76609027be2b3ed->leave($__internal_f9b90fdbb5c7b9fad75ee450b73d467a02c8869ea620b7a1c76609027be2b3ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80ee53338e39d0cc7bc00ff8bd787468cbf391ff4c1ba9979d84aca3bd2c04ef = $this->env->getExtension("native_profiler");
        $__internal_80ee53338e39d0cc7bc00ff8bd787468cbf391ff4c1ba9979d84aca3bd2c04ef->enter($__internal_80ee53338e39d0cc7bc00ff8bd787468cbf391ff4c1ba9979d84aca3bd2c04ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_80ee53338e39d0cc7bc00ff8bd787468cbf391ff4c1ba9979d84aca3bd2c04ef->leave($__internal_80ee53338e39d0cc7bc00ff8bd787468cbf391ff4c1ba9979d84aca3bd2c04ef_prof);

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
