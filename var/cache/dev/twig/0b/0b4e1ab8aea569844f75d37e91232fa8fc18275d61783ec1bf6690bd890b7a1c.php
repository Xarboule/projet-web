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
        $__internal_91c1ba5f73ebdc23aa3120023d5dd0d970b5413583facfe873ca2bd9e7b1dffd = $this->env->getExtension("native_profiler");
        $__internal_91c1ba5f73ebdc23aa3120023d5dd0d970b5413583facfe873ca2bd9e7b1dffd->enter($__internal_91c1ba5f73ebdc23aa3120023d5dd0d970b5413583facfe873ca2bd9e7b1dffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c1ba5f73ebdc23aa3120023d5dd0d970b5413583facfe873ca2bd9e7b1dffd->leave($__internal_91c1ba5f73ebdc23aa3120023d5dd0d970b5413583facfe873ca2bd9e7b1dffd_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d5f18f55894ba3e747d1a2ebe4a4d6a34aa6325954be90aea6c468fbf1f847cc = $this->env->getExtension("native_profiler");
        $__internal_d5f18f55894ba3e747d1a2ebe4a4d6a34aa6325954be90aea6c468fbf1f847cc->enter($__internal_d5f18f55894ba3e747d1a2ebe4a4d6a34aa6325954be90aea6c468fbf1f847cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "

    <h1>Bienvenue sur INT Holidays !</h1>
    
    <img src=\"http://4everstatic.com/pictures/674xX/cartoons/digital-art/tux,-cartoon-penguin,-linux,-beach-124355.jpg\" style=\"width: 50%; height: 50%\" >
";
        
        $__internal_d5f18f55894ba3e747d1a2ebe4a4d6a34aa6325954be90aea6c468fbf1f847cc->leave($__internal_d5f18f55894ba3e747d1a2ebe4a4d6a34aa6325954be90aea6c468fbf1f847cc_prof);

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
/*     <h1>Bienvenue sur INT Holidays !</h1>*/
/*     */
/*     <img src="http://4everstatic.com/pictures/674xX/cartoons/digital-art/tux,-cartoon-penguin,-linux,-beach-124355.jpg" style="width: 50%; height: 50%" >*/
/* {% endblock %} {# main #}*/
