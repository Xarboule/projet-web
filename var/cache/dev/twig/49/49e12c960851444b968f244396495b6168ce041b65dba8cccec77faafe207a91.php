<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_06e7d4c672ba78e469e8a6bc82d00895ae3ce9e5d27ad02d08a44a148eb9c65d extends Twig_Template
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
        $__internal_7eb2b0f2503a8d8f6512f1b8d88e479032183a96222602c17a2c220563bee39d = $this->env->getExtension("native_profiler");
        $__internal_7eb2b0f2503a8d8f6512f1b8d88e479032183a96222602c17a2c220563bee39d->enter($__internal_7eb2b0f2503a8d8f6512f1b8d88e479032183a96222602c17a2c220563bee39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7eb2b0f2503a8d8f6512f1b8d88e479032183a96222602c17a2c220563bee39d->leave($__internal_7eb2b0f2503a8d8f6512f1b8d88e479032183a96222602c17a2c220563bee39d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
