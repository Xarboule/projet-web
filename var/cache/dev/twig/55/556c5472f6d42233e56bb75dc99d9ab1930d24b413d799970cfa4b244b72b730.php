<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0a48b7eddcb0d94210d72cb8014eb30fd0d89b4e8d8148bdc9ea2e4c43c4d0fc extends Twig_Template
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
        $__internal_12cdf052d5103065b4cc1838c8699bceeeb637fc29eb7c1ee9a7bd41e0432218 = $this->env->getExtension("native_profiler");
        $__internal_12cdf052d5103065b4cc1838c8699bceeeb637fc29eb7c1ee9a7bd41e0432218->enter($__internal_12cdf052d5103065b4cc1838c8699bceeeb637fc29eb7c1ee9a7bd41e0432218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_12cdf052d5103065b4cc1838c8699bceeeb637fc29eb7c1ee9a7bd41e0432218->leave($__internal_12cdf052d5103065b4cc1838c8699bceeeb637fc29eb7c1ee9a7bd41e0432218_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
