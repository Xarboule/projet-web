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
        $__internal_78efc712ea45b1ff265c99d1bdd7b377b72c9339640825dc4a094f4ef9ac52a4 = $this->env->getExtension("native_profiler");
        $__internal_78efc712ea45b1ff265c99d1bdd7b377b72c9339640825dc4a094f4ef9ac52a4->enter($__internal_78efc712ea45b1ff265c99d1bdd7b377b72c9339640825dc4a094f4ef9ac52a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78efc712ea45b1ff265c99d1bdd7b377b72c9339640825dc4a094f4ef9ac52a4->leave($__internal_78efc712ea45b1ff265c99d1bdd7b377b72c9339640825dc4a094f4ef9ac52a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2d24351d363b6dad1bc5c401ac254f704a97e221386bb11543494d700ebce68 = $this->env->getExtension("native_profiler");
        $__internal_c2d24351d363b6dad1bc5c401ac254f704a97e221386bb11543494d700ebce68->enter($__internal_c2d24351d363b6dad1bc5c401ac254f704a97e221386bb11543494d700ebce68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c2d24351d363b6dad1bc5c401ac254f704a97e221386bb11543494d700ebce68->leave($__internal_c2d24351d363b6dad1bc5c401ac254f704a97e221386bb11543494d700ebce68_prof);

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
