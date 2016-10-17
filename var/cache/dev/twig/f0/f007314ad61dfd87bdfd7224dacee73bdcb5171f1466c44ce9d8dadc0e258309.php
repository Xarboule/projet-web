<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b4bcfe692fb453a0948be46bac0cc5ca3ad78e0a159931644e9ace1dc7af17b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e405ebe354fc19de45f8f07953e34dc2e68f508aa9d631ac656607c07dfe846e = $this->env->getExtension("native_profiler");
        $__internal_e405ebe354fc19de45f8f07953e34dc2e68f508aa9d631ac656607c07dfe846e->enter($__internal_e405ebe354fc19de45f8f07953e34dc2e68f508aa9d631ac656607c07dfe846e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e405ebe354fc19de45f8f07953e34dc2e68f508aa9d631ac656607c07dfe846e->leave($__internal_e405ebe354fc19de45f8f07953e34dc2e68f508aa9d631ac656607c07dfe846e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3d8d6354b20e376c818fa4912a81649a554c77f428ae952bc2dd05e2fc308d3 = $this->env->getExtension("native_profiler");
        $__internal_c3d8d6354b20e376c818fa4912a81649a554c77f428ae952bc2dd05e2fc308d3->enter($__internal_c3d8d6354b20e376c818fa4912a81649a554c77f428ae952bc2dd05e2fc308d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c3d8d6354b20e376c818fa4912a81649a554c77f428ae952bc2dd05e2fc308d3->leave($__internal_c3d8d6354b20e376c818fa4912a81649a554c77f428ae952bc2dd05e2fc308d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
