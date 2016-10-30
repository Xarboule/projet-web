<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3fefd6a56004f859613c897b703c1361df615cc5c1a40e43fbc0930f7fccb5af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4e8c5480d7f4330f7e39f2156002cf98771898884e24fad9e569d231c552681 = $this->env->getExtension("native_profiler");
        $__internal_a4e8c5480d7f4330f7e39f2156002cf98771898884e24fad9e569d231c552681->enter($__internal_a4e8c5480d7f4330f7e39f2156002cf98771898884e24fad9e569d231c552681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a4e8c5480d7f4330f7e39f2156002cf98771898884e24fad9e569d231c552681->leave($__internal_a4e8c5480d7f4330f7e39f2156002cf98771898884e24fad9e569d231c552681_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
