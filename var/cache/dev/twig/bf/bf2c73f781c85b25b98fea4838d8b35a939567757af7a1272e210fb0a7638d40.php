<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2f2a9ba8a7b84140f409ece33fbbfe7582e505e7ef08af37ce9d500889f09a0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_b8d9ef6139934b2b9755216f3062f588e14807ae1b57f2751aad64897c30c21c = $this->env->getExtension("native_profiler");
        $__internal_b8d9ef6139934b2b9755216f3062f588e14807ae1b57f2751aad64897c30c21c->enter($__internal_b8d9ef6139934b2b9755216f3062f588e14807ae1b57f2751aad64897c30c21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d9ef6139934b2b9755216f3062f588e14807ae1b57f2751aad64897c30c21c->leave($__internal_b8d9ef6139934b2b9755216f3062f588e14807ae1b57f2751aad64897c30c21c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f00cc66a71dbb8b46238d2dbe0100ba048c8be4daff6b26285117ed664b1c3e = $this->env->getExtension("native_profiler");
        $__internal_9f00cc66a71dbb8b46238d2dbe0100ba048c8be4daff6b26285117ed664b1c3e->enter($__internal_9f00cc66a71dbb8b46238d2dbe0100ba048c8be4daff6b26285117ed664b1c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_9f00cc66a71dbb8b46238d2dbe0100ba048c8be4daff6b26285117ed664b1c3e->leave($__internal_9f00cc66a71dbb8b46238d2dbe0100ba048c8be4daff6b26285117ed664b1c3e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
