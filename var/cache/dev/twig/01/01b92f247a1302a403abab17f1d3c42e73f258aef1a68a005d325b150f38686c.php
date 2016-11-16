<?php

/* MMHSiteBundle:Projet:projet.html.twig */
class __TwigTemplate_cbe7f62de2b18e5993a7982b65977b47b745e4633bcc8d6ea19e0181341ff1c7 extends Twig_Template
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
        $__internal_7f2aab95330d5a1d6f6d4729124f0161b5aa34cea869b18ad44737f4f6d83fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2aab95330d5a1d6f6d4729124f0161b5aa34cea869b18ad44737f4f6d83fdf->enter($__internal_7f2aab95330d5a1d6f6d4729124f0161b5aa34cea869b18ad44737f4f6d83fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHSiteBundle:Projet:projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f2aab95330d5a1d6f6d4729124f0161b5aa34cea869b18ad44737f4f6d83fdf->leave($__internal_7f2aab95330d5a1d6f6d4729124f0161b5aa34cea869b18ad44737f4f6d83fdf_prof);

    }

    // line 2
    public function block_section($context, array $blocks = array())
    {
        $__internal_7865a38e642098edc66f212533fa4a7dd2be927d39672c0f502aeafd76f8b1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7865a38e642098edc66f212533fa4a7dd2be927d39672c0f502aeafd76f8b1b8->enter($__internal_7865a38e642098edc66f212533fa4a7dd2be927d39672c0f502aeafd76f8b1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle:Projet:projet.html.twig"));

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
        
        $__internal_7865a38e642098edc66f212533fa4a7dd2be927d39672c0f502aeafd76f8b1b8->leave($__internal_7865a38e642098edc66f212533fa4a7dd2be927d39672c0f502aeafd76f8b1b8_prof);

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
