<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_01add2a9f8149298cde4cc1645c52eb684510089c75a5b05e0164ae28b4e1e29 extends Twig_Template
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
        $__internal_febdfffdc4ab070a8b5cfe92f14b27c2c423db16da5c9beecf9af91ab1cce6cc = $this->env->getExtension("native_profiler");
        $__internal_febdfffdc4ab070a8b5cfe92f14b27c2c423db16da5c9beecf9af91ab1cce6cc->enter($__internal_febdfffdc4ab070a8b5cfe92f14b27c2c423db16da5c9beecf9af91ab1cce6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_febdfffdc4ab070a8b5cfe92f14b27c2c423db16da5c9beecf9af91ab1cce6cc->leave($__internal_febdfffdc4ab070a8b5cfe92f14b27c2c423db16da5c9beecf9af91ab1cce6cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
