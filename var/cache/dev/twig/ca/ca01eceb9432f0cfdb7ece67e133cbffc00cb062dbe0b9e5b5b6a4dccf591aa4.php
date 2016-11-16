<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d101b9eae960e3380d0bdccd88a01fba1761d475f1b86ca50603f8e243990c58 extends Twig_Template
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
        $__internal_00001aeaa013e50d1f4c7c34264fe4913c9e3509228fb040c015e5f0694fd1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00001aeaa013e50d1f4c7c34264fe4913c9e3509228fb040c015e5f0694fd1b2->enter($__internal_00001aeaa013e50d1f4c7c34264fe4913c9e3509228fb040c015e5f0694fd1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_00001aeaa013e50d1f4c7c34264fe4913c9e3509228fb040c015e5f0694fd1b2->leave($__internal_00001aeaa013e50d1f4c7c34264fe4913c9e3509228fb040c015e5f0694fd1b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
