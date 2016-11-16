<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_698fa2eb67e653330663133a4b7be5c5e21af5f075ce9405e02ca3d8ce0ff5b4 extends Twig_Template
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
        $__internal_c917f39c1015e8e5b6b22b92d6772d7a73da4f8fbfd279e7e36218dddddcd759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c917f39c1015e8e5b6b22b92d6772d7a73da4f8fbfd279e7e36218dddddcd759->enter($__internal_c917f39c1015e8e5b6b22b92d6772d7a73da4f8fbfd279e7e36218dddddcd759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c917f39c1015e8e5b6b22b92d6772d7a73da4f8fbfd279e7e36218dddddcd759->leave($__internal_c917f39c1015e8e5b6b22b92d6772d7a73da4f8fbfd279e7e36218dddddcd759_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
