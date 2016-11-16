<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bfa36e43b674b63b46bd27897c3057d50ed4a582b63a6b6901090f52cfeefac5 extends Twig_Template
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
        $__internal_c9683259f01a90c6f6a443f09ec87390fff86f92af156740c2c0b853362ba2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9683259f01a90c6f6a443f09ec87390fff86f92af156740c2c0b853362ba2f5->enter($__internal_c9683259f01a90c6f6a443f09ec87390fff86f92af156740c2c0b853362ba2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c9683259f01a90c6f6a443f09ec87390fff86f92af156740c2c0b853362ba2f5->leave($__internal_c9683259f01a90c6f6a443f09ec87390fff86f92af156740c2c0b853362ba2f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
