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
        $__internal_519631e0469ad072d94b045d77c47af4f488afc1de2be0133e9157addea1798e = $this->env->getExtension("native_profiler");
        $__internal_519631e0469ad072d94b045d77c47af4f488afc1de2be0133e9157addea1798e->enter($__internal_519631e0469ad072d94b045d77c47af4f488afc1de2be0133e9157addea1798e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_519631e0469ad072d94b045d77c47af4f488afc1de2be0133e9157addea1798e->leave($__internal_519631e0469ad072d94b045d77c47af4f488afc1de2be0133e9157addea1798e_prof);

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
