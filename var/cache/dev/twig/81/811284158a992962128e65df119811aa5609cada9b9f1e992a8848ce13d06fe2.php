<?php

/* MMHStaticBundle:Submit:submit.html.twig */
class __TwigTemplate_cf48e04308750474989cf38460dbe3168c67b2df0f6805d72b1a5c9238bff184 extends Twig_Template
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
        $__internal_fb883df7c53e9817c106529961e1a25dc1eb9f81296b48571da726562cf927bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb883df7c53e9817c106529961e1a25dc1eb9f81296b48571da726562cf927bb->enter($__internal_fb883df7c53e9817c106529961e1a25dc1eb9f81296b48571da726562cf927bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHStaticBundle:Submit:submit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb883df7c53e9817c106529961e1a25dc1eb9f81296b48571da726562cf927bb->leave($__internal_fb883df7c53e9817c106529961e1a25dc1eb9f81296b48571da726562cf927bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3be0dd87c805bc4f9ebad8cbe8f68575bb53a6b11a03ec1327f55075bb46878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3be0dd87c805bc4f9ebad8cbe8f68575bb53a6b11a03ec1327f55075bb46878->enter($__internal_e3be0dd87c805bc4f9ebad8cbe8f68575bb53a6b11a03ec1327f55075bb46878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Submit:submit.html.twig"));

        echo "My Money Help";
        
        $__internal_e3be0dd87c805bc4f9ebad8cbe8f68575bb53a6b11a03ec1327f55075bb46878->leave($__internal_e3be0dd87c805bc4f9ebad8cbe8f68575bb53a6b11a03ec1327f55075bb46878_prof);

    }

    // line 5
    public function block_metadescription($context, array $blocks = array())
    {
        $__internal_6cc492e18431527420ef20dfa80e7c2fd0da51052a87568d585f56f23fc8780d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc492e18431527420ef20dfa80e7c2fd0da51052a87568d585f56f23fc8780d->enter($__internal_6cc492e18431527420ef20dfa80e7c2fd0da51052a87568d585f56f23fc8780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Submit:submit.html.twig"));

        echo "Plateforme de financement participatif MyMoneyHelp";
        
        $__internal_6cc492e18431527420ef20dfa80e7c2fd0da51052a87568d585f56f23fc8780d->leave($__internal_6cc492e18431527420ef20dfa80e7c2fd0da51052a87568d585f56f23fc8780d_prof);

    }

    // line 9
    public function block_headtitle($context, array $blocks = array())
    {
        $__internal_570b962dc89ee02affe4ee93c85f55cdad0389b0a8a6888ce58d99819f196a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570b962dc89ee02affe4ee93c85f55cdad0389b0a8a6888ce58d99819f196a6c->enter($__internal_570b962dc89ee02affe4ee93c85f55cdad0389b0a8a6888ce58d99819f196a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Submit:submit.html.twig"));

        echo "Soumettre un projet";
        
        $__internal_570b962dc89ee02affe4ee93c85f55cdad0389b0a8a6888ce58d99819f196a6c->leave($__internal_570b962dc89ee02affe4ee93c85f55cdad0389b0a8a6888ce58d99819f196a6c_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_eb886d2351093a59352662c0213d0aff784c2ed9056ccb9b133ccd77a6c78ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb886d2351093a59352662c0213d0aff784c2ed9056ccb9b133ccd77a6c78ed0->enter($__internal_eb886d2351093a59352662c0213d0aff784c2ed9056ccb9b133ccd77a6c78ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Submit:submit.html.twig"));

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
        
        $__internal_eb886d2351093a59352662c0213d0aff784c2ed9056ccb9b133ccd77a6c78ed0->leave($__internal_eb886d2351093a59352662c0213d0aff784c2ed9056ccb9b133ccd77a6c78ed0_prof);

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
        return array (  79 => 12,  73 => 11,  61 => 9,  49 => 5,  37 => 3,  11 => 1,);
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
", "MMHStaticBundle:Submit:submit.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/StaticBundle/Resources/views/Submit/submit.html.twig");
    }
}
