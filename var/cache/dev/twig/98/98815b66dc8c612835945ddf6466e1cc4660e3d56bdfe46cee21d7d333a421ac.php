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
        $__internal_247924566b4583241e26c72ff72dc5b635a0b6611d8f16fb7b4280e06d6dc925 = $this->env->getExtension("native_profiler");
        $__internal_247924566b4583241e26c72ff72dc5b635a0b6611d8f16fb7b4280e06d6dc925->enter($__internal_247924566b4583241e26c72ff72dc5b635a0b6611d8f16fb7b4280e06d6dc925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_247924566b4583241e26c72ff72dc5b635a0b6611d8f16fb7b4280e06d6dc925->leave($__internal_247924566b4583241e26c72ff72dc5b635a0b6611d8f16fb7b4280e06d6dc925_prof);

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
