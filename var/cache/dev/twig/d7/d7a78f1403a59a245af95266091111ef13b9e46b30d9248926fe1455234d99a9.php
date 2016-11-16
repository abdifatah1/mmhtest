<?php

/* MMHStaticBundle:Contact:contact.html.twig */
class __TwigTemplate_52471220f0796236d20811a274878cfdb6db4ec58a05e871a504b42a1d978b7b extends Twig_Template
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
        $__internal_cc6ed5e4d8edf191b39e6c0ece1329a11e76c6fccc3868923fde784d7fa94f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6ed5e4d8edf191b39e6c0ece1329a11e76c6fccc3868923fde784d7fa94f91->enter($__internal_cc6ed5e4d8edf191b39e6c0ece1329a11e76c6fccc3868923fde784d7fa94f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHStaticBundle:Contact:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc6ed5e4d8edf191b39e6c0ece1329a11e76c6fccc3868923fde784d7fa94f91->leave($__internal_cc6ed5e4d8edf191b39e6c0ece1329a11e76c6fccc3868923fde784d7fa94f91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3186c1f1bd305df18845ca0667e936d198dee61b2fb2900bb5d2b2f50c10f581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3186c1f1bd305df18845ca0667e936d198dee61b2fb2900bb5d2b2f50c10f581->enter($__internal_3186c1f1bd305df18845ca0667e936d198dee61b2fb2900bb5d2b2f50c10f581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Contact:contact.html.twig"));

        echo "My Money Help";
        
        $__internal_3186c1f1bd305df18845ca0667e936d198dee61b2fb2900bb5d2b2f50c10f581->leave($__internal_3186c1f1bd305df18845ca0667e936d198dee61b2fb2900bb5d2b2f50c10f581_prof);

    }

    // line 5
    public function block_metadescription($context, array $blocks = array())
    {
        $__internal_8ae85af934546ea628fe9db7344fbf9c7e22a3466b45c9d44c53f62318b24e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae85af934546ea628fe9db7344fbf9c7e22a3466b45c9d44c53f62318b24e22->enter($__internal_8ae85af934546ea628fe9db7344fbf9c7e22a3466b45c9d44c53f62318b24e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Contact:contact.html.twig"));

        echo "Plateforme de financement participatif MyMoneyHelp";
        
        $__internal_8ae85af934546ea628fe9db7344fbf9c7e22a3466b45c9d44c53f62318b24e22->leave($__internal_8ae85af934546ea628fe9db7344fbf9c7e22a3466b45c9d44c53f62318b24e22_prof);

    }

    // line 9
    public function block_headtitle($context, array $blocks = array())
    {
        $__internal_5e0ea6981f94aa9f01e7c9469796e9c910fae9182d4885cea3553c08df62df58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0ea6981f94aa9f01e7c9469796e9c910fae9182d4885cea3553c08df62df58->enter($__internal_5e0ea6981f94aa9f01e7c9469796e9c910fae9182d4885cea3553c08df62df58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Contact:contact.html.twig"));

        echo "Contacter nous";
        
        $__internal_5e0ea6981f94aa9f01e7c9469796e9c910fae9182d4885cea3553c08df62df58->leave($__internal_5e0ea6981f94aa9f01e7c9469796e9c910fae9182d4885cea3553c08df62df58_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_a1f112107bffe2aa6f13b557b3650a82ec65abad2694f9cbbc09b89bae461f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f112107bffe2aa6f13b557b3650a82ec65abad2694f9cbbc09b89bae461f3b->enter($__internal_a1f112107bffe2aa6f13b557b3650a82ec65abad2694f9cbbc09b89bae461f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Contact:contact.html.twig"));

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
        
        $__internal_a1f112107bffe2aa6f13b557b3650a82ec65abad2694f9cbbc09b89bae461f3b->leave($__internal_a1f112107bffe2aa6f13b557b3650a82ec65abad2694f9cbbc09b89bae461f3b_prof);

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
", "MMHStaticBundle:Contact:contact.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/StaticBundle/Resources/views/Contact/contact.html.twig");
    }
}
