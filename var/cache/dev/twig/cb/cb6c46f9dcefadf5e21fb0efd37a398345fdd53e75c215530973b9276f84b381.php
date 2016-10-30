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
        $__internal_33bc33daa26145d6a51a22c1e38bd2fd4a812d74e269b3020b6d53763133d219 = $this->env->getExtension("native_profiler");
        $__internal_33bc33daa26145d6a51a22c1e38bd2fd4a812d74e269b3020b6d53763133d219->enter($__internal_33bc33daa26145d6a51a22c1e38bd2fd4a812d74e269b3020b6d53763133d219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_33bc33daa26145d6a51a22c1e38bd2fd4a812d74e269b3020b6d53763133d219->leave($__internal_33bc33daa26145d6a51a22c1e38bd2fd4a812d74e269b3020b6d53763133d219_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8df2dbf36491c9be8e86d31372403b7831104215babe6abf04849c37e2ae95b8 = $this->env->getExtension("native_profiler");
        $__internal_8df2dbf36491c9be8e86d31372403b7831104215babe6abf04849c37e2ae95b8->enter($__internal_8df2dbf36491c9be8e86d31372403b7831104215babe6abf04849c37e2ae95b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8df2dbf36491c9be8e86d31372403b7831104215babe6abf04849c37e2ae95b8->leave($__internal_8df2dbf36491c9be8e86d31372403b7831104215babe6abf04849c37e2ae95b8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e086a00dd438f4df518430c5ead7f3f9d8612868584fef22653141aee7b5267c = $this->env->getExtension("native_profiler");
        $__internal_e086a00dd438f4df518430c5ead7f3f9d8612868584fef22653141aee7b5267c->enter($__internal_e086a00dd438f4df518430c5ead7f3f9d8612868584fef22653141aee7b5267c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e086a00dd438f4df518430c5ead7f3f9d8612868584fef22653141aee7b5267c->leave($__internal_e086a00dd438f4df518430c5ead7f3f9d8612868584fef22653141aee7b5267c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5d1e72377c36f07aeb59a01636eea5b3bbbb381e9f7b3b623f1f545a53cf0b37 = $this->env->getExtension("native_profiler");
        $__internal_5d1e72377c36f07aeb59a01636eea5b3bbbb381e9f7b3b623f1f545a53cf0b37->enter($__internal_5d1e72377c36f07aeb59a01636eea5b3bbbb381e9f7b3b623f1f545a53cf0b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5d1e72377c36f07aeb59a01636eea5b3bbbb381e9f7b3b623f1f545a53cf0b37->leave($__internal_5d1e72377c36f07aeb59a01636eea5b3bbbb381e9f7b3b623f1f545a53cf0b37_prof);

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
