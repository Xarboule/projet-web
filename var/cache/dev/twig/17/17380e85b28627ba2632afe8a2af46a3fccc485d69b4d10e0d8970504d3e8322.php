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
        $__internal_90c4d640111b92063dd3063a32b9453fbbacf564ebdf3324d0bac2a5ed0de00c = $this->env->getExtension("native_profiler");
        $__internal_90c4d640111b92063dd3063a32b9453fbbacf564ebdf3324d0bac2a5ed0de00c->enter($__internal_90c4d640111b92063dd3063a32b9453fbbacf564ebdf3324d0bac2a5ed0de00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agvoybase.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90c4d640111b92063dd3063a32b9453fbbacf564ebdf3324d0bac2a5ed0de00c->leave($__internal_90c4d640111b92063dd3063a32b9453fbbacf564ebdf3324d0bac2a5ed0de00c_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_73ef678a96fbf22ad04f09d8724fde2bdd57e492a1b7b62696db4858b5f2d90e = $this->env->getExtension("native_profiler");
        $__internal_73ef678a96fbf22ad04f09d8724fde2bdd57e492a1b7b62696db4858b5f2d90e->enter($__internal_73ef678a96fbf22ad04f09d8724fde2bdd57e492a1b7b62696db4858b5f2d90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_73ef678a96fbf22ad04f09d8724fde2bdd57e492a1b7b62696db4858b5f2d90e->leave($__internal_73ef678a96fbf22ad04f09d8724fde2bdd57e492a1b7b62696db4858b5f2d90e_prof);

    }

    // line 24
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_209ddd023955629986506228804ab61570495e3b9774c3173bc0a5634f8df804 = $this->env->getExtension("native_profiler");
        $__internal_209ddd023955629986506228804ab61570495e3b9774c3173bc0a5634f8df804->enter($__internal_209ddd023955629986506228804ab61570495e3b9774c3173bc0a5634f8df804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

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
        
        $__internal_209ddd023955629986506228804ab61570495e3b9774c3173bc0a5634f8df804->leave($__internal_209ddd023955629986506228804ab61570495e3b9774c3173bc0a5634f8df804_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0cdfde50b9623389456eb33bbd3fe84f08a49edce3d425a8d53a068d95b0c7eb = $this->env->getExtension("native_profiler");
        $__internal_0cdfde50b9623389456eb33bbd3fe84f08a49edce3d425a8d53a068d95b0c7eb->enter($__internal_0cdfde50b9623389456eb33bbd3fe84f08a49edce3d425a8d53a068d95b0c7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 44
        echo "\t<h4>About</h4>
\t<p>Bienvenue sur notre agence virtuelle.</p>
";
        
        $__internal_0cdfde50b9623389456eb33bbd3fe84f08a49edce3d425a8d53a068d95b0c7eb->leave($__internal_0cdfde50b9623389456eb33bbd3fe84f08a49edce3d425a8d53a068d95b0c7eb_prof);

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
