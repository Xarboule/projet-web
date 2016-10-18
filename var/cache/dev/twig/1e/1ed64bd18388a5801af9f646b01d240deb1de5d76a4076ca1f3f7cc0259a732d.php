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
        $__internal_cd17f3cc1492941631d7d0adc3499d601805d1b47172b7ff0c3e822e28ed661f = $this->env->getExtension("native_profiler");
        $__internal_cd17f3cc1492941631d7d0adc3499d601805d1b47172b7ff0c3e822e28ed661f->enter($__internal_cd17f3cc1492941631d7d0adc3499d601805d1b47172b7ff0c3e822e28ed661f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cd17f3cc1492941631d7d0adc3499d601805d1b47172b7ff0c3e822e28ed661f->leave($__internal_cd17f3cc1492941631d7d0adc3499d601805d1b47172b7ff0c3e822e28ed661f_prof);

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
