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
        $__internal_b3368c90acb1e8743bcbe8bc6192372e806dfacf600c0c30a95f79afd7006fae = $this->env->getExtension("native_profiler");
        $__internal_b3368c90acb1e8743bcbe8bc6192372e806dfacf600c0c30a95f79afd7006fae->enter($__internal_b3368c90acb1e8743bcbe8bc6192372e806dfacf600c0c30a95f79afd7006fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b3368c90acb1e8743bcbe8bc6192372e806dfacf600c0c30a95f79afd7006fae->leave($__internal_b3368c90acb1e8743bcbe8bc6192372e806dfacf600c0c30a95f79afd7006fae_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0be1cc219e9e554b5a13cb9a9cb868a132dd4b552a93e1794cf24cfb48f50e2 = $this->env->getExtension("native_profiler");
        $__internal_c0be1cc219e9e554b5a13cb9a9cb868a132dd4b552a93e1794cf24cfb48f50e2->enter($__internal_c0be1cc219e9e554b5a13cb9a9cb868a132dd4b552a93e1794cf24cfb48f50e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tux Voyages";
        
        $__internal_c0be1cc219e9e554b5a13cb9a9cb868a132dd4b552a93e1794cf24cfb48f50e2->leave($__internal_c0be1cc219e9e554b5a13cb9a9cb868a132dd4b552a93e1794cf24cfb48f50e2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aed4e915fff2d5a663fcc9eead438f6d54265f563d84760c8d623804edae565c = $this->env->getExtension("native_profiler");
        $__internal_aed4e915fff2d5a663fcc9eead438f6d54265f563d84760c8d623804edae565c->enter($__internal_aed4e915fff2d5a663fcc9eead438f6d54265f563d84760c8d623804edae565c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_aed4e915fff2d5a663fcc9eead438f6d54265f563d84760c8d623804edae565c->leave($__internal_aed4e915fff2d5a663fcc9eead438f6d54265f563d84760c8d623804edae565c_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_b4c831b36dff940c19c868f70588bd86d7ec596d55452b00a38804615ba03cf2 = $this->env->getExtension("native_profiler");
        $__internal_b4c831b36dff940c19c868f70588bd86d7ec596d55452b00a38804615ba03cf2->enter($__internal_b4c831b36dff940c19c868f70588bd86d7ec596d55452b00a38804615ba03cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "<header><p>HEADER</p></header>";
        
        $__internal_b4c831b36dff940c19c868f70588bd86d7ec596d55452b00a38804615ba03cf2->leave($__internal_b4c831b36dff940c19c868f70588bd86d7ec596d55452b00a38804615ba03cf2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_13e8b72cd514d5542b350ce9fc852fad0c8358af3fc66c24c811a2cfd7861328 = $this->env->getExtension("native_profiler");
        $__internal_13e8b72cd514d5542b350ce9fc852fad0c8358af3fc66c24c811a2cfd7861328->enter($__internal_13e8b72cd514d5542b350ce9fc852fad0c8358af3fc66c24c811a2cfd7861328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13e8b72cd514d5542b350ce9fc852fad0c8358af3fc66c24c811a2cfd7861328->leave($__internal_13e8b72cd514d5542b350ce9fc852fad0c8358af3fc66c24c811a2cfd7861328_prof);

    }

    // line 21
    public function block_main($context, array $blocks = array())
    {
        $__internal_723a496ec029ed7fcf408b73f6e860b1a130b0a681b75ffd87418c2c2c378b9c = $this->env->getExtension("native_profiler");
        $__internal_723a496ec029ed7fcf408b73f6e860b1a130b0a681b75ffd87418c2c2c378b9c->enter($__internal_723a496ec029ed7fcf408b73f6e860b1a130b0a681b75ffd87418c2c2c378b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_723a496ec029ed7fcf408b73f6e860b1a130b0a681b75ffd87418c2c2c378b9c->leave($__internal_723a496ec029ed7fcf408b73f6e860b1a130b0a681b75ffd87418c2c2c378b9c_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bdc59e3b7af28df36a3bcd2b08bec683c45d643ade82269866c33abb6aac9ac5 = $this->env->getExtension("native_profiler");
        $__internal_bdc59e3b7af28df36a3bcd2b08bec683c45d643ade82269866c33abb6aac9ac5->enter($__internal_bdc59e3b7af28df36a3bcd2b08bec683c45d643ade82269866c33abb6aac9ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo "SIDEBAR";
        
        $__internal_bdc59e3b7af28df36a3bcd2b08bec683c45d643ade82269866c33abb6aac9ac5->leave($__internal_bdc59e3b7af28df36a3bcd2b08bec683c45d643ade82269866c33abb6aac9ac5_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4a4533cfedb3883dc053715c48d6fbba4c1d7849b06e605326ef0e46e0c8ce36 = $this->env->getExtension("native_profiler");
        $__internal_4a4533cfedb3883dc053715c48d6fbba4c1d7849b06e605326ef0e46e0c8ce36->enter($__internal_4a4533cfedb3883dc053715c48d6fbba4c1d7849b06e605326ef0e46e0c8ce36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<footer><br/><br/><br/><p>Rémi Dulong - Delphine Cordat</p></footer>";
        
        $__internal_4a4533cfedb3883dc053715c48d6fbba4c1d7849b06e605326ef0e46e0c8ce36->leave($__internal_4a4533cfedb3883dc053715c48d6fbba4c1d7849b06e605326ef0e46e0c8ce36_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc09431ecb9226bcddbebcb5a5cd1150638d06780beafe71ea5690dc464347ff = $this->env->getExtension("native_profiler");
        $__internal_fc09431ecb9226bcddbebcb5a5cd1150638d06780beafe71ea5690dc464347ff->enter($__internal_fc09431ecb9226bcddbebcb5a5cd1150638d06780beafe71ea5690dc464347ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_fc09431ecb9226bcddbebcb5a5cd1150638d06780beafe71ea5690dc464347ff->leave($__internal_fc09431ecb9226bcddbebcb5a5cd1150638d06780beafe71ea5690dc464347ff_prof);

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
