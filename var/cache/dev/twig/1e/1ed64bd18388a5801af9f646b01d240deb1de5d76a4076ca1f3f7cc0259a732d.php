<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c28a0f3164ad2adcce5e87d2f01c090b3b00fb1c43b376432d68ecf3b3f098dd extends Twig_Template
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
        $__internal_18446785b12b91bda8b90b879ddcb6e7dd75263fdb6c8d2304ffdb27332afa8e = $this->env->getExtension("native_profiler");
        $__internal_18446785b12b91bda8b90b879ddcb6e7dd75263fdb6c8d2304ffdb27332afa8e->enter($__internal_18446785b12b91bda8b90b879ddcb6e7dd75263fdb6c8d2304ffdb27332afa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_18446785b12b91bda8b90b879ddcb6e7dd75263fdb6c8d2304ffdb27332afa8e->leave($__internal_18446785b12b91bda8b90b879ddcb6e7dd75263fdb6c8d2304ffdb27332afa8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
