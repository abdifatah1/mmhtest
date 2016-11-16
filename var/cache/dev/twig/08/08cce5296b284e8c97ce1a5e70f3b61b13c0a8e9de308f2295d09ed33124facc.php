<?php

/* MMHSiteBundle:Projet:projet.html.twig */
class __TwigTemplate_9cfc0c34222ba0353149a09d261801959a36a28bf6377676b3864d41d9252c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMHSiteBundle::projetlayout.html.twig", "MMHSiteBundle:Projet:projet.html.twig", 1);
        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MMHSiteBundle::projetlayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a77831c3d2a52619a2ca72af231b351a9d7fcc922e9e7761e9c52f5c15986fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a77831c3d2a52619a2ca72af231b351a9d7fcc922e9e7761e9c52f5c15986fc->enter($__internal_2a77831c3d2a52619a2ca72af231b351a9d7fcc922e9e7761e9c52f5c15986fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHSiteBundle:Projet:projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a77831c3d2a52619a2ca72af231b351a9d7fcc922e9e7761e9c52f5c15986fc->leave($__internal_2a77831c3d2a52619a2ca72af231b351a9d7fcc922e9e7761e9c52f5c15986fc_prof);

    }

    // line 2
    public function block_section($context, array $blocks = array())
    {
        $__internal_cb702f63ecb65fbcc6d8211a5d026aa677be344a2e1e9ea073a7c0e9aada223f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb702f63ecb65fbcc6d8211a5d026aa677be344a2e1e9ea073a7c0e9aada223f->enter($__internal_cb702f63ecb65fbcc6d8211a5d026aa677be344a2e1e9ea073a7c0e9aada223f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle:Projet:projet.html.twig"));

        // line 3
        echo "
<!-- more  project details with image -->
<div class=\"wrap\">
  <section class=\"first-wrap\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["project"]);
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 8
            echo "    <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "</h3>
    <div class=\"first-wrap-p\">
      <img class=\"maxwidth\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/projets/Waterwood.jpg"), "html", null, true);
            echo "\">
      <p>
        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "text", array()), "html", null, true);
            echo "
      </p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
  </section>
";
        
        $__internal_cb702f63ecb65fbcc6d8211a5d026aa677be344a2e1e9ea073a7c0e9aada223f->leave($__internal_cb702f63ecb65fbcc6d8211a5d026aa677be344a2e1e9ea073a7c0e9aada223f_prof);

    }

    public function getTemplateName()
    {
        return "MMHSiteBundle:Projet:projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  61 => 12,  56 => 10,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MMHSiteBundle::projetlayout.html.twig' %}
{% block section %}

<!-- more  project details with image -->
<div class=\"wrap\">
  <section class=\"first-wrap\">
    {% for project in project %}
    <h3>{{project.title}}</h3>
    <div class=\"first-wrap-p\">
      <img class=\"maxwidth\" src=\"{{ asset('bundles/mmhsite/img/projets/Waterwood.jpg') }}\">
      <p>
        {{project.text}}
      </p>
      {% endfor %}
    </div>
  </section>
{% endblock %}
", "MMHSiteBundle:Projet:projet.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/SiteBundle/Resources/views/Projet/projet.html.twig");
    }
}
