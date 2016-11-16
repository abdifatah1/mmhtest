<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5662ae1302863aa4d2bfdcf98c041c8ba3685afadc03d7e050b0a990dabc2b52 extends Twig_Template
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
        $__internal_bd8abf98ee0bc223c6f0d2d08d164b77d58755875d6883146de65481e74e1d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8abf98ee0bc223c6f0d2d08d164b77d58755875d6883146de65481e74e1d4c->enter($__internal_bd8abf98ee0bc223c6f0d2d08d164b77d58755875d6883146de65481e74e1d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bd8abf98ee0bc223c6f0d2d08d164b77d58755875d6883146de65481e74e1d4c->leave($__internal_bd8abf98ee0bc223c6f0d2d08d164b77d58755875d6883146de65481e74e1d4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
