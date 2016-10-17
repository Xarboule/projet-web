<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_d6ee1afa2ecadc1346354ca8835dd81c10eaa2c7b08d3ca3cdc2b97e43a5c92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_28997e945c31c5ea83568fa33ee4ce663241241ced11e8c5d693dd73c26a5fef = $this->env->getExtension("native_profiler");
        $__internal_28997e945c31c5ea83568fa33ee4ce663241241ced11e8c5d693dd73c26a5fef->enter($__internal_28997e945c31c5ea83568fa33ee4ce663241241ced11e8c5d693dd73c26a5fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28997e945c31c5ea83568fa33ee4ce663241241ced11e8c5d693dd73c26a5fef->leave($__internal_28997e945c31c5ea83568fa33ee4ce663241241ced11e8c5d693dd73c26a5fef_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb7b774d54479371eef19683be6b2a66d3cdffefa6b6f61a346135d7461b63c8 = $this->env->getExtension("native_profiler");
        $__internal_bb7b774d54479371eef19683be6b2a66d3cdffefa6b6f61a346135d7461b63c8->enter($__internal_bb7b774d54479371eef19683be6b2a66d3cdffefa6b6f61a346135d7461b63c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bb7b774d54479371eef19683be6b2a66d3cdffefa6b6f61a346135d7461b63c8->leave($__internal_bb7b774d54479371eef19683be6b2a66d3cdffefa6b6f61a346135d7461b63c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
