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
        $__internal_92c7086c9fbcd5242530c9f6b93d9eadb02937779e039ec1999ca32caf0e4597 = $this->env->getExtension("native_profiler");
        $__internal_92c7086c9fbcd5242530c9f6b93d9eadb02937779e039ec1999ca32caf0e4597->enter($__internal_92c7086c9fbcd5242530c9f6b93d9eadb02937779e039ec1999ca32caf0e4597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_92c7086c9fbcd5242530c9f6b93d9eadb02937779e039ec1999ca32caf0e4597->leave($__internal_92c7086c9fbcd5242530c9f6b93d9eadb02937779e039ec1999ca32caf0e4597_prof);

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
