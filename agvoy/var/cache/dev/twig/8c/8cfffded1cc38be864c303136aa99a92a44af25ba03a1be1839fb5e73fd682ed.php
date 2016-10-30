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
        $__internal_a91d306b8533fbf52e08ec48e12f43e8579ba893d4f9f393aaee0a60fe4f3081 = $this->env->getExtension("native_profiler");
        $__internal_a91d306b8533fbf52e08ec48e12f43e8579ba893d4f9f393aaee0a60fe4f3081->enter($__internal_a91d306b8533fbf52e08ec48e12f43e8579ba893d4f9f393aaee0a60fe4f3081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91d306b8533fbf52e08ec48e12f43e8579ba893d4f9f393aaee0a60fe4f3081->leave($__internal_a91d306b8533fbf52e08ec48e12f43e8579ba893d4f9f393aaee0a60fe4f3081_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6957e00af93b1698980749a0373f971056f3b79e582cafaf6efb5b5ab18fbd65 = $this->env->getExtension("native_profiler");
        $__internal_6957e00af93b1698980749a0373f971056f3b79e582cafaf6efb5b5ab18fbd65->enter($__internal_6957e00af93b1698980749a0373f971056f3b79e582cafaf6efb5b5ab18fbd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6957e00af93b1698980749a0373f971056f3b79e582cafaf6efb5b5ab18fbd65->leave($__internal_6957e00af93b1698980749a0373f971056f3b79e582cafaf6efb5b5ab18fbd65_prof);

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
