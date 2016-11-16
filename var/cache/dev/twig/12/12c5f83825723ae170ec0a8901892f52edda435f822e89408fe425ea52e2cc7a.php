<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3ee8a98f5081ffdfe70b68f5bc720f1cce39670d7bb07455cc3567df681a2592 extends Twig_Template
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
        $__internal_fd2224ab994f6608f2fd280ac2ef5f7e7dfe24079bc35582ae2b9d757f568ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2224ab994f6608f2fd280ac2ef5f7e7dfe24079bc35582ae2b9d757f568ee1->enter($__internal_fd2224ab994f6608f2fd280ac2ef5f7e7dfe24079bc35582ae2b9d757f568ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fd2224ab994f6608f2fd280ac2ef5f7e7dfe24079bc35582ae2b9d757f568ee1->leave($__internal_fd2224ab994f6608f2fd280ac2ef5f7e7dfe24079bc35582ae2b9d757f568ee1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
