<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_af3d85ee08c6033f69c30c885911e35822e94743f14e49826073282df35107ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8a9686279f5ab8b9642f034f87b7ca1789ca60a2dbd3d1bfe2216c104b1da33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a9686279f5ab8b9642f034f87b7ca1789ca60a2dbd3d1bfe2216c104b1da33->enter($__internal_e8a9686279f5ab8b9642f034f87b7ca1789ca60a2dbd3d1bfe2216c104b1da33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8a9686279f5ab8b9642f034f87b7ca1789ca60a2dbd3d1bfe2216c104b1da33->leave($__internal_e8a9686279f5ab8b9642f034f87b7ca1789ca60a2dbd3d1bfe2216c104b1da33_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9dfdba2b8dc1c03d92339f7882641d8680926b036e9d67539342d252902fa5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfdba2b8dc1c03d92339f7882641d8680926b036e9d67539342d252902fa5fd->enter($__internal_9dfdba2b8dc1c03d92339f7882641d8680926b036e9d67539342d252902fa5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9dfdba2b8dc1c03d92339f7882641d8680926b036e9d67539342d252902fa5fd->leave($__internal_9dfdba2b8dc1c03d92339f7882641d8680926b036e9d67539342d252902fa5fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40814a808cccfb900f7f1ad3e284854d8457de3ea2e77e441d1ed88be51cc565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40814a808cccfb900f7f1ad3e284854d8457de3ea2e77e441d1ed88be51cc565->enter($__internal_40814a808cccfb900f7f1ad3e284854d8457de3ea2e77e441d1ed88be51cc565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40814a808cccfb900f7f1ad3e284854d8457de3ea2e77e441d1ed88be51cc565->leave($__internal_40814a808cccfb900f7f1ad3e284854d8457de3ea2e77e441d1ed88be51cc565_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1fd06b7592e7ab4359f55b90eb0b73f92c93f7aa712072e707b45c1b02b3687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fd06b7592e7ab4359f55b90eb0b73f92c93f7aa712072e707b45c1b02b3687->enter($__internal_e1fd06b7592e7ab4359f55b90eb0b73f92c93f7aa712072e707b45c1b02b3687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e1fd06b7592e7ab4359f55b90eb0b73f92c93f7aa712072e707b45c1b02b3687->leave($__internal_e1fd06b7592e7ab4359f55b90eb0b73f92c93f7aa712072e707b45c1b02b3687_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
