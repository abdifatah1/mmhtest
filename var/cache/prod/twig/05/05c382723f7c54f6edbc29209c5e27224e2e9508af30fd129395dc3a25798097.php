<?php

/* MMHStaticBundle:Support:support.html.twig */
class __TwigTemplate_3823b8c91f6f730ed0c1707430e844b76dcc52841da2b4a00e17a992e3316677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMHStaticBundle::staticlayout.html.twig", "MMHStaticBundle:Support:support.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadescription' => array($this, 'block_metadescription'),
            'headtitle' => array($this, 'block_headtitle'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MMHStaticBundle::staticlayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "My Money Help";
    }

    // line 5
    public function block_metadescription($context, array $blocks = array())
    {
        echo "Plateforme de financement participatif MyMoneyHelp";
    }

    // line 7
    public function block_headtitle($context, array $blocks = array())
    {
        echo "Nous supporter";
    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        // line 10
        echo "
<!-- General wrapper for the content -->
<div class=\"wrapper-static-content flex\">

<!-- Main section on the left with text and image content -->
<section class=\"static-content-section\">
  <h2>Soutenir MyMoneyHelp</h2>
  <p>Notre plateforme est autonome et indépendante. Les frais de fonctionnement sont couverts très majoritairement par vos dons.<br><br>
      Alors aidez-nous à développer la plateforme MyMoneyHelp</p>
  <div class=\"contribute\">
      <a href=\"#\" class=\"button backup-button\">Faire un don</a>
  </div>

  <h2>Adhérer à MyMoneyHelp</h2>
  <p>MyMoneyHelp met en pratique le concept « d’Innovation frugale » et utilise des moyens très modestes pour faire fonctionner le site et organiser régulièrement des manifestations de soutien aux Entrepreneurs Sociaux et Solidaires<br><br>
      Si vous souhaitez régulièrement suivre et participer à nos manifestations n’hésitez pas à adhérer</p>

  <div class=\"contribute\">
      <a href=\"#\" class=\"button join-button\">Nous rejoindre</a>
  </div>

  ";
    }

    public function getTemplateName()
    {
        return "MMHStaticBundle:Support:support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  49 => 9,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'MMHStaticBundle::staticlayout.html.twig' %}

{% block title %}My Money Help{% endblock %}

{% block metadescription %}Plateforme de financement participatif MyMoneyHelp{% endblock %}

{% block headtitle %}Nous supporter{% endblock %}

{% block section %}

<!-- General wrapper for the content -->
<div class=\"wrapper-static-content flex\">

<!-- Main section on the left with text and image content -->
<section class=\"static-content-section\">
  <h2>Soutenir MyMoneyHelp</h2>
  <p>Notre plateforme est autonome et indépendante. Les frais de fonctionnement sont couverts très majoritairement par vos dons.<br><br>
      Alors aidez-nous à développer la plateforme MyMoneyHelp</p>
  <div class=\"contribute\">
      <a href=\"#\" class=\"button backup-button\">Faire un don</a>
  </div>

  <h2>Adhérer à MyMoneyHelp</h2>
  <p>MyMoneyHelp met en pratique le concept « d’Innovation frugale » et utilise des moyens très modestes pour faire fonctionner le site et organiser régulièrement des manifestations de soutien aux Entrepreneurs Sociaux et Solidaires<br><br>
      Si vous souhaitez régulièrement suivre et participer à nos manifestations n’hésitez pas à adhérer</p>

  <div class=\"contribute\">
      <a href=\"#\" class=\"button join-button\">Nous rejoindre</a>
  </div>

  {% endblock %}
";
    }
}
