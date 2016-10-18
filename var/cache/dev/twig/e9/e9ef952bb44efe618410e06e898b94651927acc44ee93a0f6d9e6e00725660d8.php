<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_89e1331c3c9aec7ee7711d13570b1f81e6967a82c4b8fa39e098d1562afa05c5 extends Twig_Template
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
        $__internal_0f3e0b6d7b58d9fd020d1d60f954f6b36e4b0553311c19d8576f9c57cf3235fc = $this->env->getExtension("native_profiler");
        $__internal_0f3e0b6d7b58d9fd020d1d60f954f6b36e4b0553311c19d8576f9c57cf3235fc->enter($__internal_0f3e0b6d7b58d9fd020d1d60f954f6b36e4b0553311c19d8576f9c57cf3235fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0f3e0b6d7b58d9fd020d1d60f954f6b36e4b0553311c19d8576f9c57cf3235fc->leave($__internal_0f3e0b6d7b58d9fd020d1d60f954f6b36e4b0553311c19d8576f9c57cf3235fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
