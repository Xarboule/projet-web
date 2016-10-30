<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_18b3e38de3eb919e5b110c0f69d898ff73791a1bd6c822aef4e55263401dc883 extends Twig_Template
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
        $__internal_d956da6d01244f75d6dd3e23bb628e25211a66021cebbcaa299ac9191ade4199 = $this->env->getExtension("native_profiler");
        $__internal_d956da6d01244f75d6dd3e23bb628e25211a66021cebbcaa299ac9191ade4199->enter($__internal_d956da6d01244f75d6dd3e23bb628e25211a66021cebbcaa299ac9191ade4199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d956da6d01244f75d6dd3e23bb628e25211a66021cebbcaa299ac9191ade4199->leave($__internal_d956da6d01244f75d6dd3e23bb628e25211a66021cebbcaa299ac9191ade4199_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
