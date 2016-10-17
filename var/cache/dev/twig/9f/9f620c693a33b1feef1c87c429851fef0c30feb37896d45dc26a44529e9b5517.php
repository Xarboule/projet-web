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
        $__internal_9d7240e790b303d955a24cdee90711876b1e9824ab113136e86bcb752e09b34a = $this->env->getExtension("native_profiler");
        $__internal_9d7240e790b303d955a24cdee90711876b1e9824ab113136e86bcb752e09b34a->enter($__internal_9d7240e790b303d955a24cdee90711876b1e9824ab113136e86bcb752e09b34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9d7240e790b303d955a24cdee90711876b1e9824ab113136e86bcb752e09b34a->leave($__internal_9d7240e790b303d955a24cdee90711876b1e9824ab113136e86bcb752e09b34a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1d5d21357cc5f6551dbd0534f3786eae0394e3daca15c1672af898d6f335a198 = $this->env->getExtension("native_profiler");
        $__internal_1d5d21357cc5f6551dbd0534f3786eae0394e3daca15c1672af898d6f335a198->enter($__internal_1d5d21357cc5f6551dbd0534f3786eae0394e3daca15c1672af898d6f335a198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1d5d21357cc5f6551dbd0534f3786eae0394e3daca15c1672af898d6f335a198->leave($__internal_1d5d21357cc5f6551dbd0534f3786eae0394e3daca15c1672af898d6f335a198_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f2ada87036a870068d9fab5b3d8c88825498b608d1ade38b0a415b191d9fd94e = $this->env->getExtension("native_profiler");
        $__internal_f2ada87036a870068d9fab5b3d8c88825498b608d1ade38b0a415b191d9fd94e->enter($__internal_f2ada87036a870068d9fab5b3d8c88825498b608d1ade38b0a415b191d9fd94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f2ada87036a870068d9fab5b3d8c88825498b608d1ade38b0a415b191d9fd94e->leave($__internal_f2ada87036a870068d9fab5b3d8c88825498b608d1ade38b0a415b191d9fd94e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8dedb7a52a7e467497c658aa78ba6926859593adff67e2a431f78349b63d4691 = $this->env->getExtension("native_profiler");
        $__internal_8dedb7a52a7e467497c658aa78ba6926859593adff67e2a431f78349b63d4691->enter($__internal_8dedb7a52a7e467497c658aa78ba6926859593adff67e2a431f78349b63d4691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8dedb7a52a7e467497c658aa78ba6926859593adff67e2a431f78349b63d4691->leave($__internal_8dedb7a52a7e467497c658aa78ba6926859593adff67e2a431f78349b63d4691_prof);

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
