<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7cfdfb8aafc41d01ee3d87db523fb4bdf06977f367b6707cec539ed90c6150cf extends Twig_Template
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
        $__internal_0bf5a7e5e3467e70ba9cd17510c1985a9dd1478f53b0ac476ec579c537730b7a = $this->env->getExtension("native_profiler");
        $__internal_0bf5a7e5e3467e70ba9cd17510c1985a9dd1478f53b0ac476ec579c537730b7a->enter($__internal_0bf5a7e5e3467e70ba9cd17510c1985a9dd1478f53b0ac476ec579c537730b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0bf5a7e5e3467e70ba9cd17510c1985a9dd1478f53b0ac476ec579c537730b7a->leave($__internal_0bf5a7e5e3467e70ba9cd17510c1985a9dd1478f53b0ac476ec579c537730b7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
