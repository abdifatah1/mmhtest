<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9850ffc3315f27da98e6ce919ec12a6c70539e1a975178a7d7b08795ebd1a76c extends Twig_Template
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
        $__internal_f199b1b1eed34101a271516333ac3463446e396aa57c3d6d4788577c0d4062ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f199b1b1eed34101a271516333ac3463446e396aa57c3d6d4788577c0d4062ba->enter($__internal_f199b1b1eed34101a271516333ac3463446e396aa57c3d6d4788577c0d4062ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f199b1b1eed34101a271516333ac3463446e396aa57c3d6d4788577c0d4062ba->leave($__internal_f199b1b1eed34101a271516333ac3463446e396aa57c3d6d4788577c0d4062ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
