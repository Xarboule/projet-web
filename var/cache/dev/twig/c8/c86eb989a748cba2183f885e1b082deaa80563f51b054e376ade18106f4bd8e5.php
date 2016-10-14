<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_bed888fe73a32558f913be938717aa50c8559ea6d03734cf48afcf44788b11c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_57b7928ee13a195b79a8183fd9dac6f300530b8ad7ae8b980c553eed497bf73c = $this->env->getExtension("native_profiler");
        $__internal_57b7928ee13a195b79a8183fd9dac6f300530b8ad7ae8b980c553eed497bf73c->enter($__internal_57b7928ee13a195b79a8183fd9dac6f300530b8ad7ae8b980c553eed497bf73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57b7928ee13a195b79a8183fd9dac6f300530b8ad7ae8b980c553eed497bf73c->leave($__internal_57b7928ee13a195b79a8183fd9dac6f300530b8ad7ae8b980c553eed497bf73c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c97c5560d5f67cd46031da9251a38c85ccef6124504768b85ed1864d129a322 = $this->env->getExtension("native_profiler");
        $__internal_1c97c5560d5f67cd46031da9251a38c85ccef6124504768b85ed1864d129a322->enter($__internal_1c97c5560d5f67cd46031da9251a38c85ccef6124504768b85ed1864d129a322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1c97c5560d5f67cd46031da9251a38c85ccef6124504768b85ed1864d129a322->leave($__internal_1c97c5560d5f67cd46031da9251a38c85ccef6124504768b85ed1864d129a322_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
