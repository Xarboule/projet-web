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
        $__internal_ae7ede8fd353661984e92b987c7c8204fecb6fe762977e418500007267e3fb98 = $this->env->getExtension("native_profiler");
        $__internal_ae7ede8fd353661984e92b987c7c8204fecb6fe762977e418500007267e3fb98->enter($__internal_ae7ede8fd353661984e92b987c7c8204fecb6fe762977e418500007267e3fb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7ede8fd353661984e92b987c7c8204fecb6fe762977e418500007267e3fb98->leave($__internal_ae7ede8fd353661984e92b987c7c8204fecb6fe762977e418500007267e3fb98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_470a69ed858d5cb792b267e05a75314641dd6b3a1960c6acdb2bb4e4e2416a10 = $this->env->getExtension("native_profiler");
        $__internal_470a69ed858d5cb792b267e05a75314641dd6b3a1960c6acdb2bb4e4e2416a10->enter($__internal_470a69ed858d5cb792b267e05a75314641dd6b3a1960c6acdb2bb4e4e2416a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_470a69ed858d5cb792b267e05a75314641dd6b3a1960c6acdb2bb4e4e2416a10->leave($__internal_470a69ed858d5cb792b267e05a75314641dd6b3a1960c6acdb2bb4e4e2416a10_prof);

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
