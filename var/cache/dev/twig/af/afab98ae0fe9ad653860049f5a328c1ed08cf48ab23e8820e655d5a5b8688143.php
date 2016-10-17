<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6a5a3ef9143a1120db35604d6f8dfe731f5b7fb5ff2986424ba134bb021e0145 extends Twig_Template
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
        $__internal_1254be3c79abf0db92a46ec8e462eac038fabd5c3f736343eed1fa99d776512d = $this->env->getExtension("native_profiler");
        $__internal_1254be3c79abf0db92a46ec8e462eac038fabd5c3f736343eed1fa99d776512d->enter($__internal_1254be3c79abf0db92a46ec8e462eac038fabd5c3f736343eed1fa99d776512d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1254be3c79abf0db92a46ec8e462eac038fabd5c3f736343eed1fa99d776512d->leave($__internal_1254be3c79abf0db92a46ec8e462eac038fabd5c3f736343eed1fa99d776512d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
