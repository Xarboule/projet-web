<?php

/* homepage/homepage.html.twig */
class __TwigTemplate_81e72a0b81c8a67e4eca3ef8a51aaafdeb661f2010c3c569ddf2dc7399e6c70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "homepage/homepage.html.twig", 1);
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
        $__internal_fe12307a04dd4ab08df9dd4c3e0e061279205c80ca4a84cb3b6234007038a623 = $this->env->getExtension("native_profiler");
        $__internal_fe12307a04dd4ab08df9dd4c3e0e061279205c80ca4a84cb3b6234007038a623->enter($__internal_fe12307a04dd4ab08df9dd4c3e0e061279205c80ca4a84cb3b6234007038a623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe12307a04dd4ab08df9dd4c3e0e061279205c80ca4a84cb3b6234007038a623->leave($__internal_fe12307a04dd4ab08df9dd4c3e0e061279205c80ca4a84cb3b6234007038a623_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2f83efb94be45618349162221a0051cc4c24e0f2f5d751a0da407545c99cf42c = $this->env->getExtension("native_profiler");
        $__internal_2f83efb94be45618349162221a0051cc4c24e0f2f5d751a0da407545c99cf42c->enter($__internal_2f83efb94be45618349162221a0051cc4c24e0f2f5d751a0da407545c99cf42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "

    <h1>Bienvenue sur Tux Voyages !</h1>
    
    <img src=\"http://4everstatic.com/pictures/674xX/cartoons/digital-art/tux,-cartoon-penguin,-linux,-beach-124355.jpg\" style=\"width: 50%; height: 50%\" >
";
        
        $__internal_2f83efb94be45618349162221a0051cc4c24e0f2f5d751a0da407545c99cf42c->leave($__internal_2f83efb94be45618349162221a0051cc4c24e0f2f5d751a0da407545c99cf42c_prof);

    }

    public function getTemplateName()
    {
        return "homepage/homepage.html.twig";
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
/*     <h1>Bienvenue sur Tux Voyages !</h1>*/
/*     */
/*     <img src="http://4everstatic.com/pictures/674xX/cartoons/digital-art/tux,-cartoon-penguin,-linux,-beach-124355.jpg" style="width: 50%; height: 50%" >*/
/* {% endblock %} {# main #}*/
