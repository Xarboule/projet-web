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
        $__internal_93550adda9b56a21dcec303c6e77a78c6c26da74be7203ee879bdb79fba139e5 = $this->env->getExtension("native_profiler");
        $__internal_93550adda9b56a21dcec303c6e77a78c6c26da74be7203ee879bdb79fba139e5->enter($__internal_93550adda9b56a21dcec303c6e77a78c6c26da74be7203ee879bdb79fba139e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_93550adda9b56a21dcec303c6e77a78c6c26da74be7203ee879bdb79fba139e5->leave($__internal_93550adda9b56a21dcec303c6e77a78c6c26da74be7203ee879bdb79fba139e5_prof);

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
