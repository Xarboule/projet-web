<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_fe45d14e5eda2bb7171a6878dff36213cfceb162c44a88d4ba6771aab86a8175 extends Twig_Template
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
        $__internal_515c77442a0f9c6ee3a2fa3c2eebfe38e6f881e399829b723c3b3e72537a409b = $this->env->getExtension("native_profiler");
        $__internal_515c77442a0f9c6ee3a2fa3c2eebfe38e6f881e399829b723c3b3e72537a409b->enter($__internal_515c77442a0f9c6ee3a2fa3c2eebfe38e6f881e399829b723c3b3e72537a409b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_515c77442a0f9c6ee3a2fa3c2eebfe38e6f881e399829b723c3b3e72537a409b->leave($__internal_515c77442a0f9c6ee3a2fa3c2eebfe38e6f881e399829b723c3b3e72537a409b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
