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
        $__internal_b7e7f1abb6d60bec0894a6938f95da7d63fb704186f3dec16cd43ebe968f1554 = $this->env->getExtension("native_profiler");
        $__internal_b7e7f1abb6d60bec0894a6938f95da7d63fb704186f3dec16cd43ebe968f1554->enter($__internal_b7e7f1abb6d60bec0894a6938f95da7d63fb704186f3dec16cd43ebe968f1554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b7e7f1abb6d60bec0894a6938f95da7d63fb704186f3dec16cd43ebe968f1554->leave($__internal_b7e7f1abb6d60bec0894a6938f95da7d63fb704186f3dec16cd43ebe968f1554_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_55e2ff80f19acbeddfe6538abd44fed045bd73cfb26d06cfb78bdb30e600f92b = $this->env->getExtension("native_profiler");
        $__internal_55e2ff80f19acbeddfe6538abd44fed045bd73cfb26d06cfb78bdb30e600f92b->enter($__internal_55e2ff80f19acbeddfe6538abd44fed045bd73cfb26d06cfb78bdb30e600f92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_55e2ff80f19acbeddfe6538abd44fed045bd73cfb26d06cfb78bdb30e600f92b->leave($__internal_55e2ff80f19acbeddfe6538abd44fed045bd73cfb26d06cfb78bdb30e600f92b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0d78dd424099b929fa1939d6add8d8e32a6451fe901b7a8f3df811b618a8f812 = $this->env->getExtension("native_profiler");
        $__internal_0d78dd424099b929fa1939d6add8d8e32a6451fe901b7a8f3df811b618a8f812->enter($__internal_0d78dd424099b929fa1939d6add8d8e32a6451fe901b7a8f3df811b618a8f812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0d78dd424099b929fa1939d6add8d8e32a6451fe901b7a8f3df811b618a8f812->leave($__internal_0d78dd424099b929fa1939d6add8d8e32a6451fe901b7a8f3df811b618a8f812_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6c208c331f22b8bc56c20ca7fd0a480ea8ae759f7f2042b0507ec00c4695b8e7 = $this->env->getExtension("native_profiler");
        $__internal_6c208c331f22b8bc56c20ca7fd0a480ea8ae759f7f2042b0507ec00c4695b8e7->enter($__internal_6c208c331f22b8bc56c20ca7fd0a480ea8ae759f7f2042b0507ec00c4695b8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6c208c331f22b8bc56c20ca7fd0a480ea8ae759f7f2042b0507ec00c4695b8e7->leave($__internal_6c208c331f22b8bc56c20ca7fd0a480ea8ae759f7f2042b0507ec00c4695b8e7_prof);

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
