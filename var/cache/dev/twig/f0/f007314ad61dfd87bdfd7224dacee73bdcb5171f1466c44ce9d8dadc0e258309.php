<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b4bcfe692fb453a0948be46bac0cc5ca3ad78e0a159931644e9ace1dc7af17b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_2fbb961797f862fc5e063c522851f39123001afe8fb99413d2e6cc202d80f894 = $this->env->getExtension("native_profiler");
        $__internal_2fbb961797f862fc5e063c522851f39123001afe8fb99413d2e6cc202d80f894->enter($__internal_2fbb961797f862fc5e063c522851f39123001afe8fb99413d2e6cc202d80f894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fbb961797f862fc5e063c522851f39123001afe8fb99413d2e6cc202d80f894->leave($__internal_2fbb961797f862fc5e063c522851f39123001afe8fb99413d2e6cc202d80f894_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a8b42cbf8130d76ac1e4fab752b7e38000bf0a3a20028d42144b74e7a0e2ea4 = $this->env->getExtension("native_profiler");
        $__internal_0a8b42cbf8130d76ac1e4fab752b7e38000bf0a3a20028d42144b74e7a0e2ea4->enter($__internal_0a8b42cbf8130d76ac1e4fab752b7e38000bf0a3a20028d42144b74e7a0e2ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0a8b42cbf8130d76ac1e4fab752b7e38000bf0a3a20028d42144b74e7a0e2ea4->leave($__internal_0a8b42cbf8130d76ac1e4fab752b7e38000bf0a3a20028d42144b74e7a0e2ea4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
