<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_5568804ede1c5e627515eea001633dd9542c5149c3c2d0fa77f24adb0123610b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ddf146381aa95eb192d8f9f90dff4571a6b7013da241842fc7ca240fc25f282 = $this->env->getExtension("native_profiler");
        $__internal_3ddf146381aa95eb192d8f9f90dff4571a6b7013da241842fc7ca240fc25f282->enter($__internal_3ddf146381aa95eb192d8f9f90dff4571a6b7013da241842fc7ca240fc25f282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3ddf146381aa95eb192d8f9f90dff4571a6b7013da241842fc7ca240fc25f282->leave($__internal_3ddf146381aa95eb192d8f9f90dff4571a6b7013da241842fc7ca240fc25f282_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_45b198a42af8759f462e7ad2ede641e357dd3074f8d63e2fcef671ab872efbba = $this->env->getExtension("native_profiler");
        $__internal_45b198a42af8759f462e7ad2ede641e357dd3074f8d63e2fcef671ab872efbba->enter($__internal_45b198a42af8759f462e7ad2ede641e357dd3074f8d63e2fcef671ab872efbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_45b198a42af8759f462e7ad2ede641e357dd3074f8d63e2fcef671ab872efbba->leave($__internal_45b198a42af8759f462e7ad2ede641e357dd3074f8d63e2fcef671ab872efbba_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a3860b58350d9145bf6e942b6f10d76d9f5b1db2ea3bde47f839bd373033ac06 = $this->env->getExtension("native_profiler");
        $__internal_a3860b58350d9145bf6e942b6f10d76d9f5b1db2ea3bde47f839bd373033ac06->enter($__internal_a3860b58350d9145bf6e942b6f10d76d9f5b1db2ea3bde47f839bd373033ac06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a3860b58350d9145bf6e942b6f10d76d9f5b1db2ea3bde47f839bd373033ac06->leave($__internal_a3860b58350d9145bf6e942b6f10d76d9f5b1db2ea3bde47f839bd373033ac06_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_87dde8f81b12af3e29469a6d69b514e6643e514c96e2b90501fce19ab2b1fbec = $this->env->getExtension("native_profiler");
        $__internal_87dde8f81b12af3e29469a6d69b514e6643e514c96e2b90501fce19ab2b1fbec->enter($__internal_87dde8f81b12af3e29469a6d69b514e6643e514c96e2b90501fce19ab2b1fbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_87dde8f81b12af3e29469a6d69b514e6643e514c96e2b90501fce19ab2b1fbec->leave($__internal_87dde8f81b12af3e29469a6d69b514e6643e514c96e2b90501fce19ab2b1fbec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
