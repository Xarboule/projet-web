<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_ff591da81b9b4405e27c9223c397b3237641bf218779ef4e9b65de347ff9c3f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1201547ed5f6c690610f682c39d36fc548b7dfd38b6f88dd90f06d889ed0e8d8 = $this->env->getExtension("native_profiler");
        $__internal_1201547ed5f6c690610f682c39d36fc548b7dfd38b6f88dd90f06d889ed0e8d8->enter($__internal_1201547ed5f6c690610f682c39d36fc548b7dfd38b6f88dd90f06d889ed0e8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_1201547ed5f6c690610f682c39d36fc548b7dfd38b6f88dd90f06d889ed0e8d8->leave($__internal_1201547ed5f6c690610f682c39d36fc548b7dfd38b6f88dd90f06d889ed0e8d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
