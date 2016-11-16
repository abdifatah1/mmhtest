<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_31a8726e15de25f663aa939d97b0d8b6110afdda8eb7ff074a6fc98f9c7b5239 extends Twig_Template
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
        $__internal_e9e2c592d0a0dfe39ded5442c90e7ee95a563e4cf3e02b5cd3dd1fed522db097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e2c592d0a0dfe39ded5442c90e7ee95a563e4cf3e02b5cd3dd1fed522db097->enter($__internal_e9e2c592d0a0dfe39ded5442c90e7ee95a563e4cf3e02b5cd3dd1fed522db097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e9e2c592d0a0dfe39ded5442c90e7ee95a563e4cf3e02b5cd3dd1fed522db097->leave($__internal_e9e2c592d0a0dfe39ded5442c90e7ee95a563e4cf3e02b5cd3dd1fed522db097_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
