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
        $__internal_0caa9b0c71e6776cc5eae4763e4e59570e15135da481f281366d623bdf5ac56b = $this->env->getExtension("native_profiler");
        $__internal_0caa9b0c71e6776cc5eae4763e4e59570e15135da481f281366d623bdf5ac56b->enter($__internal_0caa9b0c71e6776cc5eae4763e4e59570e15135da481f281366d623bdf5ac56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0caa9b0c71e6776cc5eae4763e4e59570e15135da481f281366d623bdf5ac56b->leave($__internal_0caa9b0c71e6776cc5eae4763e4e59570e15135da481f281366d623bdf5ac56b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_e8f0fae2e50822fff948615ef832c0105601128628aa68e960990bcc8a278fd4 = $this->env->getExtension("native_profiler");
        $__internal_e8f0fae2e50822fff948615ef832c0105601128628aa68e960990bcc8a278fd4->enter($__internal_e8f0fae2e50822fff948615ef832c0105601128628aa68e960990bcc8a278fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "

    <h1>Bienvenue sur Tux Voyages !</h1>
    
    <img src=\"http://4everstatic.com/pictures/674xX/cartoons/digital-art/tux,-cartoon-penguin,-linux,-beach-124355.jpg\" style=\"width: 50%; height: 50%\" >
";
        
        $__internal_e8f0fae2e50822fff948615ef832c0105601128628aa68e960990bcc8a278fd4->leave($__internal_e8f0fae2e50822fff948615ef832c0105601128628aa68e960990bcc8a278fd4_prof);

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
