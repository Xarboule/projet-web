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
        $__internal_56f17c1b9f2ab66a3745bc1d7b62fd94e4b382ebc88c47b0c7643efe330eef19 = $this->env->getExtension("native_profiler");
        $__internal_56f17c1b9f2ab66a3745bc1d7b62fd94e4b382ebc88c47b0c7643efe330eef19->enter($__internal_56f17c1b9f2ab66a3745bc1d7b62fd94e4b382ebc88c47b0c7643efe330eef19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56f17c1b9f2ab66a3745bc1d7b62fd94e4b382ebc88c47b0c7643efe330eef19->leave($__internal_56f17c1b9f2ab66a3745bc1d7b62fd94e4b382ebc88c47b0c7643efe330eef19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8e5d912b0c3766acdabee61bda0b5df87673ea5553b2784d18ba7e7e5b40bc0 = $this->env->getExtension("native_profiler");
        $__internal_f8e5d912b0c3766acdabee61bda0b5df87673ea5553b2784d18ba7e7e5b40bc0->enter($__internal_f8e5d912b0c3766acdabee61bda0b5df87673ea5553b2784d18ba7e7e5b40bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_f8e5d912b0c3766acdabee61bda0b5df87673ea5553b2784d18ba7e7e5b40bc0->leave($__internal_f8e5d912b0c3766acdabee61bda0b5df87673ea5553b2784d18ba7e7e5b40bc0_prof);

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
