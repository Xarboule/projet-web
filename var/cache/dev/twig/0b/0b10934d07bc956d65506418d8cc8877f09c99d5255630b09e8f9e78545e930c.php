<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c57a630a71814c1b040825b4a62b82d8b35ab896261f68f728e4e88b098e3029 extends Twig_Template
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
        $__internal_5ca530fac17f0d3e15e72a3a80acf4700e67a2b1442cd7720628bf447f25f82a = $this->env->getExtension("native_profiler");
        $__internal_5ca530fac17f0d3e15e72a3a80acf4700e67a2b1442cd7720628bf447f25f82a->enter($__internal_5ca530fac17f0d3e15e72a3a80acf4700e67a2b1442cd7720628bf447f25f82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5ca530fac17f0d3e15e72a3a80acf4700e67a2b1442cd7720628bf447f25f82a->leave($__internal_5ca530fac17f0d3e15e72a3a80acf4700e67a2b1442cd7720628bf447f25f82a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
