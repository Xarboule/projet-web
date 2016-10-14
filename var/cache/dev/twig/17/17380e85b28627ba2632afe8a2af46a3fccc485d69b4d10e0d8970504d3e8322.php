<?php

/* agvoybase.html.twig */
class __TwigTemplate_6faf108a4535e66ea4b080d5d5e6a0cdeee791b1e19c304ebf627b732ad01178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agvoybase.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4be5d67b114e85057a3896325c6060ed31e753009a94f9c75738dc6f26f250e7 = $this->env->getExtension("native_profiler");
        $__internal_4be5d67b114e85057a3896325c6060ed31e753009a94f9c75738dc6f26f250e7->enter($__internal_4be5d67b114e85057a3896325c6060ed31e753009a94f9c75738dc6f26f250e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agvoybase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be5d67b114e85057a3896325c6060ed31e753009a94f9c75738dc6f26f250e7->leave($__internal_4be5d67b114e85057a3896325c6060ed31e753009a94f9c75738dc6f26f250e7_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c358cee86807b9f6f0f2f5f19d893316a01db15868aef555cf31a620fdc0eda3 = $this->env->getExtension("native_profiler");
        $__internal_c358cee86807b9f6f0f2f5f19d893316a01db15868aef555cf31a620fdc0eda3->enter($__internal_c358cee86807b9f6f0f2f5f19d893316a01db15868aef555cf31a620fdc0eda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                Accueil
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">

                                ";
        // line 24
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 35
        echo "
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
";
        
        $__internal_c358cee86807b9f6f0f2f5f19d893316a01db15868aef555cf31a620fdc0eda3->leave($__internal_c358cee86807b9f6f0f2f5f19d893316a01db15868aef555cf31a620fdc0eda3_prof);

    }

    // line 24
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_b5e2ef2685272756bc5f2cc86474642d64d9e1ffab0c486c3dcd75ed23e6fce5 = $this->env->getExtension("native_profiler");
        $__internal_b5e2ef2685272756bc5f2cc86474642d64d9e1ffab0c486c3dcd75ed23e6fce5->enter($__internal_b5e2ef2685272756bc5f2cc86474642d64d9e1ffab0c486c3dcd75ed23e6fce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 25
        echo "                                    <li>
                                        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("circuit_index");
        echo "\">Voyages</a>
                                    </li>
                                ";
        // line 34
        echo "                                ";
        
        $__internal_b5e2ef2685272756bc5f2cc86474642d64d9e1ffab0c486c3dcd75ed23e6fce5->leave($__internal_b5e2ef2685272756bc5f2cc86474642d64d9e1ffab0c486c3dcd75ed23e6fce5_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_58be96cf8a32b811cefbe277a4b7edd53e0ad2dfd5d792c56b6e0b36c3f75d33 = $this->env->getExtension("native_profiler");
        $__internal_58be96cf8a32b811cefbe277a4b7edd53e0ad2dfd5d792c56b6e0b36c3f75d33->enter($__internal_58be96cf8a32b811cefbe277a4b7edd53e0ad2dfd5d792c56b6e0b36c3f75d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 44
        echo "\t<h4>About</h4>
\t<p>Bienvenue sur notre agence virtuelle.</p>
";
        
        $__internal_58be96cf8a32b811cefbe277a4b7edd53e0ad2dfd5d792c56b6e0b36c3f75d33->leave($__internal_58be96cf8a32b811cefbe277a4b7edd53e0ad2dfd5d792c56b6e0b36c3f75d33_prof);

    }

    public function getTemplateName()
    {
        return "agvoybase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  103 => 43,  96 => 34,  91 => 26,  88 => 25,  82 => 24,  69 => 35,  67 => 24,  48 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <a class="navbar-brand" href="{{ path('homepage') }}">*/
/*                                 Accueil*/
/*                             </a>*/
/* */
/*                             <button type="button" class="navbar-toggle"*/
/*                                     data-toggle="collapse"*/
/*                                     data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav">*/
/* */
/*                                 {% block header_navigation_links %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('circuit_index') }}">Voyages</a>*/
/*                                     </li>*/
/*                                 {# {% if is_granted('ROLE_ADMIN') %}*/
/*                                     <li>*/
/*            								<a href="{{ path('admin_post_new') }}">Nouveau post</a>                         */
/* 									</li>*/
/*                                     {% endif %}*/
/*                                     #}*/
/*                                 {% endblock %}*/
/* */
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/* {% endblock %}*/
/*         */
/* {% block sidebar %}*/
/* 	<h4>About</h4>*/
/* 	<p>Bienvenue sur notre agence virtuelle.</p>*/
/* {% endblock %}*/
