<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a37eb5ec77da5fa86ce5a6360e2944b5e92b0c03c5206697972c5daa02dba4e0 extends Twig_Template
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
        $__internal_e7610581ce6c07f00a32df4dcc47f528eb993d3440f9ddd9b853d124f4c58abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7610581ce6c07f00a32df4dcc47f528eb993d3440f9ddd9b853d124f4c58abb->enter($__internal_e7610581ce6c07f00a32df4dcc47f528eb993d3440f9ddd9b853d124f4c58abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e7610581ce6c07f00a32df4dcc47f528eb993d3440f9ddd9b853d124f4c58abb->leave($__internal_e7610581ce6c07f00a32df4dcc47f528eb993d3440f9ddd9b853d124f4c58abb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
