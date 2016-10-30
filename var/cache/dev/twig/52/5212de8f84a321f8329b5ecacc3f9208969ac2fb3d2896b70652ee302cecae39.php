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
        $__internal_4ebb3aca29b071a7e7bfe17eb76ae37a4c626c1e07a16139df7fd6fbe1371a80 = $this->env->getExtension("native_profiler");
        $__internal_4ebb3aca29b071a7e7bfe17eb76ae37a4c626c1e07a16139df7fd6fbe1371a80->enter($__internal_4ebb3aca29b071a7e7bfe17eb76ae37a4c626c1e07a16139df7fd6fbe1371a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4ebb3aca29b071a7e7bfe17eb76ae37a4c626c1e07a16139df7fd6fbe1371a80->leave($__internal_4ebb3aca29b071a7e7bfe17eb76ae37a4c626c1e07a16139df7fd6fbe1371a80_prof);

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
