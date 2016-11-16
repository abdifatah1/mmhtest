<?php

/* MMHStaticBundle:Blog:blog.html.twig */
class __TwigTemplate_bd3b50e3004f807bd168cb8da1d1ce04c574473fb054bad2ad01f5bab37e774b extends Twig_Template
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
        $__internal_cba24d7c11f3e50e61597468e987ac52328f1db903c2827da5f2ea28e703e78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba24d7c11f3e50e61597468e987ac52328f1db903c2827da5f2ea28e703e78f->enter($__internal_cba24d7c11f3e50e61597468e987ac52328f1db903c2827da5f2ea28e703e78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHStaticBundle:Blog:blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cba24d7c11f3e50e61597468e987ac52328f1db903c2827da5f2ea28e703e78f->leave($__internal_cba24d7c11f3e50e61597468e987ac52328f1db903c2827da5f2ea28e703e78f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f255d03e4d784da33c4b0dd7479025f2edad8fd3ff62d45115eb82e39b3be612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f255d03e4d784da33c4b0dd7479025f2edad8fd3ff62d45115eb82e39b3be612->enter($__internal_f255d03e4d784da33c4b0dd7479025f2edad8fd3ff62d45115eb82e39b3be612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Blog:blog.html.twig"));

        echo "My Money Help";
        
        $__internal_f255d03e4d784da33c4b0dd7479025f2edad8fd3ff62d45115eb82e39b3be612->leave($__internal_f255d03e4d784da33c4b0dd7479025f2edad8fd3ff62d45115eb82e39b3be612_prof);

    }

    // line 5
    public function block_metadescription($context, array $blocks = array())
    {
        $__internal_2240742d8802e0cb9d936ef4acd704bd52270b058781baf7b086d08b717aebc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2240742d8802e0cb9d936ef4acd704bd52270b058781baf7b086d08b717aebc7->enter($__internal_2240742d8802e0cb9d936ef4acd704bd52270b058781baf7b086d08b717aebc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Blog:blog.html.twig"));

        echo "Plateforme de financement participatif MyMoneyHelp";
        
        $__internal_2240742d8802e0cb9d936ef4acd704bd52270b058781baf7b086d08b717aebc7->leave($__internal_2240742d8802e0cb9d936ef4acd704bd52270b058781baf7b086d08b717aebc7_prof);

    }

    // line 7
    public function block_headtitle($context, array $blocks = array())
    {
        $__internal_f8dc0a0dc6a6708132a7630a6413df60917826b861a5fdafd52b5f446e79b1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dc0a0dc6a6708132a7630a6413df60917826b861a5fdafd52b5f446e79b1f0->enter($__internal_f8dc0a0dc6a6708132a7630a6413df60917826b861a5fdafd52b5f446e79b1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Blog:blog.html.twig"));

        echo "Nous supporter";
        
        $__internal_f8dc0a0dc6a6708132a7630a6413df60917826b861a5fdafd52b5f446e79b1f0->leave($__internal_f8dc0a0dc6a6708132a7630a6413df60917826b861a5fdafd52b5f446e79b1f0_prof);

    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        $__internal_631d141cad8794470d3418df23e3173a65e7c71c9dada83f98fb4f8d43d42426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631d141cad8794470d3418df23e3173a65e7c71c9dada83f98fb4f8d43d42426->enter($__internal_631d141cad8794470d3418df23e3173a65e7c71c9dada83f98fb4f8d43d42426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Blog:blog.html.twig"));

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
        
        $__internal_631d141cad8794470d3418df23e3173a65e7c71c9dada83f98fb4f8d43d42426->leave($__internal_631d141cad8794470d3418df23e3173a65e7c71c9dada83f98fb4f8d43d42426_prof);

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
", "MMHStaticBundle:Blog:blog.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/StaticBundle/Resources/views/Blog/blog.html.twig");
    }
}
