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
        $__internal_32ebcb3d74d02b56ff08c2e585df4372f7c3afbb6746826b11be602cb4bec28d = $this->env->getExtension("native_profiler");
        $__internal_32ebcb3d74d02b56ff08c2e585df4372f7c3afbb6746826b11be602cb4bec28d->enter($__internal_32ebcb3d74d02b56ff08c2e585df4372f7c3afbb6746826b11be602cb4bec28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_32ebcb3d74d02b56ff08c2e585df4372f7c3afbb6746826b11be602cb4bec28d->leave($__internal_32ebcb3d74d02b56ff08c2e585df4372f7c3afbb6746826b11be602cb4bec28d_prof);

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
