<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9df24fc1c59730ee87b3a3f113651fd184100c9b25e042c7e9b68d4afd84e5d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2fb3ee9e9a586ec6b52e3b5e3c2273bcedeec441bc2d4789785c6702e4487f97 = $this->env->getExtension("native_profiler");
        $__internal_2fb3ee9e9a586ec6b52e3b5e3c2273bcedeec441bc2d4789785c6702e4487f97->enter($__internal_2fb3ee9e9a586ec6b52e3b5e3c2273bcedeec441bc2d4789785c6702e4487f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fb3ee9e9a586ec6b52e3b5e3c2273bcedeec441bc2d4789785c6702e4487f97->leave($__internal_2fb3ee9e9a586ec6b52e3b5e3c2273bcedeec441bc2d4789785c6702e4487f97_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfa9f93e7b96ba2e79d86f1abcd78412f4bcf59d9bd14fd4e68aa877c100e73e = $this->env->getExtension("native_profiler");
        $__internal_bfa9f93e7b96ba2e79d86f1abcd78412f4bcf59d9bd14fd4e68aa877c100e73e->enter($__internal_bfa9f93e7b96ba2e79d86f1abcd78412f4bcf59d9bd14fd4e68aa877c100e73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bfa9f93e7b96ba2e79d86f1abcd78412f4bcf59d9bd14fd4e68aa877c100e73e->leave($__internal_bfa9f93e7b96ba2e79d86f1abcd78412f4bcf59d9bd14fd4e68aa877c100e73e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
