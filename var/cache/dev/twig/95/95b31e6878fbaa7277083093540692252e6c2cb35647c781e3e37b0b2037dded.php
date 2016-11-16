<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4065cfa8b2d4d749b0c68565a77d9d4943cee24f166b0b533f921b9c0ed2b368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_4b41ba2d6cd33ce4802f16b88fb5cbba5834d2661cb9495f8ed17eacf1959b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b41ba2d6cd33ce4802f16b88fb5cbba5834d2661cb9495f8ed17eacf1959b68->enter($__internal_4b41ba2d6cd33ce4802f16b88fb5cbba5834d2661cb9495f8ed17eacf1959b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b41ba2d6cd33ce4802f16b88fb5cbba5834d2661cb9495f8ed17eacf1959b68->leave($__internal_4b41ba2d6cd33ce4802f16b88fb5cbba5834d2661cb9495f8ed17eacf1959b68_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d2aaf8cfcbea4a847360421b4854ca6ab4f494de11b448ff084553e5f4a4fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2aaf8cfcbea4a847360421b4854ca6ab4f494de11b448ff084553e5f4a4fcc->enter($__internal_8d2aaf8cfcbea4a847360421b4854ca6ab4f494de11b448ff084553e5f4a4fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_8d2aaf8cfcbea4a847360421b4854ca6ab4f494de11b448ff084553e5f4a4fcc->leave($__internal_8d2aaf8cfcbea4a847360421b4854ca6ab4f494de11b448ff084553e5f4a4fcc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9415551153e552c99e25de130df54cb70ef958a88d7a2b434740a5d334368b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9415551153e552c99e25de130df54cb70ef958a88d7a2b434740a5d334368b9e->enter($__internal_9415551153e552c99e25de130df54cb70ef958a88d7a2b434740a5d334368b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9415551153e552c99e25de130df54cb70ef958a88d7a2b434740a5d334368b9e->leave($__internal_9415551153e552c99e25de130df54cb70ef958a88d7a2b434740a5d334368b9e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e9ba77b08a61b339e96f5af816cf6238820d4ee7284a20ee7e65324336179e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9ba77b08a61b339e96f5af816cf6238820d4ee7284a20ee7e65324336179e1->enter($__internal_3e9ba77b08a61b339e96f5af816cf6238820d4ee7284a20ee7e65324336179e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e9ba77b08a61b339e96f5af816cf6238820d4ee7284a20ee7e65324336179e1->leave($__internal_3e9ba77b08a61b339e96f5af816cf6238820d4ee7284a20ee7e65324336179e1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
