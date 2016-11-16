<?php

/* MMHStaticBundle:Contact:contact.html.twig */
class __TwigTemplate_a75d792cf42e7dd0946887df1b69c111934e8e1c73218a7fd40b5ee050fb447f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMHStaticBundle::staticlayout.html.twig", "MMHStaticBundle:Contact:contact.html.twig", 1);
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

    // line 9
    public function block_headtitle($context, array $blocks = array())
    {
        echo "Contacter nous";
    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        // line 12
        echo "<!--************************** MAIN CONTENT ********************************-->

<!-- General wrapper for the content -->
  <div class=\"wrapper-static-content flex\">

    <!-- Main section on the left with text and image content -->
    <section class=\"static-content-section\">
      <h2>Contacter MyMoneyHelp</h2>
      <p>Une question, un besoin d'information ou une requête à nous soumettre ?
      N'hésitez pas à nous contacter via le formulaire ci-dessous, nous vous répondrons
      dans les plus brefs délais.</p>      


";
    }

    public function getTemplateName()
    {
        return "MMHStaticBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  49 => 11,  43 => 9,  37 => 5,  31 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'MMHStaticBundle::staticlayout.html.twig' %}

{% block title %}My Money Help{% endblock %}

{% block metadescription %}Plateforme de financement participatif MyMoneyHelp{% endblock %}



{% block headtitle %}Contacter nous{% endblock %}

{% block section %}
<!--************************** MAIN CONTENT ********************************-->

<!-- General wrapper for the content -->
  <div class=\"wrapper-static-content flex\">

    <!-- Main section on the left with text and image content -->
    <section class=\"static-content-section\">
      <h2>Contacter MyMoneyHelp</h2>
      <p>Une question, un besoin d'information ou une requête à nous soumettre ?
      N'hésitez pas à nous contacter via le formulaire ci-dessous, nous vous répondrons
      dans les plus brefs délais.</p>      


{% endblock %}
";
    }
}
