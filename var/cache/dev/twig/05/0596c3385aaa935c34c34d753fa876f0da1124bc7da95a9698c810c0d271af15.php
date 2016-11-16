<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_3ef59b77a23a4e5002c6d7bf3e285f071dbc395b7dca75795ad0b3064f5042c1 extends Twig_Template
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
        $__internal_27f291d1ef6a85bbb831074eae42ff4f27a4bc88a05ff7d384bf692ad9c5022d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f291d1ef6a85bbb831074eae42ff4f27a4bc88a05ff7d384bf692ad9c5022d->enter($__internal_27f291d1ef6a85bbb831074eae42ff4f27a4bc88a05ff7d384bf692ad9c5022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_27f291d1ef6a85bbb831074eae42ff4f27a4bc88a05ff7d384bf692ad9c5022d->leave($__internal_27f291d1ef6a85bbb831074eae42ff4f27a4bc88a05ff7d384bf692ad9c5022d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
