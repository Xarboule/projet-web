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
        $__internal_24ed79c8c93d45ffc329541d1ae77e6987683752cc259da976ce1d883c235998 = $this->env->getExtension("native_profiler");
        $__internal_24ed79c8c93d45ffc329541d1ae77e6987683752cc259da976ce1d883c235998->enter($__internal_24ed79c8c93d45ffc329541d1ae77e6987683752cc259da976ce1d883c235998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agvoybase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24ed79c8c93d45ffc329541d1ae77e6987683752cc259da976ce1d883c235998->leave($__internal_24ed79c8c93d45ffc329541d1ae77e6987683752cc259da976ce1d883c235998_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_2f9d01433b87c6787d5be42f6e686326ec9ade7412d32b7a0ac557339542cd0f = $this->env->getExtension("native_profiler");
        $__internal_2f9d01433b87c6787d5be42f6e686326ec9ade7412d32b7a0ac557339542cd0f->enter($__internal_2f9d01433b87c6787d5be42f6e686326ec9ade7412d32b7a0ac557339542cd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        // line 25
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 48
        echo "
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
";
        
        $__internal_2f9d01433b87c6787d5be42f6e686326ec9ade7412d32b7a0ac557339542cd0f->leave($__internal_2f9d01433b87c6787d5be42f6e686326ec9ade7412d32b7a0ac557339542cd0f_prof);

    }

    // line 25
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_390eeaa25abc7d4980464d3d4edc1793d960f5505e8bd66374b5cf632f1ec815 = $this->env->getExtension("native_profiler");
        $__internal_390eeaa25abc7d4980464d3d4edc1793d960f5505e8bd66374b5cf632f1ec815->enter($__internal_390eeaa25abc7d4980464d3d4edc1793d960f5505e8bd66374b5cf632f1ec815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 26
        echo "                                    <li>
                                        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("circuit_index");
        echo "\">Voyages</a>
                                    </li>
                                    <li>
                                    ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "                                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                            Logout
                                        </a>
                                    ";
        } else {
            // line 35
            echo "                                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                                        Login
                                        </a>
                                    ";
        }
        // line 39
        echo "
                                    </li>
                                ";
        // line 47
        echo "                                ";
        
        $__internal_390eeaa25abc7d4980464d3d4edc1793d960f5505e8bd66374b5cf632f1ec815->leave($__internal_390eeaa25abc7d4980464d3d4edc1793d960f5505e8bd66374b5cf632f1ec815_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a71d69e7b769795ba4f2a86456c810d8e2a75d19b7a8b9aff486692db4334a35 = $this->env->getExtension("native_profiler");
        $__internal_a71d69e7b769795ba4f2a86456c810d8e2a75d19b7a8b9aff486692db4334a35->enter($__internal_a71d69e7b769795ba4f2a86456c810d8e2a75d19b7a8b9aff486692db4334a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 57
        echo "\t<h4>Tux Voyages</h4>
\t<p>Avec Tux voyages, faites un \"mv ~/tousMesProblemes /dev/null\", et voyagez avec l'esprit tranquille !</p>
    <img src=\"http://www.gifsanimes.fr/images/t/tux/tux-gifs-animes-7900876.gif\" style=\"width: 50%; height: 50%\" >

";
        
        $__internal_a71d69e7b769795ba4f2a86456c810d8e2a75d19b7a8b9aff486692db4334a35->leave($__internal_a71d69e7b769795ba4f2a86456c810d8e2a75d19b7a8b9aff486692db4334a35_prof);

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
        return array (  133 => 57,  127 => 56,  120 => 47,  116 => 39,  108 => 35,  100 => 31,  98 => 30,  92 => 27,  89 => 26,  83 => 25,  70 => 48,  68 => 25,  48 => 8,  42 => 4,  36 => 3,  11 => 1,);
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
/*                                     <li>*/
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                         <a href="{{ path('fos_user_security_logout') }}">*/
/*                                             Logout*/
/*                                         </a>*/
/*                                     {% else %}*/
/*                                         <a href="{{ path('fos_user_security_login') }}">*/
/*                                         Login*/
/*                                         </a>*/
/*                                     {% endif %}*/
/* */
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
/* 	<h4>Tux Voyages</h4>*/
/* 	<p>Avec Tux voyages, faites un "mv ~/tousMesProblemes /dev/null", et voyagez avec l'esprit tranquille !</p>*/
/*     <img src="http://www.gifsanimes.fr/images/t/tux/tux-gifs-animes-7900876.gif" style="width: 50%; height: 50%" >*/
/* */
/* {% endblock %}*/
