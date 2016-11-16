<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_5eee53bbb6f33e62c893572319bf5946e77692b4c0595776bab7f6031f14c6f0 extends Twig_Template
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
        $__internal_81d363d3a5e80340e7feb36ffd21a6596ee048a4e87f8cd869fe9bf289532aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d363d3a5e80340e7feb36ffd21a6596ee048a4e87f8cd869fe9bf289532aa9->enter($__internal_81d363d3a5e80340e7feb36ffd21a6596ee048a4e87f8cd869fe9bf289532aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_81d363d3a5e80340e7feb36ffd21a6596ee048a4e87f8cd869fe9bf289532aa9->leave($__internal_81d363d3a5e80340e7feb36ffd21a6596ee048a4e87f8cd869fe9bf289532aa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
