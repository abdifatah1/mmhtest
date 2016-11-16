<?php

/* MMHStaticBundle:Support:support.html.twig */
class __TwigTemplate_ffbdd0348ac60f8202fd922039abc0de36102d50b5858c7a1a246710a96bca71 extends Twig_Template
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
        $__internal_8835034c196508fcc9c54966f345a962e7658e14e124d11df123151d11089211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8835034c196508fcc9c54966f345a962e7658e14e124d11df123151d11089211->enter($__internal_8835034c196508fcc9c54966f345a962e7658e14e124d11df123151d11089211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHStaticBundle:Support:support.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8835034c196508fcc9c54966f345a962e7658e14e124d11df123151d11089211->leave($__internal_8835034c196508fcc9c54966f345a962e7658e14e124d11df123151d11089211_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fe9852d77c25f8ec9eba92de16f848d4ab2a0c97e48ec55f5409afc22366b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe9852d77c25f8ec9eba92de16f848d4ab2a0c97e48ec55f5409afc22366b5f->enter($__internal_7fe9852d77c25f8ec9eba92de16f848d4ab2a0c97e48ec55f5409afc22366b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Support:support.html.twig"));

        echo "My Money Help";
        
        $__internal_7fe9852d77c25f8ec9eba92de16f848d4ab2a0c97e48ec55f5409afc22366b5f->leave($__internal_7fe9852d77c25f8ec9eba92de16f848d4ab2a0c97e48ec55f5409afc22366b5f_prof);

    }

    // line 5
    public function block_metadescription($context, array $blocks = array())
    {
        $__internal_cc446f372c6c36597241c5a758e78af0c7d20d3f3324475d7cb2b2995e3d2746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc446f372c6c36597241c5a758e78af0c7d20d3f3324475d7cb2b2995e3d2746->enter($__internal_cc446f372c6c36597241c5a758e78af0c7d20d3f3324475d7cb2b2995e3d2746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Support:support.html.twig"));

        echo "Plateforme de financement participatif MyMoneyHelp";
        
        $__internal_cc446f372c6c36597241c5a758e78af0c7d20d3f3324475d7cb2b2995e3d2746->leave($__internal_cc446f372c6c36597241c5a758e78af0c7d20d3f3324475d7cb2b2995e3d2746_prof);

    }

    // line 7
    public function block_headtitle($context, array $blocks = array())
    {
        $__internal_21d6881b2248937fd13b55cd9acd849cdd1ff6796a4697a2671cf83e300810a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d6881b2248937fd13b55cd9acd849cdd1ff6796a4697a2671cf83e300810a5->enter($__internal_21d6881b2248937fd13b55cd9acd849cdd1ff6796a4697a2671cf83e300810a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Support:support.html.twig"));

        echo "Nous supporter";
        
        $__internal_21d6881b2248937fd13b55cd9acd849cdd1ff6796a4697a2671cf83e300810a5->leave($__internal_21d6881b2248937fd13b55cd9acd849cdd1ff6796a4697a2671cf83e300810a5_prof);

    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        $__internal_95dffb2a820b7440301c5d34bb2051b83a120574ed143ff91bb3a560c8f27df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95dffb2a820b7440301c5d34bb2051b83a120574ed143ff91bb3a560c8f27df0->enter($__internal_95dffb2a820b7440301c5d34bb2051b83a120574ed143ff91bb3a560c8f27df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Support:support.html.twig"));

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
        
        $__internal_95dffb2a820b7440301c5d34bb2051b83a120574ed143ff91bb3a560c8f27df0->leave($__internal_95dffb2a820b7440301c5d34bb2051b83a120574ed143ff91bb3a560c8f27df0_prof);

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
", "MMHStaticBundle:Support:support.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/StaticBundle/Resources/views/Support/support.html.twig");
    }
}
