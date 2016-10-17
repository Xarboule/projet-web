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
        $__internal_883a29a5d21ff282ec1d6795b0998453afae0ad4ce7dc46aa6bedb35b55385e8 = $this->env->getExtension("native_profiler");
        $__internal_883a29a5d21ff282ec1d6795b0998453afae0ad4ce7dc46aa6bedb35b55385e8->enter($__internal_883a29a5d21ff282ec1d6795b0998453afae0ad4ce7dc46aa6bedb35b55385e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_883a29a5d21ff282ec1d6795b0998453afae0ad4ce7dc46aa6bedb35b55385e8->leave($__internal_883a29a5d21ff282ec1d6795b0998453afae0ad4ce7dc46aa6bedb35b55385e8_prof);

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
