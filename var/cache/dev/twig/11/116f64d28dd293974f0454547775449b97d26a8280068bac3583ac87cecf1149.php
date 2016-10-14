<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_87ed619334b843d3d220ecf27b9302c3f28509219d815ba6c080e834e6686161 extends Twig_Template
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
        $__internal_c96f3cf2a188458f1af2aca42bde7ddca72da62bbc9f022ba0f749a08342a32b = $this->env->getExtension("native_profiler");
        $__internal_c96f3cf2a188458f1af2aca42bde7ddca72da62bbc9f022ba0f749a08342a32b->enter($__internal_c96f3cf2a188458f1af2aca42bde7ddca72da62bbc9f022ba0f749a08342a32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c96f3cf2a188458f1af2aca42bde7ddca72da62bbc9f022ba0f749a08342a32b->leave($__internal_c96f3cf2a188458f1af2aca42bde7ddca72da62bbc9f022ba0f749a08342a32b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
