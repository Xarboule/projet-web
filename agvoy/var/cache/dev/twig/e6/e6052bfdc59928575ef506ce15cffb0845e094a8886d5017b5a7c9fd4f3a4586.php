<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b05c06948b3f7b10218ba1c950f67f1b4c63535e5ce0702b2e8aa9aa8d21ca32 extends Twig_Template
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
        $__internal_f81bc51bf88cc9c63fbd993020c43bf886b469db38edec49a6abfe386dedeec5 = $this->env->getExtension("native_profiler");
        $__internal_f81bc51bf88cc9c63fbd993020c43bf886b469db38edec49a6abfe386dedeec5->enter($__internal_f81bc51bf88cc9c63fbd993020c43bf886b469db38edec49a6abfe386dedeec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f81bc51bf88cc9c63fbd993020c43bf886b469db38edec49a6abfe386dedeec5->leave($__internal_f81bc51bf88cc9c63fbd993020c43bf886b469db38edec49a6abfe386dedeec5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
