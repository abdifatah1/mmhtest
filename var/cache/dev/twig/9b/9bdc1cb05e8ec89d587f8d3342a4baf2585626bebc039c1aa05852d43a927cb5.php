<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bba3b7a847594f447dda20519de2fbe97cf3961f810d64c96a66137287df8ceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3cba447f7650ab213a5e873b41ee6dd95925f28a8666ebfd5d019d9bd3f087a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cba447f7650ab213a5e873b41ee6dd95925f28a8666ebfd5d019d9bd3f087a8->enter($__internal_3cba447f7650ab213a5e873b41ee6dd95925f28a8666ebfd5d019d9bd3f087a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cba447f7650ab213a5e873b41ee6dd95925f28a8666ebfd5d019d9bd3f087a8->leave($__internal_3cba447f7650ab213a5e873b41ee6dd95925f28a8666ebfd5d019d9bd3f087a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e74a439a8739342e3b81d99f201e8b7f2d5b597ea8777378094c71511d2624c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74a439a8739342e3b81d99f201e8b7f2d5b597ea8777378094c71511d2624c1->enter($__internal_e74a439a8739342e3b81d99f201e8b7f2d5b597ea8777378094c71511d2624c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_e74a439a8739342e3b81d99f201e8b7f2d5b597ea8777378094c71511d2624c1->leave($__internal_e74a439a8739342e3b81d99f201e8b7f2d5b597ea8777378094c71511d2624c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_78b52b687a93630a694c03d605be024f94b7e495f6c296ae8e18fe826f919b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b52b687a93630a694c03d605be024f94b7e495f6c296ae8e18fe826f919b60->enter($__internal_78b52b687a93630a694c03d605be024f94b7e495f6c296ae8e18fe826f919b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_78b52b687a93630a694c03d605be024f94b7e495f6c296ae8e18fe826f919b60->leave($__internal_78b52b687a93630a694c03d605be024f94b7e495f6c296ae8e18fe826f919b60_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/MyMoneyHelp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
