<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_65a40ebe7edec5d06ce94549151fabffb43664db6194a915f99b7dd7a7ebbcdc extends Twig_Template
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
        $__internal_8455df974bfbec4871f0bce9b99be43c827dcad7cfda1ade70758ff6910dd899 = $this->env->getExtension("native_profiler");
        $__internal_8455df974bfbec4871f0bce9b99be43c827dcad7cfda1ade70758ff6910dd899->enter($__internal_8455df974bfbec4871f0bce9b99be43c827dcad7cfda1ade70758ff6910dd899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8455df974bfbec4871f0bce9b99be43c827dcad7cfda1ade70758ff6910dd899->leave($__internal_8455df974bfbec4871f0bce9b99be43c827dcad7cfda1ade70758ff6910dd899_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
