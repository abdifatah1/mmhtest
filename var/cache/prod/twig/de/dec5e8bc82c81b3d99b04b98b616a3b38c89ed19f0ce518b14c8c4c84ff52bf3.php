<?php

/* MMHStaticBundle:Blog:blog.html.twig */
class __TwigTemplate_743aacb192630082c84044406a26baf8f900c11bd51c78a5e96c2ed8ebb2843b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMHStaticBundle::staticlayout.html.twig", "MMHStaticBundle:Blog:blog.html.twig", 1);
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
    <h2 id=\"blog-title\">Le financement participatif solidaire en France : les raisons du boom</h2>
    <img src=\"img/content/Telethon.jpg\" alt=\"\" class=\"static-image blog-image\">
    <p>Texte complet d'article</p>

";
    }

    public function getTemplateName()
    {
        return "MMHStaticBundle:Blog:blog.html.twig";
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
    <h2 id=\"blog-title\">Le financement participatif solidaire en France : les raisons du boom</h2>
    <img src=\"img/content/Telethon.jpg\" alt=\"\" class=\"static-image blog-image\">
    <p>Texte complet d'article</p>

{% endblock %}
";
    }
}
