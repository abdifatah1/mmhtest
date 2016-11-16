<?php

/* MMHStaticBundle:Mention:mention.html.twig */
class __TwigTemplate_c42abb49997e80b5b5370d78a91bc18dbff69fe01698c3a014c088d82503f055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMHStaticBundle::staticlayout.html.twig", "MMHStaticBundle:Mention:mention.html.twig", 1);
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
        echo "Mentions légales";
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
    <h2>Informations légales à propos de MyMoneyHelp</h2>
    <p>En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site
        <a href=\"http://www.mymoneyhelp.fr\">http://www.mymoneyhelp.fr</a>
        l’identité des intervenants dans la réalisation et de son suivi :<br><br>
        Propriétaire : Association MyMoneyHelp – MDA – 72, rue Royale 59000 Lille. France<br><br>
        Concepteur : SiteProjet<br><br>
        Responsable publication : MyMoneyHelp<br><br>
        Hébergeur : OVH — 2 rue Kellermann BP 80157 59053 ROUBAIX Cedex
    </p>

";
    }

    public function getTemplateName()
    {
        return "MMHStaticBundle:Mention:mention.html.twig";
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

{% block headtitle %}Mentions légales{% endblock %}

{% block section %}

<!-- General wrapper for the content -->
<div class=\"wrapper-static-content flex\">
  <!-- Main section on the left with text and image content -->
  <section class=\"static-content-section\">
    <h2>Informations légales à propos de MyMoneyHelp</h2>
    <p>En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site
        <a href=\"http://www.mymoneyhelp.fr\">http://www.mymoneyhelp.fr</a>
        l’identité des intervenants dans la réalisation et de son suivi :<br><br>
        Propriétaire : Association MyMoneyHelp – MDA – 72, rue Royale 59000 Lille. France<br><br>
        Concepteur : SiteProjet<br><br>
        Responsable publication : MyMoneyHelp<br><br>
        Hébergeur : OVH — 2 rue Kellermann BP 80157 59053 ROUBAIX Cedex
    </p>

{% endblock %}
";
    }
}
