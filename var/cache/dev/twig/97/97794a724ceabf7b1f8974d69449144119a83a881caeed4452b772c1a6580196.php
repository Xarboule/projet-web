<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0d6e676e7082c5b69cc0a8663a391daefed4ed680e3fdb56fc297b3f0e84b212 extends Twig_Template
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
        $__internal_0b574edf6b92bfdc82d1774761570d3d9e1adf61fbd9b885ec50c8de3df6bec3 = $this->env->getExtension("native_profiler");
        $__internal_0b574edf6b92bfdc82d1774761570d3d9e1adf61fbd9b885ec50c8de3df6bec3->enter($__internal_0b574edf6b92bfdc82d1774761570d3d9e1adf61fbd9b885ec50c8de3df6bec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0b574edf6b92bfdc82d1774761570d3d9e1adf61fbd9b885ec50c8de3df6bec3->leave($__internal_0b574edf6b92bfdc82d1774761570d3d9e1adf61fbd9b885ec50c8de3df6bec3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
