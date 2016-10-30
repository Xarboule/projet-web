<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_fe45d14e5eda2bb7171a6878dff36213cfceb162c44a88d4ba6771aab86a8175 extends Twig_Template
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
        $__internal_36b3021f669cf0d6ad926f51dabd6f2ca56cd21f23de0529a06ab1feeaea1a26 = $this->env->getExtension("native_profiler");
        $__internal_36b3021f669cf0d6ad926f51dabd6f2ca56cd21f23de0529a06ab1feeaea1a26->enter($__internal_36b3021f669cf0d6ad926f51dabd6f2ca56cd21f23de0529a06ab1feeaea1a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_36b3021f669cf0d6ad926f51dabd6f2ca56cd21f23de0529a06ab1feeaea1a26->leave($__internal_36b3021f669cf0d6ad926f51dabd6f2ca56cd21f23de0529a06ab1feeaea1a26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
