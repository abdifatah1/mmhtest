<?php

/* base.html.twig */
class __TwigTemplate_bb49f1be50092988a746c57cad539cd14ba35bd5796ff1f9cf49c36bb6aec96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_778792a4f25234ac6185f955738ee7706360a20a38679d826a8f6b2dc920ea73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778792a4f25234ac6185f955738ee7706360a20a38679d826a8f6b2dc920ea73->enter($__internal_778792a4f25234ac6185f955738ee7706360a20a38679d826a8f6b2dc920ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_778792a4f25234ac6185f955738ee7706360a20a38679d826a8f6b2dc920ea73->leave($__internal_778792a4f25234ac6185f955738ee7706360a20a38679d826a8f6b2dc920ea73_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_00f7254a4a6e5448c28506a2cc777cc165b54defa9ed9aabd38b7c8303b6c769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f7254a4a6e5448c28506a2cc777cc165b54defa9ed9aabd38b7c8303b6c769->enter($__internal_00f7254a4a6e5448c28506a2cc777cc165b54defa9ed9aabd38b7c8303b6c769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_00f7254a4a6e5448c28506a2cc777cc165b54defa9ed9aabd38b7c8303b6c769->leave($__internal_00f7254a4a6e5448c28506a2cc777cc165b54defa9ed9aabd38b7c8303b6c769_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f83f6325ab9779c80f3ce46e226e276f68e72e1d66802c1f2d8450c82acb4dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83f6325ab9779c80f3ce46e226e276f68e72e1d66802c1f2d8450c82acb4dd5->enter($__internal_f83f6325ab9779c80f3ce46e226e276f68e72e1d66802c1f2d8450c82acb4dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f83f6325ab9779c80f3ce46e226e276f68e72e1d66802c1f2d8450c82acb4dd5->leave($__internal_f83f6325ab9779c80f3ce46e226e276f68e72e1d66802c1f2d8450c82acb4dd5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_91889b547b4aa1f5739bffc82ad442053f62aad37ccc18285ffec4041239891f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91889b547b4aa1f5739bffc82ad442053f62aad37ccc18285ffec4041239891f->enter($__internal_91889b547b4aa1f5739bffc82ad442053f62aad37ccc18285ffec4041239891f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_91889b547b4aa1f5739bffc82ad442053f62aad37ccc18285ffec4041239891f->leave($__internal_91889b547b4aa1f5739bffc82ad442053f62aad37ccc18285ffec4041239891f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2bd5a9ab25532956c7aa7dea1228b46852f83d9f9fafb50c67d2012ed78d472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bd5a9ab25532956c7aa7dea1228b46852f83d9f9fafb50c67d2012ed78d472->enter($__internal_d2bd5a9ab25532956c7aa7dea1228b46852f83d9f9fafb50c67d2012ed78d472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_d2bd5a9ab25532956c7aa7dea1228b46852f83d9f9fafb50c67d2012ed78d472->leave($__internal_d2bd5a9ab25532956c7aa7dea1228b46852f83d9f9fafb50c67d2012ed78d472_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/MyMoneyHelp/app/Resources/views/base.html.twig");
    }
}
