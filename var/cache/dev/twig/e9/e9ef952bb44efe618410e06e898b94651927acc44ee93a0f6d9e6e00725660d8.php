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
        $__internal_525f06912f4af355fead5cb16dfb9903da1cae2c89078042c8a851924436b74c = $this->env->getExtension("native_profiler");
        $__internal_525f06912f4af355fead5cb16dfb9903da1cae2c89078042c8a851924436b74c->enter($__internal_525f06912f4af355fead5cb16dfb9903da1cae2c89078042c8a851924436b74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_525f06912f4af355fead5cb16dfb9903da1cae2c89078042c8a851924436b74c->leave($__internal_525f06912f4af355fead5cb16dfb9903da1cae2c89078042c8a851924436b74c_prof);

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
