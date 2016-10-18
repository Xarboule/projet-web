<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fe18ed7221dce0f6ca430606e8753449d8dbf0dc4a22466ffc259e1769cc4ef7 extends Twig_Template
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
        $__internal_8ca6e0c7b83b022cc993dfdeac5b3f37673a3f73d54c9aacaeea476885ad64d7 = $this->env->getExtension("native_profiler");
        $__internal_8ca6e0c7b83b022cc993dfdeac5b3f37673a3f73d54c9aacaeea476885ad64d7->enter($__internal_8ca6e0c7b83b022cc993dfdeac5b3f37673a3f73d54c9aacaeea476885ad64d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8ca6e0c7b83b022cc993dfdeac5b3f37673a3f73d54c9aacaeea476885ad64d7->leave($__internal_8ca6e0c7b83b022cc993dfdeac5b3f37673a3f73d54c9aacaeea476885ad64d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
