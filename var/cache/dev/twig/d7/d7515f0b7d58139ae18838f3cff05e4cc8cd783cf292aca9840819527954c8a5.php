<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_42e50293f88b7fb39c1f4f96fbd6aec3a4c2d59ca20eecaab2ba886c4a603e5e extends Twig_Template
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
        $__internal_eb87dbcea282456da0baa20752cc2ea4c1340b905c20dd1b6fb7118c97388c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb87dbcea282456da0baa20752cc2ea4c1340b905c20dd1b6fb7118c97388c44->enter($__internal_eb87dbcea282456da0baa20752cc2ea4c1340b905c20dd1b6fb7118c97388c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_eb87dbcea282456da0baa20752cc2ea4c1340b905c20dd1b6fb7118c97388c44->leave($__internal_eb87dbcea282456da0baa20752cc2ea4c1340b905c20dd1b6fb7118c97388c44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
