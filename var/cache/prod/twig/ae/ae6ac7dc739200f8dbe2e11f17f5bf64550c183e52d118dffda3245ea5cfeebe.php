<?php

/* MMHStaticBundle:Submit:submit.html.twig */
class __TwigTemplate_6252555bd7a84a96757b4c0ffbf5a85bb73ac137b7a6c624bb5bf38fb9b38154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMHStaticBundle::staticlayout.html.twig", "MMHStaticBundle:Submit:submit.html.twig", 1);
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
        echo "Soumettre un projet";
    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        // line 12
        echo "
<!-- General wrapper for the content -->
  <div class=\"wrapper-static-content flex\">

    <!-- Main section on the left with text and image content -->
    <section class=\"static-content-section\">
      <h2>Déposer votre projet en quelques clics</h2>
      <p>MyMoneyHelp met en ligne votre projet en deux 2 étapes. C’est simple et rapide.</p>
      <h3>1. Dépôt et étude de votre projet</h3>
      <p>Notre comité des projets étudie attentivement tous les projets que nous recevons et une réponse vous sera apportée sous 2
        semaines à compter du dépôt de votre projet. Si votre projet est retenu, vous recevrez une demande d’accord pour la mise
        en ligne de votre projet.</p>
      <h3>2. Mise en ligne de votre projet</h3>
      <p>Dès que nous aurons réceptionné votre accord, notre équipe se chargera de mettre en ligne votre projet et de vous mettre à
        disposition nos services d’accompagnement si besoin.</p>

      <h2>Formulaire de dépôt</h2>
      <p>Pour adresser votre projet à notre comité de projets, remplissez les champs ci-dessous et joignez votre fichier.
        Notre équipe vous recontactera dans les meilleurs délais. Attention : Les informations que vous nous communiquez ne sont
        pas transmises à nos partenaires ou à d’autres entreprises.</p>

";
    }

    public function getTemplateName()
    {
        return "MMHStaticBundle:Submit:submit.html.twig";
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



{% block headtitle %}Soumettre un projet{% endblock %}

{% block section %}

<!-- General wrapper for the content -->
  <div class=\"wrapper-static-content flex\">

    <!-- Main section on the left with text and image content -->
    <section class=\"static-content-section\">
      <h2>Déposer votre projet en quelques clics</h2>
      <p>MyMoneyHelp met en ligne votre projet en deux 2 étapes. C’est simple et rapide.</p>
      <h3>1. Dépôt et étude de votre projet</h3>
      <p>Notre comité des projets étudie attentivement tous les projets que nous recevons et une réponse vous sera apportée sous 2
        semaines à compter du dépôt de votre projet. Si votre projet est retenu, vous recevrez une demande d’accord pour la mise
        en ligne de votre projet.</p>
      <h3>2. Mise en ligne de votre projet</h3>
      <p>Dès que nous aurons réceptionné votre accord, notre équipe se chargera de mettre en ligne votre projet et de vous mettre à
        disposition nos services d’accompagnement si besoin.</p>

      <h2>Formulaire de dépôt</h2>
      <p>Pour adresser votre projet à notre comité de projets, remplissez les champs ci-dessous et joignez votre fichier.
        Notre équipe vous recontactera dans les meilleurs délais. Attention : Les informations que vous nous communiquez ne sont
        pas transmises à nos partenaires ou à d’autres entreprises.</p>

{% endblock %}
";
    }
}
