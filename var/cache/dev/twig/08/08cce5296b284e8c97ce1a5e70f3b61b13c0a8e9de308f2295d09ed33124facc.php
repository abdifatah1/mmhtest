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
        $__internal_e68c21271a65a7d569d43e2d12577ac64af7421261d235cac09aaa0383bdc372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68c21271a65a7d569d43e2d12577ac64af7421261d235cac09aaa0383bdc372->enter($__internal_e68c21271a65a7d569d43e2d12577ac64af7421261d235cac09aaa0383bdc372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHSiteBundle:Projet:projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e68c21271a65a7d569d43e2d12577ac64af7421261d235cac09aaa0383bdc372->leave($__internal_e68c21271a65a7d569d43e2d12577ac64af7421261d235cac09aaa0383bdc372_prof);

    }

    // line 2
    public function block_section($context, array $blocks = array())
    {
        $__internal_ad86afe14a77a8076396e9dd92a7abac7475d08b8832490ee6eb5079499cbc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad86afe14a77a8076396e9dd92a7abac7475d08b8832490ee6eb5079499cbc7c->enter($__internal_ad86afe14a77a8076396e9dd92a7abac7475d08b8832490ee6eb5079499cbc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle:Projet:projet.html.twig"));

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
        
        $__internal_ad86afe14a77a8076396e9dd92a7abac7475d08b8832490ee6eb5079499cbc7c->leave($__internal_ad86afe14a77a8076396e9dd92a7abac7475d08b8832490ee6eb5079499cbc7c_prof);

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
