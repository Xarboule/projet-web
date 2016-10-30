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
        $__internal_22f82b37a63bf70c040c8c1fe0c8dc1ab394f794a1474ae812a409d82bd3f31c = $this->env->getExtension("native_profiler");
        $__internal_22f82b37a63bf70c040c8c1fe0c8dc1ab394f794a1474ae812a409d82bd3f31c->enter($__internal_22f82b37a63bf70c040c8c1fe0c8dc1ab394f794a1474ae812a409d82bd3f31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_22f82b37a63bf70c040c8c1fe0c8dc1ab394f794a1474ae812a409d82bd3f31c->leave($__internal_22f82b37a63bf70c040c8c1fe0c8dc1ab394f794a1474ae812a409d82bd3f31c_prof);

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
