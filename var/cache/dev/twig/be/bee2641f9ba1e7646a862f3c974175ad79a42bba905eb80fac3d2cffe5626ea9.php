<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_05fd63b72b417826494d6c9a14efce5acbe2839537e771dd0f35b4e04ea260a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_405dd625722d51f73a11aa36238a51ca6d8151dcd9c3d364996765b284bc9414 = $this->env->getExtension("native_profiler");
        $__internal_405dd625722d51f73a11aa36238a51ca6d8151dcd9c3d364996765b284bc9414->enter($__internal_405dd625722d51f73a11aa36238a51ca6d8151dcd9c3d364996765b284bc9414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_405dd625722d51f73a11aa36238a51ca6d8151dcd9c3d364996765b284bc9414->leave($__internal_405dd625722d51f73a11aa36238a51ca6d8151dcd9c3d364996765b284bc9414_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca1dc44964aa0c73d2f2684f8c0ddbd2c2fc8af1e3728bc1d7a569a624292e6f = $this->env->getExtension("native_profiler");
        $__internal_ca1dc44964aa0c73d2f2684f8c0ddbd2c2fc8af1e3728bc1d7a569a624292e6f->enter($__internal_ca1dc44964aa0c73d2f2684f8c0ddbd2c2fc8af1e3728bc1d7a569a624292e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_ca1dc44964aa0c73d2f2684f8c0ddbd2c2fc8af1e3728bc1d7a569a624292e6f->leave($__internal_ca1dc44964aa0c73d2f2684f8c0ddbd2c2fc8af1e3728bc1d7a569a624292e6f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
