<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a735ee92d0d477e476b239bdd1d439a69b7834c80fd33d144ed0334e303b8350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_44a68c0ef5b421e76e9fe8b3b601e766ce401da3f6eaae79b88f482c9a18f260 = $this->env->getExtension("native_profiler");
        $__internal_44a68c0ef5b421e76e9fe8b3b601e766ce401da3f6eaae79b88f482c9a18f260->enter($__internal_44a68c0ef5b421e76e9fe8b3b601e766ce401da3f6eaae79b88f482c9a18f260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a68c0ef5b421e76e9fe8b3b601e766ce401da3f6eaae79b88f482c9a18f260->leave($__internal_44a68c0ef5b421e76e9fe8b3b601e766ce401da3f6eaae79b88f482c9a18f260_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9c8eb348b36625dd07eb4f6c8aa8cf4bc6896c08140f3fa79b6a581e90ab2f8 = $this->env->getExtension("native_profiler");
        $__internal_e9c8eb348b36625dd07eb4f6c8aa8cf4bc6896c08140f3fa79b6a581e90ab2f8->enter($__internal_e9c8eb348b36625dd07eb4f6c8aa8cf4bc6896c08140f3fa79b6a581e90ab2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e9c8eb348b36625dd07eb4f6c8aa8cf4bc6896c08140f3fa79b6a581e90ab2f8->leave($__internal_e9c8eb348b36625dd07eb4f6c8aa8cf4bc6896c08140f3fa79b6a581e90ab2f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
