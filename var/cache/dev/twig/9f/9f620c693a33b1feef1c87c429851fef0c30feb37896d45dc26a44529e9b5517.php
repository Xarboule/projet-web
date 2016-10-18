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
        $__internal_1d987a926894639590c3194ff410e0aa78074e71ddfb3157dc244e8a6a68bf1c = $this->env->getExtension("native_profiler");
        $__internal_1d987a926894639590c3194ff410e0aa78074e71ddfb3157dc244e8a6a68bf1c->enter($__internal_1d987a926894639590c3194ff410e0aa78074e71ddfb3157dc244e8a6a68bf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1d987a926894639590c3194ff410e0aa78074e71ddfb3157dc244e8a6a68bf1c->leave($__internal_1d987a926894639590c3194ff410e0aa78074e71ddfb3157dc244e8a6a68bf1c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7dabcad1e1cb82131cd80464b47005913c14df1f161e614dd3c05caf2e34dd98 = $this->env->getExtension("native_profiler");
        $__internal_7dabcad1e1cb82131cd80464b47005913c14df1f161e614dd3c05caf2e34dd98->enter($__internal_7dabcad1e1cb82131cd80464b47005913c14df1f161e614dd3c05caf2e34dd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7dabcad1e1cb82131cd80464b47005913c14df1f161e614dd3c05caf2e34dd98->leave($__internal_7dabcad1e1cb82131cd80464b47005913c14df1f161e614dd3c05caf2e34dd98_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7d147c39f2f1f64f5d0458863194744860cd2e6ad503bfe5e709c52fdc0e21ea = $this->env->getExtension("native_profiler");
        $__internal_7d147c39f2f1f64f5d0458863194744860cd2e6ad503bfe5e709c52fdc0e21ea->enter($__internal_7d147c39f2f1f64f5d0458863194744860cd2e6ad503bfe5e709c52fdc0e21ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7d147c39f2f1f64f5d0458863194744860cd2e6ad503bfe5e709c52fdc0e21ea->leave($__internal_7d147c39f2f1f64f5d0458863194744860cd2e6ad503bfe5e709c52fdc0e21ea_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1c801109fa0cc6a98067c3ac3afcb77f2bc60b75e14da5dbe2461fdb0d76441b = $this->env->getExtension("native_profiler");
        $__internal_1c801109fa0cc6a98067c3ac3afcb77f2bc60b75e14da5dbe2461fdb0d76441b->enter($__internal_1c801109fa0cc6a98067c3ac3afcb77f2bc60b75e14da5dbe2461fdb0d76441b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1c801109fa0cc6a98067c3ac3afcb77f2bc60b75e14da5dbe2461fdb0d76441b->leave($__internal_1c801109fa0cc6a98067c3ac3afcb77f2bc60b75e14da5dbe2461fdb0d76441b_prof);

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
