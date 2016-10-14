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
        $__internal_45a45882742a893316851bb464ce2c4b5e2c0d69f66a15e3e0d6529fc503c5ba = $this->env->getExtension("native_profiler");
        $__internal_45a45882742a893316851bb464ce2c4b5e2c0d69f66a15e3e0d6529fc503c5ba->enter($__internal_45a45882742a893316851bb464ce2c4b5e2c0d69f66a15e3e0d6529fc503c5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a45882742a893316851bb464ce2c4b5e2c0d69f66a15e3e0d6529fc503c5ba->leave($__internal_45a45882742a893316851bb464ce2c4b5e2c0d69f66a15e3e0d6529fc503c5ba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a518811dded253befe98f73ca0b60af51ada34781e4e1eea4731dfc5feb0a366 = $this->env->getExtension("native_profiler");
        $__internal_a518811dded253befe98f73ca0b60af51ada34781e4e1eea4731dfc5feb0a366->enter($__internal_a518811dded253befe98f73ca0b60af51ada34781e4e1eea4731dfc5feb0a366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a518811dded253befe98f73ca0b60af51ada34781e4e1eea4731dfc5feb0a366->leave($__internal_a518811dded253befe98f73ca0b60af51ada34781e4e1eea4731dfc5feb0a366_prof);

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
