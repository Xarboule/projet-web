<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_61b1ddc7ab07fb28e044d60fbdae2a59cf2bd0682a05ca55d7995e3dbc586036 extends Twig_Template
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
        $__internal_3eb4a5b13b13a7a81815886d3b752742739d87dffb56a449ae11238c3c85055c = $this->env->getExtension("native_profiler");
        $__internal_3eb4a5b13b13a7a81815886d3b752742739d87dffb56a449ae11238c3c85055c->enter($__internal_3eb4a5b13b13a7a81815886d3b752742739d87dffb56a449ae11238c3c85055c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3eb4a5b13b13a7a81815886d3b752742739d87dffb56a449ae11238c3c85055c->leave($__internal_3eb4a5b13b13a7a81815886d3b752742739d87dffb56a449ae11238c3c85055c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_28e06ba18bccd28682f16c8ddda932789383ae95215d11fa1bb2478a9cc4e0b6 = $this->env->getExtension("native_profiler");
        $__internal_28e06ba18bccd28682f16c8ddda932789383ae95215d11fa1bb2478a9cc4e0b6->enter($__internal_28e06ba18bccd28682f16c8ddda932789383ae95215d11fa1bb2478a9cc4e0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_28e06ba18bccd28682f16c8ddda932789383ae95215d11fa1bb2478a9cc4e0b6->leave($__internal_28e06ba18bccd28682f16c8ddda932789383ae95215d11fa1bb2478a9cc4e0b6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3b445de1767a2b4384f05a18c8673bf577187c9178e6eecb7f976e8fee16c7ea = $this->env->getExtension("native_profiler");
        $__internal_3b445de1767a2b4384f05a18c8673bf577187c9178e6eecb7f976e8fee16c7ea->enter($__internal_3b445de1767a2b4384f05a18c8673bf577187c9178e6eecb7f976e8fee16c7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3b445de1767a2b4384f05a18c8673bf577187c9178e6eecb7f976e8fee16c7ea->leave($__internal_3b445de1767a2b4384f05a18c8673bf577187c9178e6eecb7f976e8fee16c7ea_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dfabd0c950ee889530077a8c82016dfbe63a941fbd396cd238edefd7f086b017 = $this->env->getExtension("native_profiler");
        $__internal_dfabd0c950ee889530077a8c82016dfbe63a941fbd396cd238edefd7f086b017->enter($__internal_dfabd0c950ee889530077a8c82016dfbe63a941fbd396cd238edefd7f086b017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dfabd0c950ee889530077a8c82016dfbe63a941fbd396cd238edefd7f086b017->leave($__internal_dfabd0c950ee889530077a8c82016dfbe63a941fbd396cd238edefd7f086b017_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
