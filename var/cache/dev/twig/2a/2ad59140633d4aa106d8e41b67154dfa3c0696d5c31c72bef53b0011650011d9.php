<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7421712a065817b351b2fd3ceb0f6b530f7dc6689f2f4ee143e76083a6cd2699 extends Twig_Template
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
        $__internal_a27953ce8be42d6521315afa5074883e1af07915a8c6080393f15afd9ec7150e = $this->env->getExtension("native_profiler");
        $__internal_a27953ce8be42d6521315afa5074883e1af07915a8c6080393f15afd9ec7150e->enter($__internal_a27953ce8be42d6521315afa5074883e1af07915a8c6080393f15afd9ec7150e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a27953ce8be42d6521315afa5074883e1af07915a8c6080393f15afd9ec7150e->leave($__internal_a27953ce8be42d6521315afa5074883e1af07915a8c6080393f15afd9ec7150e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
