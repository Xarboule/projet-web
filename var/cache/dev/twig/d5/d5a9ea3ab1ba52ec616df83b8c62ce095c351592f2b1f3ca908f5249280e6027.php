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
        $__internal_9bfb823f0ff9172eeb783fc455f221de7a58963bf8d6c8a7f2525fc47512a0a6 = $this->env->getExtension("native_profiler");
        $__internal_9bfb823f0ff9172eeb783fc455f221de7a58963bf8d6c8a7f2525fc47512a0a6->enter($__internal_9bfb823f0ff9172eeb783fc455f221de7a58963bf8d6c8a7f2525fc47512a0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9bfb823f0ff9172eeb783fc455f221de7a58963bf8d6c8a7f2525fc47512a0a6->leave($__internal_9bfb823f0ff9172eeb783fc455f221de7a58963bf8d6c8a7f2525fc47512a0a6_prof);

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
