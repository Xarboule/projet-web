<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b43043e64bbe41052e0e7e1bb2d99d51924aa1c56b0511e4380962632e3a18c9 extends Twig_Template
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
        $__internal_92c172ac98b266d19218b409ace185301e4c2a0205b2bfa84f5f7289d8af09eb = $this->env->getExtension("native_profiler");
        $__internal_92c172ac98b266d19218b409ace185301e4c2a0205b2bfa84f5f7289d8af09eb->enter($__internal_92c172ac98b266d19218b409ace185301e4c2a0205b2bfa84f5f7289d8af09eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_92c172ac98b266d19218b409ace185301e4c2a0205b2bfa84f5f7289d8af09eb->leave($__internal_92c172ac98b266d19218b409ace185301e4c2a0205b2bfa84f5f7289d8af09eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
