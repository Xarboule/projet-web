<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_dae1575b923b5ad9e13e3025d4fcc4c596efb006d0f76ae17333de04d3798f66 extends Twig_Template
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
        $__internal_e599c3f7448e27a8ebbc75bbe23ce80f2f8be09e7c18768f9ec04fbdd101929b = $this->env->getExtension("native_profiler");
        $__internal_e599c3f7448e27a8ebbc75bbe23ce80f2f8be09e7c18768f9ec04fbdd101929b->enter($__internal_e599c3f7448e27a8ebbc75bbe23ce80f2f8be09e7c18768f9ec04fbdd101929b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e599c3f7448e27a8ebbc75bbe23ce80f2f8be09e7c18768f9ec04fbdd101929b->leave($__internal_e599c3f7448e27a8ebbc75bbe23ce80f2f8be09e7c18768f9ec04fbdd101929b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
