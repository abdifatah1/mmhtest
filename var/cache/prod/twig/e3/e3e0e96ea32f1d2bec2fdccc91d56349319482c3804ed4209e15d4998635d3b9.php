<?php

/* MMHSiteBundle:Projet:projet.html.twig */
class __TwigTemplate_c2fc9e8e755567cdbceaa302bd851a03a57a4a6dc45fd9899fcf17dd5e5e464b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMHSiteBundle::projetlayout.html.twig", "MMHSiteBundle:Projet:projet.html.twig", 1);
        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MMHSiteBundle::projetlayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_section($context, array $blocks = array())
    {
        // line 3
        echo "
<!-- more  project details with image -->
<div class=\"wrap\">
  <section class=\"first-wrap\">
    <h3>Des passionés de sports nautiques à Roubaix</h3>
    <div class=\"first-wrap-p\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/Waterwood.jpg"), "html", null, true);
        echo "\">
      <p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit
        amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem </p>
      </div>
    </section>
    <!-- second wrap  -->
    <section class=\"second-wrap\">
      <h3>Des événement pour tous</h3>
      <div class=\"img-left \"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/Waterwood.jpg"), "html", null, true);
        echo "\">
        <p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit
          amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem </p>
        </div>
      </section>
    ";
    }

    public function getTemplateName()
    {
        return "MMHSiteBundle:Projet:projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'MMHSiteBundle::projetlayout.html.twig' %}
{% block section %}

<!-- more  project details with image -->
<div class=\"wrap\">
  <section class=\"first-wrap\">
    <h3>Des passionés de sports nautiques à Roubaix</h3>
    <div class=\"first-wrap-p\"><img src=\"{{ asset('bundles/mmhsite/img/Waterwood.jpg') }}\">
      <p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit
        amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem </p>
      </div>
    </section>
    <!-- second wrap  -->
    <section class=\"second-wrap\">
      <h3>Des événement pour tous</h3>
      <div class=\"img-left \"><img src=\"{{ asset('bundles/mmhsite/img/Waterwood.jpg') }}\">
        <p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit
          amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem </p>
        </div>
      </section>
    {% endblock %}
";
    }
}
