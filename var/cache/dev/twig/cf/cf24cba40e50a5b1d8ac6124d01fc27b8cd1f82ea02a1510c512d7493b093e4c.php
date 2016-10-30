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
        $__internal_d37859f238fb6af22478b92b74c6717d2a58b344b79f7f3bd8e51644d7f211a9 = $this->env->getExtension("native_profiler");
        $__internal_d37859f238fb6af22478b92b74c6717d2a58b344b79f7f3bd8e51644d7f211a9->enter($__internal_d37859f238fb6af22478b92b74c6717d2a58b344b79f7f3bd8e51644d7f211a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d37859f238fb6af22478b92b74c6717d2a58b344b79f7f3bd8e51644d7f211a9->leave($__internal_d37859f238fb6af22478b92b74c6717d2a58b344b79f7f3bd8e51644d7f211a9_prof);

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
