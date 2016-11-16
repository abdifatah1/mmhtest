<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_fc4a9d2ebbcf1cf3f028fe84ffdb505357567da08cd844221afc251b1282afec extends Twig_Template
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
        $__internal_295b2e420ec2ab222ca9603174074fedd6250217d7d4deab88f86afda91ccba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295b2e420ec2ab222ca9603174074fedd6250217d7d4deab88f86afda91ccba0->enter($__internal_295b2e420ec2ab222ca9603174074fedd6250217d7d4deab88f86afda91ccba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_295b2e420ec2ab222ca9603174074fedd6250217d7d4deab88f86afda91ccba0->leave($__internal_295b2e420ec2ab222ca9603174074fedd6250217d7d4deab88f86afda91ccba0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
