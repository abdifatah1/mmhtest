<?php

/* MMHStaticBundle:Mention:mention.html.twig */
class __TwigTemplate_d375f18b3ea7ffee52b9785ee9b752467ccd8370fde4be26a9b7a1389cd564d9 extends Twig_Template
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
        $__internal_81754e9c2322c38ac4fdf28a2684e6cc6668ef8b10ccb5cf0463f8398d2e4a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81754e9c2322c38ac4fdf28a2684e6cc6668ef8b10ccb5cf0463f8398d2e4a15->enter($__internal_81754e9c2322c38ac4fdf28a2684e6cc6668ef8b10ccb5cf0463f8398d2e4a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHStaticBundle:Mention:mention.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81754e9c2322c38ac4fdf28a2684e6cc6668ef8b10ccb5cf0463f8398d2e4a15->leave($__internal_81754e9c2322c38ac4fdf28a2684e6cc6668ef8b10ccb5cf0463f8398d2e4a15_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73048d0329d054d4c873f04ce990dbf58819cabd4a896e72eb99f4f5d80a39bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73048d0329d054d4c873f04ce990dbf58819cabd4a896e72eb99f4f5d80a39bd->enter($__internal_73048d0329d054d4c873f04ce990dbf58819cabd4a896e72eb99f4f5d80a39bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Mention:mention.html.twig"));

        echo "My Money Help";
        
        $__internal_73048d0329d054d4c873f04ce990dbf58819cabd4a896e72eb99f4f5d80a39bd->leave($__internal_73048d0329d054d4c873f04ce990dbf58819cabd4a896e72eb99f4f5d80a39bd_prof);

    }

    // line 5
    public function block_metadescription($context, array $blocks = array())
    {
        $__internal_b9c2f3f64a5c20b8374b340ca07b1ee3701fd704961436d7fc01f76686046153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c2f3f64a5c20b8374b340ca07b1ee3701fd704961436d7fc01f76686046153->enter($__internal_b9c2f3f64a5c20b8374b340ca07b1ee3701fd704961436d7fc01f76686046153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Mention:mention.html.twig"));

        echo "Plateforme de financement participatif MyMoneyHelp";
        
        $__internal_b9c2f3f64a5c20b8374b340ca07b1ee3701fd704961436d7fc01f76686046153->leave($__internal_b9c2f3f64a5c20b8374b340ca07b1ee3701fd704961436d7fc01f76686046153_prof);

    }

    // line 7
    public function block_headtitle($context, array $blocks = array())
    {
        $__internal_89ae455e6b4e2f7db736488c1ed36ece66b790d4134042b6a6ce46f55dee8637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ae455e6b4e2f7db736488c1ed36ece66b790d4134042b6a6ce46f55dee8637->enter($__internal_89ae455e6b4e2f7db736488c1ed36ece66b790d4134042b6a6ce46f55dee8637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Mention:mention.html.twig"));

        echo "Mentions légales";
        
        $__internal_89ae455e6b4e2f7db736488c1ed36ece66b790d4134042b6a6ce46f55dee8637->leave($__internal_89ae455e6b4e2f7db736488c1ed36ece66b790d4134042b6a6ce46f55dee8637_prof);

    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        $__internal_65d9a5fa8d63d03686be435609c51b4a79f66976f078333b986a99e7af0c876f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d9a5fa8d63d03686be435609c51b4a79f66976f078333b986a99e7af0c876f->enter($__internal_65d9a5fa8d63d03686be435609c51b4a79f66976f078333b986a99e7af0c876f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Mention:mention.html.twig"));

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
        
        $__internal_65d9a5fa8d63d03686be435609c51b4a79f66976f078333b986a99e7af0c876f->leave($__internal_65d9a5fa8d63d03686be435609c51b4a79f66976f078333b986a99e7af0c876f_prof);

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
        return array (  79 => 10,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MMHStaticBundle::staticlayout.html.twig' %}

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
", "MMHStaticBundle:Mention:mention.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/StaticBundle/Resources/views/Mention/mention.html.twig");
    }
}
