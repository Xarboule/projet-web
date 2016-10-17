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
        $__internal_8f56057bd4fcf6198324f3cc3bbe20561f51e207b964facbd851ae93ca4d8595 = $this->env->getExtension("native_profiler");
        $__internal_8f56057bd4fcf6198324f3cc3bbe20561f51e207b964facbd851ae93ca4d8595->enter($__internal_8f56057bd4fcf6198324f3cc3bbe20561f51e207b964facbd851ae93ca4d8595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8f56057bd4fcf6198324f3cc3bbe20561f51e207b964facbd851ae93ca4d8595->leave($__internal_8f56057bd4fcf6198324f3cc3bbe20561f51e207b964facbd851ae93ca4d8595_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4b56b5569d3a69da111723966d47ebfba563f695f8bf9aa07e7878002ad7278 = $this->env->getExtension("native_profiler");
        $__internal_d4b56b5569d3a69da111723966d47ebfba563f695f8bf9aa07e7878002ad7278->enter($__internal_d4b56b5569d3a69da111723966d47ebfba563f695f8bf9aa07e7878002ad7278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tux Voyages";
        
        $__internal_d4b56b5569d3a69da111723966d47ebfba563f695f8bf9aa07e7878002ad7278->leave($__internal_d4b56b5569d3a69da111723966d47ebfba563f695f8bf9aa07e7878002ad7278_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86bf688403968cc69435dcf3082fb3ea26ea6e7f27ed463f737cc4ec7b9a6d7a = $this->env->getExtension("native_profiler");
        $__internal_86bf688403968cc69435dcf3082fb3ea26ea6e7f27ed463f737cc4ec7b9a6d7a->enter($__internal_86bf688403968cc69435dcf3082fb3ea26ea6e7f27ed463f737cc4ec7b9a6d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_86bf688403968cc69435dcf3082fb3ea26ea6e7f27ed463f737cc4ec7b9a6d7a->leave($__internal_86bf688403968cc69435dcf3082fb3ea26ea6e7f27ed463f737cc4ec7b9a6d7a_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_b8b7a93a6530a54f26af1002cdf2ff14b82bffb577df83941ece7ce63783c747 = $this->env->getExtension("native_profiler");
        $__internal_b8b7a93a6530a54f26af1002cdf2ff14b82bffb577df83941ece7ce63783c747->enter($__internal_b8b7a93a6530a54f26af1002cdf2ff14b82bffb577df83941ece7ce63783c747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "<header><p>HEADER</p></header>";
        
        $__internal_b8b7a93a6530a54f26af1002cdf2ff14b82bffb577df83941ece7ce63783c747->leave($__internal_b8b7a93a6530a54f26af1002cdf2ff14b82bffb577df83941ece7ce63783c747_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_175d13dca94d6c2d8749f09eef61d3f33bca4a94c29711ac657b4019474ec580 = $this->env->getExtension("native_profiler");
        $__internal_175d13dca94d6c2d8749f09eef61d3f33bca4a94c29711ac657b4019474ec580->enter($__internal_175d13dca94d6c2d8749f09eef61d3f33bca4a94c29711ac657b4019474ec580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_175d13dca94d6c2d8749f09eef61d3f33bca4a94c29711ac657b4019474ec580->leave($__internal_175d13dca94d6c2d8749f09eef61d3f33bca4a94c29711ac657b4019474ec580_prof);

    }

    // line 21
    public function block_main($context, array $blocks = array())
    {
        $__internal_e3eb866ca0b826d86be0ea95e7d6a6c46ec820e2173b68db1142f048b5844d34 = $this->env->getExtension("native_profiler");
        $__internal_e3eb866ca0b826d86be0ea95e7d6a6c46ec820e2173b68db1142f048b5844d34->enter($__internal_e3eb866ca0b826d86be0ea95e7d6a6c46ec820e2173b68db1142f048b5844d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e3eb866ca0b826d86be0ea95e7d6a6c46ec820e2173b68db1142f048b5844d34->leave($__internal_e3eb866ca0b826d86be0ea95e7d6a6c46ec820e2173b68db1142f048b5844d34_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c3f5dd3910d147e20a3525a2618bd0ec2853c2faab8eca972acc5c49fa84bc66 = $this->env->getExtension("native_profiler");
        $__internal_c3f5dd3910d147e20a3525a2618bd0ec2853c2faab8eca972acc5c49fa84bc66->enter($__internal_c3f5dd3910d147e20a3525a2618bd0ec2853c2faab8eca972acc5c49fa84bc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo "SIDEBAR";
        
        $__internal_c3f5dd3910d147e20a3525a2618bd0ec2853c2faab8eca972acc5c49fa84bc66->leave($__internal_c3f5dd3910d147e20a3525a2618bd0ec2853c2faab8eca972acc5c49fa84bc66_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_89b1dd4307d00951c9f2d44319d7b5ececbe46796692e77216f147e99e3e1845 = $this->env->getExtension("native_profiler");
        $__internal_89b1dd4307d00951c9f2d44319d7b5ececbe46796692e77216f147e99e3e1845->enter($__internal_89b1dd4307d00951c9f2d44319d7b5ececbe46796692e77216f147e99e3e1845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<footer><br/><br/><br/><p>Rémi Dulong - Delphine Cordat</p></footer>";
        
        $__internal_89b1dd4307d00951c9f2d44319d7b5ececbe46796692e77216f147e99e3e1845->leave($__internal_89b1dd4307d00951c9f2d44319d7b5ececbe46796692e77216f147e99e3e1845_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfa2d2b2eead55536733ca57151818cccb77893e4a5b1d898afa5ca2d6b485b0 = $this->env->getExtension("native_profiler");
        $__internal_cfa2d2b2eead55536733ca57151818cccb77893e4a5b1d898afa5ca2d6b485b0->enter($__internal_cfa2d2b2eead55536733ca57151818cccb77893e4a5b1d898afa5ca2d6b485b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_cfa2d2b2eead55536733ca57151818cccb77893e4a5b1d898afa5ca2d6b485b0->leave($__internal_cfa2d2b2eead55536733ca57151818cccb77893e4a5b1d898afa5ca2d6b485b0_prof);

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
