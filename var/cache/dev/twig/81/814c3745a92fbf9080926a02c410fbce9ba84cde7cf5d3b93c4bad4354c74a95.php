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
        $__internal_da13b2d2308ae2bbf3ee42c55772db1a9e3f25e187735b00334211ae4edcd72f = $this->env->getExtension("native_profiler");
        $__internal_da13b2d2308ae2bbf3ee42c55772db1a9e3f25e187735b00334211ae4edcd72f->enter($__internal_da13b2d2308ae2bbf3ee42c55772db1a9e3f25e187735b00334211ae4edcd72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_da13b2d2308ae2bbf3ee42c55772db1a9e3f25e187735b00334211ae4edcd72f->leave($__internal_da13b2d2308ae2bbf3ee42c55772db1a9e3f25e187735b00334211ae4edcd72f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_148299415209d79d1a2a5c529216771db0b47653241ffc4706222d442d297098 = $this->env->getExtension("native_profiler");
        $__internal_148299415209d79d1a2a5c529216771db0b47653241ffc4706222d442d297098->enter($__internal_148299415209d79d1a2a5c529216771db0b47653241ffc4706222d442d297098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "INT Holidays";
        
        $__internal_148299415209d79d1a2a5c529216771db0b47653241ffc4706222d442d297098->leave($__internal_148299415209d79d1a2a5c529216771db0b47653241ffc4706222d442d297098_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_107ef4e7328d1f927d1149676073ac8c9b7dbeb4049a973708b630f4a151794a = $this->env->getExtension("native_profiler");
        $__internal_107ef4e7328d1f927d1149676073ac8c9b7dbeb4049a973708b630f4a151794a->enter($__internal_107ef4e7328d1f927d1149676073ac8c9b7dbeb4049a973708b630f4a151794a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_107ef4e7328d1f927d1149676073ac8c9b7dbeb4049a973708b630f4a151794a->leave($__internal_107ef4e7328d1f927d1149676073ac8c9b7dbeb4049a973708b630f4a151794a_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_89a83a312b7ee76366e4628e4128e7c26342c7907bae4fa4e9a813480b786a3d = $this->env->getExtension("native_profiler");
        $__internal_89a83a312b7ee76366e4628e4128e7c26342c7907bae4fa4e9a813480b786a3d->enter($__internal_89a83a312b7ee76366e4628e4128e7c26342c7907bae4fa4e9a813480b786a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "<header><p>HEADER</p></header>";
        
        $__internal_89a83a312b7ee76366e4628e4128e7c26342c7907bae4fa4e9a813480b786a3d->leave($__internal_89a83a312b7ee76366e4628e4128e7c26342c7907bae4fa4e9a813480b786a3d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f4c448bdbdd588b33cb921cbda09c3e037eb8824e6fa4078ef62c548e1ea10e = $this->env->getExtension("native_profiler");
        $__internal_6f4c448bdbdd588b33cb921cbda09c3e037eb8824e6fa4078ef62c548e1ea10e->enter($__internal_6f4c448bdbdd588b33cb921cbda09c3e037eb8824e6fa4078ef62c548e1ea10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f4c448bdbdd588b33cb921cbda09c3e037eb8824e6fa4078ef62c548e1ea10e->leave($__internal_6f4c448bdbdd588b33cb921cbda09c3e037eb8824e6fa4078ef62c548e1ea10e_prof);

    }

    // line 21
    public function block_main($context, array $blocks = array())
    {
        $__internal_d3dc3af47593bdd7bade7de925ec5b9f7f6d522e2bf1eb6bf1f217b96dc82cda = $this->env->getExtension("native_profiler");
        $__internal_d3dc3af47593bdd7bade7de925ec5b9f7f6d522e2bf1eb6bf1f217b96dc82cda->enter($__internal_d3dc3af47593bdd7bade7de925ec5b9f7f6d522e2bf1eb6bf1f217b96dc82cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d3dc3af47593bdd7bade7de925ec5b9f7f6d522e2bf1eb6bf1f217b96dc82cda->leave($__internal_d3dc3af47593bdd7bade7de925ec5b9f7f6d522e2bf1eb6bf1f217b96dc82cda_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1404d9ff1b19211394976f3e8dcf36c890adffbc36148f454782fec6bd50f7a8 = $this->env->getExtension("native_profiler");
        $__internal_1404d9ff1b19211394976f3e8dcf36c890adffbc36148f454782fec6bd50f7a8->enter($__internal_1404d9ff1b19211394976f3e8dcf36c890adffbc36148f454782fec6bd50f7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo "SIDEBAR";
        
        $__internal_1404d9ff1b19211394976f3e8dcf36c890adffbc36148f454782fec6bd50f7a8->leave($__internal_1404d9ff1b19211394976f3e8dcf36c890adffbc36148f454782fec6bd50f7a8_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e0f1c639e0fd31ae9191f257a177483331d351ccd910261f2de779fbb26eac80 = $this->env->getExtension("native_profiler");
        $__internal_e0f1c639e0fd31ae9191f257a177483331d351ccd910261f2de779fbb26eac80->enter($__internal_e0f1c639e0fd31ae9191f257a177483331d351ccd910261f2de779fbb26eac80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<footer><br/><br/><br/><p>Rémi Dulong - Delphine Cordat</p></footer>";
        
        $__internal_e0f1c639e0fd31ae9191f257a177483331d351ccd910261f2de779fbb26eac80->leave($__internal_e0f1c639e0fd31ae9191f257a177483331d351ccd910261f2de779fbb26eac80_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8244f4614bcd86937daa624c807bbf63dee0a54196335a6ec82146c866050c0 = $this->env->getExtension("native_profiler");
        $__internal_f8244f4614bcd86937daa624c807bbf63dee0a54196335a6ec82146c866050c0->enter($__internal_f8244f4614bcd86937daa624c807bbf63dee0a54196335a6ec82146c866050c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f8244f4614bcd86937daa624c807bbf63dee0a54196335a6ec82146c866050c0->leave($__internal_f8244f4614bcd86937daa624c807bbf63dee0a54196335a6ec82146c866050c0_prof);

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
/*         <title>{% block title %}INT Holidays{% endblock %}</title>*/
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
