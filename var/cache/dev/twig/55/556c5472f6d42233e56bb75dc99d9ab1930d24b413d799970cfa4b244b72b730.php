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
        $__internal_3d9117e80c9c5ee49e59e4201a026574ad231c0399c959aee61ef1f5a2eb11f1 = $this->env->getExtension("native_profiler");
        $__internal_3d9117e80c9c5ee49e59e4201a026574ad231c0399c959aee61ef1f5a2eb11f1->enter($__internal_3d9117e80c9c5ee49e59e4201a026574ad231c0399c959aee61ef1f5a2eb11f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3d9117e80c9c5ee49e59e4201a026574ad231c0399c959aee61ef1f5a2eb11f1->leave($__internal_3d9117e80c9c5ee49e59e4201a026574ad231c0399c959aee61ef1f5a2eb11f1_prof);

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
