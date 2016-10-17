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
        $__internal_193d992eca72bcc2b4cf1a9658d19cb63114af31eae820fba1262fe8fa2c6738 = $this->env->getExtension("native_profiler");
        $__internal_193d992eca72bcc2b4cf1a9658d19cb63114af31eae820fba1262fe8fa2c6738->enter($__internal_193d992eca72bcc2b4cf1a9658d19cb63114af31eae820fba1262fe8fa2c6738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agvoybase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_193d992eca72bcc2b4cf1a9658d19cb63114af31eae820fba1262fe8fa2c6738->leave($__internal_193d992eca72bcc2b4cf1a9658d19cb63114af31eae820fba1262fe8fa2c6738_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_197c1797f2613ec7ce62c332f54719d0e16db0f09a3cf64f7b8033970ff68304 = $this->env->getExtension("native_profiler");
        $__internal_197c1797f2613ec7ce62c332f54719d0e16db0f09a3cf64f7b8033970ff68304->enter($__internal_197c1797f2613ec7ce62c332f54719d0e16db0f09a3cf64f7b8033970ff68304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_197c1797f2613ec7ce62c332f54719d0e16db0f09a3cf64f7b8033970ff68304->leave($__internal_197c1797f2613ec7ce62c332f54719d0e16db0f09a3cf64f7b8033970ff68304_prof);

    }

    // line 25
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_768cf71528cb2be0a1da091e1da3872985672558a9c787be194f0425ec4b8cb4 = $this->env->getExtension("native_profiler");
        $__internal_768cf71528cb2be0a1da091e1da3872985672558a9c787be194f0425ec4b8cb4->enter($__internal_768cf71528cb2be0a1da091e1da3872985672558a9c787be194f0425ec4b8cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

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
        
        $__internal_768cf71528cb2be0a1da091e1da3872985672558a9c787be194f0425ec4b8cb4->leave($__internal_768cf71528cb2be0a1da091e1da3872985672558a9c787be194f0425ec4b8cb4_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_208dd64653aa1082b05f5a8671fd325142ceb097e04c058afcf0be61debf50eb = $this->env->getExtension("native_profiler");
        $__internal_208dd64653aa1082b05f5a8671fd325142ceb097e04c058afcf0be61debf50eb->enter($__internal_208dd64653aa1082b05f5a8671fd325142ceb097e04c058afcf0be61debf50eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 57
        echo "\t<h4>Tux Voyages</h4>
\t<p>Avec Tux voyages, faites un \"mv ~/tousMesProblemes /dev/null\", et voyagez avec l'esprit tranquille !</p>
    <img src=\"http://www.gifsanimes.fr/images/t/tux/tux-gifs-animes-7900876.gif\" style=\"width: 50%; height: 50%\" >

";
        
        $__internal_208dd64653aa1082b05f5a8671fd325142ceb097e04c058afcf0be61debf50eb->leave($__internal_208dd64653aa1082b05f5a8671fd325142ceb097e04c058afcf0be61debf50eb_prof);

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
