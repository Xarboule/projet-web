<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_086837131ebd392bb32f38efd00fa8e9b8ac1d21693f2a8937c3d81d13b3d80e extends Twig_Template
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
        $__internal_02d374aacf41c21ae8d4b37561193f93d75fb65fc4cd02c995cb9d909436b867 = $this->env->getExtension("native_profiler");
        $__internal_02d374aacf41c21ae8d4b37561193f93d75fb65fc4cd02c995cb9d909436b867->enter($__internal_02d374aacf41c21ae8d4b37561193f93d75fb65fc4cd02c995cb9d909436b867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_02d374aacf41c21ae8d4b37561193f93d75fb65fc4cd02c995cb9d909436b867->leave($__internal_02d374aacf41c21ae8d4b37561193f93d75fb65fc4cd02c995cb9d909436b867_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
