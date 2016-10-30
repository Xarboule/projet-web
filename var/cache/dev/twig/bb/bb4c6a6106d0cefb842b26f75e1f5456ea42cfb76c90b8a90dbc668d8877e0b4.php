<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7637d9f9e8036bb86e7f3ed467b1e6543492b29f77277a4630a528bb1e9ff62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6484885ffb1197111784cbfcabde2336644452d089bf93fdebdd6d57f9ea1153 = $this->env->getExtension("native_profiler");
        $__internal_6484885ffb1197111784cbfcabde2336644452d089bf93fdebdd6d57f9ea1153->enter($__internal_6484885ffb1197111784cbfcabde2336644452d089bf93fdebdd6d57f9ea1153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6484885ffb1197111784cbfcabde2336644452d089bf93fdebdd6d57f9ea1153->leave($__internal_6484885ffb1197111784cbfcabde2336644452d089bf93fdebdd6d57f9ea1153_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a2595ffb2e9015d7bf12c9ba2bda85c288d428644cd537f9ede6652b9ed1055 = $this->env->getExtension("native_profiler");
        $__internal_8a2595ffb2e9015d7bf12c9ba2bda85c288d428644cd537f9ede6652b9ed1055->enter($__internal_8a2595ffb2e9015d7bf12c9ba2bda85c288d428644cd537f9ede6652b9ed1055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8a2595ffb2e9015d7bf12c9ba2bda85c288d428644cd537f9ede6652b9ed1055->leave($__internal_8a2595ffb2e9015d7bf12c9ba2bda85c288d428644cd537f9ede6652b9ed1055_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53f5b7f0aa59de1cb89a0447d5d5c2d9ce6f59928c358d827bd4163b939f3878 = $this->env->getExtension("native_profiler");
        $__internal_53f5b7f0aa59de1cb89a0447d5d5c2d9ce6f59928c358d827bd4163b939f3878->enter($__internal_53f5b7f0aa59de1cb89a0447d5d5c2d9ce6f59928c358d827bd4163b939f3878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_53f5b7f0aa59de1cb89a0447d5d5c2d9ce6f59928c358d827bd4163b939f3878->leave($__internal_53f5b7f0aa59de1cb89a0447d5d5c2d9ce6f59928c358d827bd4163b939f3878_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea29bd3a05fafa9ecd37e50b63917b671a3259346bd5223eac64f10c65dbe5ed = $this->env->getExtension("native_profiler");
        $__internal_ea29bd3a05fafa9ecd37e50b63917b671a3259346bd5223eac64f10c65dbe5ed->enter($__internal_ea29bd3a05fafa9ecd37e50b63917b671a3259346bd5223eac64f10c65dbe5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ea29bd3a05fafa9ecd37e50b63917b671a3259346bd5223eac64f10c65dbe5ed->leave($__internal_ea29bd3a05fafa9ecd37e50b63917b671a3259346bd5223eac64f10c65dbe5ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
