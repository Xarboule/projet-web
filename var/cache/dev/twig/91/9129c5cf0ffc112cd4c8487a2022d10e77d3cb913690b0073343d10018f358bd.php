<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_02c481117f1dfae28e0d8f6674ea8f3ba544a07ee046511f925d8da62aae9f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_62c4d8c0d0df70ae116589051933a0a1cf8d685632a12a28c9fac1c28d0e36dd = $this->env->getExtension("native_profiler");
        $__internal_62c4d8c0d0df70ae116589051933a0a1cf8d685632a12a28c9fac1c28d0e36dd->enter($__internal_62c4d8c0d0df70ae116589051933a0a1cf8d685632a12a28c9fac1c28d0e36dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c4d8c0d0df70ae116589051933a0a1cf8d685632a12a28c9fac1c28d0e36dd->leave($__internal_62c4d8c0d0df70ae116589051933a0a1cf8d685632a12a28c9fac1c28d0e36dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_080fef03163f84868bfa087fbc55924f1109b04f9307f8ea1ebdaf7fa3e68b4d = $this->env->getExtension("native_profiler");
        $__internal_080fef03163f84868bfa087fbc55924f1109b04f9307f8ea1ebdaf7fa3e68b4d->enter($__internal_080fef03163f84868bfa087fbc55924f1109b04f9307f8ea1ebdaf7fa3e68b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_080fef03163f84868bfa087fbc55924f1109b04f9307f8ea1ebdaf7fa3e68b4d->leave($__internal_080fef03163f84868bfa087fbc55924f1109b04f9307f8ea1ebdaf7fa3e68b4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
