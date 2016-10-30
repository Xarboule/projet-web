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
        $__internal_1ed8e8ed8c9e8bfebf0222a8b20fdc7edbe202140e95a8d418d9aacd0316accf = $this->env->getExtension("native_profiler");
        $__internal_1ed8e8ed8c9e8bfebf0222a8b20fdc7edbe202140e95a8d418d9aacd0316accf->enter($__internal_1ed8e8ed8c9e8bfebf0222a8b20fdc7edbe202140e95a8d418d9aacd0316accf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed8e8ed8c9e8bfebf0222a8b20fdc7edbe202140e95a8d418d9aacd0316accf->leave($__internal_1ed8e8ed8c9e8bfebf0222a8b20fdc7edbe202140e95a8d418d9aacd0316accf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ab44abe819162c6c80965045410017d106d79dddea4f11d6371d13b61f5af24 = $this->env->getExtension("native_profiler");
        $__internal_6ab44abe819162c6c80965045410017d106d79dddea4f11d6371d13b61f5af24->enter($__internal_6ab44abe819162c6c80965045410017d106d79dddea4f11d6371d13b61f5af24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6ab44abe819162c6c80965045410017d106d79dddea4f11d6371d13b61f5af24->leave($__internal_6ab44abe819162c6c80965045410017d106d79dddea4f11d6371d13b61f5af24_prof);

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
