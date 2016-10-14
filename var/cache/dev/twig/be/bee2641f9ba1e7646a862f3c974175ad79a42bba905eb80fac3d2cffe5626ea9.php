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
        $__internal_1fd0ea731567442fac1e1628e422afb204f40d7a738d677d6a25dc0d4a90c15f = $this->env->getExtension("native_profiler");
        $__internal_1fd0ea731567442fac1e1628e422afb204f40d7a738d677d6a25dc0d4a90c15f->enter($__internal_1fd0ea731567442fac1e1628e422afb204f40d7a738d677d6a25dc0d4a90c15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd0ea731567442fac1e1628e422afb204f40d7a738d677d6a25dc0d4a90c15f->leave($__internal_1fd0ea731567442fac1e1628e422afb204f40d7a738d677d6a25dc0d4a90c15f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d51816d4c4c121f43e15b8d799c7c85d6f1942158fc211e5a4b9d74afd8d1cf = $this->env->getExtension("native_profiler");
        $__internal_1d51816d4c4c121f43e15b8d799c7c85d6f1942158fc211e5a4b9d74afd8d1cf->enter($__internal_1d51816d4c4c121f43e15b8d799c7c85d6f1942158fc211e5a4b9d74afd8d1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_1d51816d4c4c121f43e15b8d799c7c85d6f1942158fc211e5a4b9d74afd8d1cf->leave($__internal_1d51816d4c4c121f43e15b8d799c7c85d6f1942158fc211e5a4b9d74afd8d1cf_prof);

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
