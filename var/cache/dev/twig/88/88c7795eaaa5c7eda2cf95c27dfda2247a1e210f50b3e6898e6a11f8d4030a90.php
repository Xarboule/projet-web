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
        $__internal_cb3c61f334c035560908f447f2e160d5534f8d6780cf9508bc75f8801ed0d946 = $this->env->getExtension("native_profiler");
        $__internal_cb3c61f334c035560908f447f2e160d5534f8d6780cf9508bc75f8801ed0d946->enter($__internal_cb3c61f334c035560908f447f2e160d5534f8d6780cf9508bc75f8801ed0d946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb3c61f334c035560908f447f2e160d5534f8d6780cf9508bc75f8801ed0d946->leave($__internal_cb3c61f334c035560908f447f2e160d5534f8d6780cf9508bc75f8801ed0d946_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c434cce0abb8ea76f633c3c773148de17a9567112d42ef5389bba210eb7c7f97 = $this->env->getExtension("native_profiler");
        $__internal_c434cce0abb8ea76f633c3c773148de17a9567112d42ef5389bba210eb7c7f97->enter($__internal_c434cce0abb8ea76f633c3c773148de17a9567112d42ef5389bba210eb7c7f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c434cce0abb8ea76f633c3c773148de17a9567112d42ef5389bba210eb7c7f97->leave($__internal_c434cce0abb8ea76f633c3c773148de17a9567112d42ef5389bba210eb7c7f97_prof);

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
