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
        $__internal_cbb641e5787da3f9b75e52deaf5a4bae2b8ff75549bab3442a863c76e0f98a2b = $this->env->getExtension("native_profiler");
        $__internal_cbb641e5787da3f9b75e52deaf5a4bae2b8ff75549bab3442a863c76e0f98a2b->enter($__internal_cbb641e5787da3f9b75e52deaf5a4bae2b8ff75549bab3442a863c76e0f98a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cbb641e5787da3f9b75e52deaf5a4bae2b8ff75549bab3442a863c76e0f98a2b->leave($__internal_cbb641e5787da3f9b75e52deaf5a4bae2b8ff75549bab3442a863c76e0f98a2b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcf04687ba74d4270a20df461ca28b9450a4f188d4163ea1c3368c8d19243272 = $this->env->getExtension("native_profiler");
        $__internal_fcf04687ba74d4270a20df461ca28b9450a4f188d4163ea1c3368c8d19243272->enter($__internal_fcf04687ba74d4270a20df461ca28b9450a4f188d4163ea1c3368c8d19243272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "INT Holidays";
        
        $__internal_fcf04687ba74d4270a20df461ca28b9450a4f188d4163ea1c3368c8d19243272->leave($__internal_fcf04687ba74d4270a20df461ca28b9450a4f188d4163ea1c3368c8d19243272_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05cb438a58ab9fb21afd03a296a5ffb663a5a60b1c517a69d033f96b214ce8b8 = $this->env->getExtension("native_profiler");
        $__internal_05cb438a58ab9fb21afd03a296a5ffb663a5a60b1c517a69d033f96b214ce8b8->enter($__internal_05cb438a58ab9fb21afd03a296a5ffb663a5a60b1c517a69d033f96b214ce8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_05cb438a58ab9fb21afd03a296a5ffb663a5a60b1c517a69d033f96b214ce8b8->leave($__internal_05cb438a58ab9fb21afd03a296a5ffb663a5a60b1c517a69d033f96b214ce8b8_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_f3b90a73601f27d775478d55e2ea6e4b998fa0bfce906eeaf2fd4c805e7efa81 = $this->env->getExtension("native_profiler");
        $__internal_f3b90a73601f27d775478d55e2ea6e4b998fa0bfce906eeaf2fd4c805e7efa81->enter($__internal_f3b90a73601f27d775478d55e2ea6e4b998fa0bfce906eeaf2fd4c805e7efa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "<header><p>HEADER</p></header>";
        
        $__internal_f3b90a73601f27d775478d55e2ea6e4b998fa0bfce906eeaf2fd4c805e7efa81->leave($__internal_f3b90a73601f27d775478d55e2ea6e4b998fa0bfce906eeaf2fd4c805e7efa81_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fb12ddcf54a3673cdb44f2d3ed83f6b262383e6a143c5926fb31853dd42a7ae = $this->env->getExtension("native_profiler");
        $__internal_2fb12ddcf54a3673cdb44f2d3ed83f6b262383e6a143c5926fb31853dd42a7ae->enter($__internal_2fb12ddcf54a3673cdb44f2d3ed83f6b262383e6a143c5926fb31853dd42a7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2fb12ddcf54a3673cdb44f2d3ed83f6b262383e6a143c5926fb31853dd42a7ae->leave($__internal_2fb12ddcf54a3673cdb44f2d3ed83f6b262383e6a143c5926fb31853dd42a7ae_prof);

    }

    // line 21
    public function block_main($context, array $blocks = array())
    {
        $__internal_0ca76c033df4f4c8d7ad4df58f8b0e2831d76621a6860cbf0f2562bcaec2eeed = $this->env->getExtension("native_profiler");
        $__internal_0ca76c033df4f4c8d7ad4df58f8b0e2831d76621a6860cbf0f2562bcaec2eeed->enter($__internal_0ca76c033df4f4c8d7ad4df58f8b0e2831d76621a6860cbf0f2562bcaec2eeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_0ca76c033df4f4c8d7ad4df58f8b0e2831d76621a6860cbf0f2562bcaec2eeed->leave($__internal_0ca76c033df4f4c8d7ad4df58f8b0e2831d76621a6860cbf0f2562bcaec2eeed_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9ebbc0f247ae98534ed1cdbc516162d46735efde5893484c67309158e0ba90b9 = $this->env->getExtension("native_profiler");
        $__internal_9ebbc0f247ae98534ed1cdbc516162d46735efde5893484c67309158e0ba90b9->enter($__internal_9ebbc0f247ae98534ed1cdbc516162d46735efde5893484c67309158e0ba90b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo "SIDEBAR";
        
        $__internal_9ebbc0f247ae98534ed1cdbc516162d46735efde5893484c67309158e0ba90b9->leave($__internal_9ebbc0f247ae98534ed1cdbc516162d46735efde5893484c67309158e0ba90b9_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3ed8c6d42f0a867cb859aa963b1a9527eb83632556df3b96427789244c66be16 = $this->env->getExtension("native_profiler");
        $__internal_3ed8c6d42f0a867cb859aa963b1a9527eb83632556df3b96427789244c66be16->enter($__internal_3ed8c6d42f0a867cb859aa963b1a9527eb83632556df3b96427789244c66be16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<footer><p>FOOTER</p></footer>";
        
        $__internal_3ed8c6d42f0a867cb859aa963b1a9527eb83632556df3b96427789244c66be16->leave($__internal_3ed8c6d42f0a867cb859aa963b1a9527eb83632556df3b96427789244c66be16_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eeddead9d12a5176f77f8fdfdf4363e052829a7c49b92dfc3c59410ac9d8c7ab = $this->env->getExtension("native_profiler");
        $__internal_eeddead9d12a5176f77f8fdfdf4363e052829a7c49b92dfc3c59410ac9d8c7ab->enter($__internal_eeddead9d12a5176f77f8fdfdf4363e052829a7c49b92dfc3c59410ac9d8c7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_eeddead9d12a5176f77f8fdfdf4363e052829a7c49b92dfc3c59410ac9d8c7ab->leave($__internal_eeddead9d12a5176f77f8fdfdf4363e052829a7c49b92dfc3c59410ac9d8c7ab_prof);

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
/*         {% block footer %}<footer><p>FOOTER</p></footer>{% endblock %}*/
/*         {% block javascripts %}*/
/*         	<script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*         	<script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
