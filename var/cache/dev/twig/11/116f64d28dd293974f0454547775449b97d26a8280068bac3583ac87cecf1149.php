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
        $__internal_5dd57e0935b24f54a4bf2cb918eaecc6e99f43cc065dafc27cf2ab34f4194ba0 = $this->env->getExtension("native_profiler");
        $__internal_5dd57e0935b24f54a4bf2cb918eaecc6e99f43cc065dafc27cf2ab34f4194ba0->enter($__internal_5dd57e0935b24f54a4bf2cb918eaecc6e99f43cc065dafc27cf2ab34f4194ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5dd57e0935b24f54a4bf2cb918eaecc6e99f43cc065dafc27cf2ab34f4194ba0->leave($__internal_5dd57e0935b24f54a4bf2cb918eaecc6e99f43cc065dafc27cf2ab34f4194ba0_prof);

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
