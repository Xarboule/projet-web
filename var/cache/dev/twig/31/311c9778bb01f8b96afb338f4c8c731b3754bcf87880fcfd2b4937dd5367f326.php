<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_45d1787edfac03253dfe00d87d87da907a92fcd13267a63b2860ff2d593f749f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f6bb2b5872be2a4615b4df1f4456426a2ddaeac12c8ff83d4ad69921e2db9c9d = $this->env->getExtension("native_profiler");
        $__internal_f6bb2b5872be2a4615b4df1f4456426a2ddaeac12c8ff83d4ad69921e2db9c9d->enter($__internal_f6bb2b5872be2a4615b4df1f4456426a2ddaeac12c8ff83d4ad69921e2db9c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6bb2b5872be2a4615b4df1f4456426a2ddaeac12c8ff83d4ad69921e2db9c9d->leave($__internal_f6bb2b5872be2a4615b4df1f4456426a2ddaeac12c8ff83d4ad69921e2db9c9d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ce908410a0db464e7a3bce6ed8690a9fba46eefb110de5b7a799d3482421d07 = $this->env->getExtension("native_profiler");
        $__internal_6ce908410a0db464e7a3bce6ed8690a9fba46eefb110de5b7a799d3482421d07->enter($__internal_6ce908410a0db464e7a3bce6ed8690a9fba46eefb110de5b7a799d3482421d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6ce908410a0db464e7a3bce6ed8690a9fba46eefb110de5b7a799d3482421d07->leave($__internal_6ce908410a0db464e7a3bce6ed8690a9fba46eefb110de5b7a799d3482421d07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
