<?php

/* ::agvoybase.html.twig */
class __TwigTemplate_6faf108a4535e66ea4b080d5d5e6a0cdeee791b1e19c304ebf627b732ad01178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::agvoybase.html.twig", 1);
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
        $__internal_0f6e40b1a305a2bb1af4b0bd70d725c68e5303ee5f614e253e74c6867f83ad61 = $this->env->getExtension("native_profiler");
        $__internal_0f6e40b1a305a2bb1af4b0bd70d725c68e5303ee5f614e253e74c6867f83ad61->enter($__internal_0f6e40b1a305a2bb1af4b0bd70d725c68e5303ee5f614e253e74c6867f83ad61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::agvoybase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f6e40b1a305a2bb1af4b0bd70d725c68e5303ee5f614e253e74c6867f83ad61->leave($__internal_0f6e40b1a305a2bb1af4b0bd70d725c68e5303ee5f614e253e74c6867f83ad61_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_13e16b3c97611b927493e27836073147451f0ca9f8b634aa7f8b27b7d3c25349 = $this->env->getExtension("native_profiler");
        $__internal_13e16b3c97611b927493e27836073147451f0ca9f8b634aa7f8b27b7d3c25349->enter($__internal_13e16b3c97611b927493e27836073147451f0ca9f8b634aa7f8b27b7d3c25349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_13e16b3c97611b927493e27836073147451f0ca9f8b634aa7f8b27b7d3c25349->leave($__internal_13e16b3c97611b927493e27836073147451f0ca9f8b634aa7f8b27b7d3c25349_prof);

    }

    // line 25
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_7561bc4d5cdd71bb5838a2fe8ab2bf651517cd09d2b3368d31b158ac343044a1 = $this->env->getExtension("native_profiler");
        $__internal_7561bc4d5cdd71bb5838a2fe8ab2bf651517cd09d2b3368d31b158ac343044a1->enter($__internal_7561bc4d5cdd71bb5838a2fe8ab2bf651517cd09d2b3368d31b158ac343044a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

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
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
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
        
        $__internal_7561bc4d5cdd71bb5838a2fe8ab2bf651517cd09d2b3368d31b158ac343044a1->leave($__internal_7561bc4d5cdd71bb5838a2fe8ab2bf651517cd09d2b3368d31b158ac343044a1_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c32de6d2d2dab828e712169b4c4a2584bde2c4756483d27b22bfc3fd588ca7b8 = $this->env->getExtension("native_profiler");
        $__internal_c32de6d2d2dab828e712169b4c4a2584bde2c4756483d27b22bfc3fd588ca7b8->enter($__internal_c32de6d2d2dab828e712169b4c4a2584bde2c4756483d27b22bfc3fd588ca7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 57
        echo "\t<h4>Tux Voyages</h4>
\t<p>Avec Tux voyages, faites un \"mv ~/tousMesProblemes /dev/null\", et voyagez avec l'esprit libre !</p>
    <img src=\"http://www.gifsanimes.fr/images/t/tux/tux-gifs-animes-7900876.gif\" style=\"width: 50%; height: 50%; vertical-align: middle;\" >

";
        
        $__internal_c32de6d2d2dab828e712169b4c4a2584bde2c4756483d27b22bfc3fd588ca7b8->leave($__internal_c32de6d2d2dab828e712169b4c4a2584bde2c4756483d27b22bfc3fd588ca7b8_prof);

    }

    public function getTemplateName()
    {
        return "::agvoybase.html.twig";
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
/*                                     {% if is_granted('ROLE_USER') %}*/
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
/* 	<p>Avec Tux voyages, faites un "mv ~/tousMesProblemes /dev/null", et voyagez avec l'esprit libre !</p>*/
/*     <img src="http://www.gifsanimes.fr/images/t/tux/tux-gifs-animes-7900876.gif" style="width: 50%; height: 50%; vertical-align: middle;" >*/
/* */
/* {% endblock %}*/
