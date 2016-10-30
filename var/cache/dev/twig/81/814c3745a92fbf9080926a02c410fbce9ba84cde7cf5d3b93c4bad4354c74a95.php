<?php

/* base.html.twig */
class __TwigTemplate_5ddf45f348f9d4e73f61c31e77a9c373d79f9cc72e407e6774d2e0a8ea46701d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_069d990b929da8565a6864232aa2b30eed09adcfd8443f5ebbd7093994c2d13b = $this->env->getExtension("native_profiler");
        $__internal_069d990b929da8565a6864232aa2b30eed09adcfd8443f5ebbd7093994c2d13b->enter($__internal_069d990b929da8565a6864232aa2b30eed09adcfd8443f5ebbd7093994c2d13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    \t";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "        
    \t<div class=\"container body-container\">
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        </div>
    \t
        ";
        // line 30
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
        
        $__internal_069d990b929da8565a6864232aa2b30eed09adcfd8443f5ebbd7093994c2d13b->leave($__internal_069d990b929da8565a6864232aa2b30eed09adcfd8443f5ebbd7093994c2d13b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_23f70004ff93211b43edb861c44ff926710308df9bc9fbedf3bb0942b5fbb5dc = $this->env->getExtension("native_profiler");
        $__internal_23f70004ff93211b43edb861c44ff926710308df9bc9fbedf3bb0942b5fbb5dc->enter($__internal_23f70004ff93211b43edb861c44ff926710308df9bc9fbedf3bb0942b5fbb5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tux Voyages";
        
        $__internal_23f70004ff93211b43edb861c44ff926710308df9bc9fbedf3bb0942b5fbb5dc->leave($__internal_23f70004ff93211b43edb861c44ff926710308df9bc9fbedf3bb0942b5fbb5dc_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94f0940be1bdd787520adf7e3f7ca271966bd4fc26a273cc72be9b89a78dd03b = $this->env->getExtension("native_profiler");
        $__internal_94f0940be1bdd787520adf7e3f7ca271966bd4fc26a273cc72be9b89a78dd03b->enter($__internal_94f0940be1bdd787520adf7e3f7ca271966bd4fc26a273cc72be9b89a78dd03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_94f0940be1bdd787520adf7e3f7ca271966bd4fc26a273cc72be9b89a78dd03b->leave($__internal_94f0940be1bdd787520adf7e3f7ca271966bd4fc26a273cc72be9b89a78dd03b_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_78b76d0cd0e6fd2101a3761c55d5573c2577073e36da4b30e06f6e46cc62884b = $this->env->getExtension("native_profiler");
        $__internal_78b76d0cd0e6fd2101a3761c55d5573c2577073e36da4b30e06f6e46cc62884b->enter($__internal_78b76d0cd0e6fd2101a3761c55d5573c2577073e36da4b30e06f6e46cc62884b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "<header><p>HEADER</p></header>";
        
        $__internal_78b76d0cd0e6fd2101a3761c55d5573c2577073e36da4b30e06f6e46cc62884b->leave($__internal_78b76d0cd0e6fd2101a3761c55d5573c2577073e36da4b30e06f6e46cc62884b_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb61af23dee8768f9a49288752ca9560c83c625b976b10224b1aaade60d80cfa = $this->env->getExtension("native_profiler");
        $__internal_fb61af23dee8768f9a49288752ca9560c83c625b976b10224b1aaade60d80cfa->enter($__internal_fb61af23dee8768f9a49288752ca9560c83c625b976b10224b1aaade60d80cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 19
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 21
        $this->displayBlock('main', $context, $blocks);
        // line 22
        echo "                    </div>
                    
                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 25
        $this->displayBlock('sidebar', $context, $blocks);
        // line 26
        echo "                    </div>
            ";
        
        $__internal_fb61af23dee8768f9a49288752ca9560c83c625b976b10224b1aaade60d80cfa->leave($__internal_fb61af23dee8768f9a49288752ca9560c83c625b976b10224b1aaade60d80cfa_prof);

    }

    // line 21
    public function block_main($context, array $blocks = array())
    {
        $__internal_2b1f9bd81a7afc75817920dfbc294f60ea7597f49c459ff425d4ac3357011020 = $this->env->getExtension("native_profiler");
        $__internal_2b1f9bd81a7afc75817920dfbc294f60ea7597f49c459ff425d4ac3357011020->enter($__internal_2b1f9bd81a7afc75817920dfbc294f60ea7597f49c459ff425d4ac3357011020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_2b1f9bd81a7afc75817920dfbc294f60ea7597f49c459ff425d4ac3357011020->leave($__internal_2b1f9bd81a7afc75817920dfbc294f60ea7597f49c459ff425d4ac3357011020_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9342d6dd8b53027ed3823c147f69c6dac236a9d874289d1465971da0c62ac460 = $this->env->getExtension("native_profiler");
        $__internal_9342d6dd8b53027ed3823c147f69c6dac236a9d874289d1465971da0c62ac460->enter($__internal_9342d6dd8b53027ed3823c147f69c6dac236a9d874289d1465971da0c62ac460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo "SIDEBAR";
        
        $__internal_9342d6dd8b53027ed3823c147f69c6dac236a9d874289d1465971da0c62ac460->leave($__internal_9342d6dd8b53027ed3823c147f69c6dac236a9d874289d1465971da0c62ac460_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bb659132780059f43e9ef3a613b73b0b8e417774e3bfbbb14df87c025e9fbcf2 = $this->env->getExtension("native_profiler");
        $__internal_bb659132780059f43e9ef3a613b73b0b8e417774e3bfbbb14df87c025e9fbcf2->enter($__internal_bb659132780059f43e9ef3a613b73b0b8e417774e3bfbbb14df87c025e9fbcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<footer><br/><br/><br/><p>Rémi Dulong - Delphine Cordat</p></footer>";
        
        $__internal_bb659132780059f43e9ef3a613b73b0b8e417774e3bfbbb14df87c025e9fbcf2->leave($__internal_bb659132780059f43e9ef3a613b73b0b8e417774e3bfbbb14df87c025e9fbcf2_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24cb7c0b3692de087bf5936910e1fc41effe2ac0f78f25eaa55ece1f51074846 = $this->env->getExtension("native_profiler");
        $__internal_24cb7c0b3692de087bf5936910e1fc41effe2ac0f78f25eaa55ece1f51074846->enter($__internal_24cb7c0b3692de087bf5936910e1fc41effe2ac0f78f25eaa55ece1f51074846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_24cb7c0b3692de087bf5936910e1fc41effe2ac0f78f25eaa55ece1f51074846->leave($__internal_24cb7c0b3692de087bf5936910e1fc41effe2ac0f78f25eaa55ece1f51074846_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 33,  189 => 32,  183 => 31,  171 => 30,  159 => 25,  148 => 21,  140 => 26,  138 => 25,  133 => 22,  131 => 21,  126 => 19,  122 => 17,  116 => 16,  104 => 13,  94 => 8,  88 => 7,  76 => 6,  67 => 35,  64 => 31,  62 => 30,  58 => 28,  56 => 16,  52 => 14,  50 => 13,  43 => 10,  41 => 7,  37 => 6,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1"/>*/
/*         <title>{% block title %}Tux Voyages{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     	{% block header %}<header><p>HEADER</p></header>{% endblock %}*/
/*         */
/*     	<div class="container body-container">*/
/*             {% block body %}*/
/*                 <div class="row">*/
/*                     <div id="main" class="col-sm-9">*/
/*                         {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/*                     */
/*                     <div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}SIDEBAR{% endblock %}*/
/*                     </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*     	*/
/*         {% block footer %}<footer><br/><br/><br/><p>Rémi Dulong - Delphine Cordat</p></footer>{% endblock %}*/
/*         {% block javascripts %}*/
/*         	<script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*         	<script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
