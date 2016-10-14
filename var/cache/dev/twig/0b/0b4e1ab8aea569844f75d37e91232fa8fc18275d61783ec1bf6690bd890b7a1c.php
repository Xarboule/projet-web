<?php

/* homepage/homepage.html.twig */
class __TwigTemplate_81e72a0b81c8a67e4eca3ef8a51aaafdeb661f2010c3c569ddf2dc7399e6c70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "homepage/homepage.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9dfc5e7cd91ef9f3bd158687adad69f89e2bd3f599f910c42376289f09b95c8 = $this->env->getExtension("native_profiler");
        $__internal_d9dfc5e7cd91ef9f3bd158687adad69f89e2bd3f599f910c42376289f09b95c8->enter($__internal_d9dfc5e7cd91ef9f3bd158687adad69f89e2bd3f599f910c42376289f09b95c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9dfc5e7cd91ef9f3bd158687adad69f89e2bd3f599f910c42376289f09b95c8->leave($__internal_d9dfc5e7cd91ef9f3bd158687adad69f89e2bd3f599f910c42376289f09b95c8_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_7f84696603cecbb5deac350d02f233580c96121365ff6cb74ac8afb1ddf1f02d = $this->env->getExtension("native_profiler");
        $__internal_7f84696603cecbb5deac350d02f233580c96121365ff6cb74ac8afb1ddf1f02d->enter($__internal_7f84696603cecbb5deac350d02f233580c96121365ff6cb74ac8afb1ddf1f02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "

    <h1>Bienvenue sur INT Holidays !</h1>
    
    <img src=\"http://66.media.tumblr.com/tumblr_l7ceutBSpU1qb4gnro1_1280.jpg\" style=\"width: 50%; height: 50%\" >
";
        
        $__internal_7f84696603cecbb5deac350d02f233580c96121365ff6cb74ac8afb1ddf1f02d->leave($__internal_7f84696603cecbb5deac350d02f233580c96121365ff6cb74ac8afb1ddf1f02d_prof);

    }

    public function getTemplateName()
    {
        return "homepage/homepage.html.twig";
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
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* */
/*     <h1>Bienvenue sur INT Holidays !</h1>*/
/*     */
/*     <img src="http://66.media.tumblr.com/tumblr_l7ceutBSpU1qb4gnro1_1280.jpg" style="width: 50%; height: 50%" >*/
/* {% endblock %} {# main #}*/
