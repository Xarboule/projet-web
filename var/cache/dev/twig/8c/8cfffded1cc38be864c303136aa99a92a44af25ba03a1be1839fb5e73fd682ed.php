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
        $__internal_a8c5b5e6e0549b62ef8d537c35c491b83b1e9dec9e06ba16257cea6756eb7390 = $this->env->getExtension("native_profiler");
        $__internal_a8c5b5e6e0549b62ef8d537c35c491b83b1e9dec9e06ba16257cea6756eb7390->enter($__internal_a8c5b5e6e0549b62ef8d537c35c491b83b1e9dec9e06ba16257cea6756eb7390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c5b5e6e0549b62ef8d537c35c491b83b1e9dec9e06ba16257cea6756eb7390->leave($__internal_a8c5b5e6e0549b62ef8d537c35c491b83b1e9dec9e06ba16257cea6756eb7390_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80e0f3f7c8abd42e1180c17d0fa6ccea49fc5f9562af20e8d8c7e0f449637c36 = $this->env->getExtension("native_profiler");
        $__internal_80e0f3f7c8abd42e1180c17d0fa6ccea49fc5f9562af20e8d8c7e0f449637c36->enter($__internal_80e0f3f7c8abd42e1180c17d0fa6ccea49fc5f9562af20e8d8c7e0f449637c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_80e0f3f7c8abd42e1180c17d0fa6ccea49fc5f9562af20e8d8c7e0f449637c36->leave($__internal_80e0f3f7c8abd42e1180c17d0fa6ccea49fc5f9562af20e8d8c7e0f449637c36_prof);

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
