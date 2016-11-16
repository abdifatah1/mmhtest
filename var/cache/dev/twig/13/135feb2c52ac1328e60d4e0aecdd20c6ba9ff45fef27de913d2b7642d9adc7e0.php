<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1c3621bbefc570fa1cd3457bfde7b68cdc8bca6b0a586683183472e705166d0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff040455e74fa37890d32596cf2127cfddc0d8f0bc9e1b443a5c43723829e4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff040455e74fa37890d32596cf2127cfddc0d8f0bc9e1b443a5c43723829e4da->enter($__internal_ff040455e74fa37890d32596cf2127cfddc0d8f0bc9e1b443a5c43723829e4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff040455e74fa37890d32596cf2127cfddc0d8f0bc9e1b443a5c43723829e4da->leave($__internal_ff040455e74fa37890d32596cf2127cfddc0d8f0bc9e1b443a5c43723829e4da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e16e2dc46b15dfc2673d12323bcac712440f8a8928017e175b5f96b624df8a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16e2dc46b15dfc2673d12323bcac712440f8a8928017e175b5f96b624df8a61->enter($__internal_e16e2dc46b15dfc2673d12323bcac712440f8a8928017e175b5f96b624df8a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_e16e2dc46b15dfc2673d12323bcac712440f8a8928017e175b5f96b624df8a61->leave($__internal_e16e2dc46b15dfc2673d12323bcac712440f8a8928017e175b5f96b624df8a61_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fad33c3f1120ad7acdb13f59b545aff0cd71412c0ba33a06584046ebc3c2f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fad33c3f1120ad7acdb13f59b545aff0cd71412c0ba33a06584046ebc3c2f6f->enter($__internal_7fad33c3f1120ad7acdb13f59b545aff0cd71412c0ba33a06584046ebc3c2f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7fad33c3f1120ad7acdb13f59b545aff0cd71412c0ba33a06584046ebc3c2f6f->leave($__internal_7fad33c3f1120ad7acdb13f59b545aff0cd71412c0ba33a06584046ebc3c2f6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27641a2ae45cc2316e3a657c1b2d92717a9ef3318c31384b0c6f19f1fb17a193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27641a2ae45cc2316e3a657c1b2d92717a9ef3318c31384b0c6f19f1fb17a193->enter($__internal_27641a2ae45cc2316e3a657c1b2d92717a9ef3318c31384b0c6f19f1fb17a193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27641a2ae45cc2316e3a657c1b2d92717a9ef3318c31384b0c6f19f1fb17a193->leave($__internal_27641a2ae45cc2316e3a657c1b2d92717a9ef3318c31384b0c6f19f1fb17a193_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
