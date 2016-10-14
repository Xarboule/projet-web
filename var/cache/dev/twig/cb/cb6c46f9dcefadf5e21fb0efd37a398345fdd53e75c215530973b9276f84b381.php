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
        $__internal_280f5b5e2788c9fef71690088b50ca515f42405beb5e82cb808c8d7222c7ef38 = $this->env->getExtension("native_profiler");
        $__internal_280f5b5e2788c9fef71690088b50ca515f42405beb5e82cb808c8d7222c7ef38->enter($__internal_280f5b5e2788c9fef71690088b50ca515f42405beb5e82cb808c8d7222c7ef38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_280f5b5e2788c9fef71690088b50ca515f42405beb5e82cb808c8d7222c7ef38->leave($__internal_280f5b5e2788c9fef71690088b50ca515f42405beb5e82cb808c8d7222c7ef38_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dff27bb7c4d8e04eacc985e7ab107211879a2200f29067ab4172c01beba21443 = $this->env->getExtension("native_profiler");
        $__internal_dff27bb7c4d8e04eacc985e7ab107211879a2200f29067ab4172c01beba21443->enter($__internal_dff27bb7c4d8e04eacc985e7ab107211879a2200f29067ab4172c01beba21443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_dff27bb7c4d8e04eacc985e7ab107211879a2200f29067ab4172c01beba21443->leave($__internal_dff27bb7c4d8e04eacc985e7ab107211879a2200f29067ab4172c01beba21443_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9ece37a2acb80466e6afb4ccb0ee7b3d7e32d81244082ae365b1b6d22b6137c3 = $this->env->getExtension("native_profiler");
        $__internal_9ece37a2acb80466e6afb4ccb0ee7b3d7e32d81244082ae365b1b6d22b6137c3->enter($__internal_9ece37a2acb80466e6afb4ccb0ee7b3d7e32d81244082ae365b1b6d22b6137c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9ece37a2acb80466e6afb4ccb0ee7b3d7e32d81244082ae365b1b6d22b6137c3->leave($__internal_9ece37a2acb80466e6afb4ccb0ee7b3d7e32d81244082ae365b1b6d22b6137c3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2eb4080ae4fa413202a810c05e9b27c66bc65aa5e874f5e059906ddcde7c9e57 = $this->env->getExtension("native_profiler");
        $__internal_2eb4080ae4fa413202a810c05e9b27c66bc65aa5e874f5e059906ddcde7c9e57->enter($__internal_2eb4080ae4fa413202a810c05e9b27c66bc65aa5e874f5e059906ddcde7c9e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2eb4080ae4fa413202a810c05e9b27c66bc65aa5e874f5e059906ddcde7c9e57->leave($__internal_2eb4080ae4fa413202a810c05e9b27c66bc65aa5e874f5e059906ddcde7c9e57_prof);

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
