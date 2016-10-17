<?php

/* :homepage:homepage.html.twig */
class __TwigTemplate_81e72a0b81c8a67e4eca3ef8a51aaafdeb661f2010c3c569ddf2dc7399e6c70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":homepage:homepage.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c5d249401bddd4a11b0460c6abdda4a4662d6989eaa9bd841d5e9a3c6e34cc0 = $this->env->getExtension("native_profiler");
        $__internal_2c5d249401bddd4a11b0460c6abdda4a4662d6989eaa9bd841d5e9a3c6e34cc0->enter($__internal_2c5d249401bddd4a11b0460c6abdda4a4662d6989eaa9bd841d5e9a3c6e34cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":homepage:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c5d249401bddd4a11b0460c6abdda4a4662d6989eaa9bd841d5e9a3c6e34cc0->leave($__internal_2c5d249401bddd4a11b0460c6abdda4a4662d6989eaa9bd841d5e9a3c6e34cc0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d52ecefe1ca2e694432abed6f34c6458dce51f4035dac8aae712fb4944fd8c97 = $this->env->getExtension("native_profiler");
        $__internal_d52ecefe1ca2e694432abed6f34c6458dce51f4035dac8aae712fb4944fd8c97->enter($__internal_d52ecefe1ca2e694432abed6f34c6458dce51f4035dac8aae712fb4944fd8c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "

    <h1>Bienvenue sur INT Holidays !</h1>
    
    <img src=\"http://66.media.tumblr.com/tumblr_l7ceutBSpU1qb4gnro1_1280.jpg\" style=\"width: 50%; height: 50%\" >
";
        
        $__internal_d52ecefe1ca2e694432abed6f34c6458dce51f4035dac8aae712fb4944fd8c97->leave($__internal_d52ecefe1ca2e694432abed6f34c6458dce51f4035dac8aae712fb4944fd8c97_prof);

    }

    public function getTemplateName()
    {
        return ":homepage:homepage.html.twig";
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
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* */
/*     <h1>Bienvenue sur INT Holidays !</h1>*/
/*     */
/*     <img src="http://66.media.tumblr.com/tumblr_l7ceutBSpU1qb4gnro1_1280.jpg" style="width: 50%; height: 50%" >*/
/* {% endblock %} {# main #}*/
