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
        $__internal_923f37e6b0f877a94ddd305406235d4528403a8eff7ceef4f1c346966823af00 = $this->env->getExtension("native_profiler");
        $__internal_923f37e6b0f877a94ddd305406235d4528403a8eff7ceef4f1c346966823af00->enter($__internal_923f37e6b0f877a94ddd305406235d4528403a8eff7ceef4f1c346966823af00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_923f37e6b0f877a94ddd305406235d4528403a8eff7ceef4f1c346966823af00->leave($__internal_923f37e6b0f877a94ddd305406235d4528403a8eff7ceef4f1c346966823af00_prof);

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
