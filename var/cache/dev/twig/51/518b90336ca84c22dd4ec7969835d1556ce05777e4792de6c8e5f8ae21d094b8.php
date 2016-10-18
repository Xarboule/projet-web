<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7cfdfb8aafc41d01ee3d87db523fb4bdf06977f367b6707cec539ed90c6150cf extends Twig_Template
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
        $__internal_154413d57f5c0ecc5e5c78ae126385a3ee9f31b6980919346b301d15622762fc = $this->env->getExtension("native_profiler");
        $__internal_154413d57f5c0ecc5e5c78ae126385a3ee9f31b6980919346b301d15622762fc->enter($__internal_154413d57f5c0ecc5e5c78ae126385a3ee9f31b6980919346b301d15622762fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_154413d57f5c0ecc5e5c78ae126385a3ee9f31b6980919346b301d15622762fc->leave($__internal_154413d57f5c0ecc5e5c78ae126385a3ee9f31b6980919346b301d15622762fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
