<?php

/* MMHSiteBundle::projetlayout.html.twig */
class __TwigTemplate_c31ad6eca77f8003b8b29b6cc01303ed0e8954a14c53e2cfc7620cc81974da52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baselayout.html.twig", "MMHSiteBundle::projetlayout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baselayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
<!-- project image -->
<div class=\"container\">
  <figure class=\"project-image-container\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/Team-Waterwood.jpg"), "html", null, true);
        echo "\" alt=\"team waterwood image\">
  </figure>
  <!-- project details -->
  <section class=\"header-text\">
    <h1>Un winch pour rider sur l'eau<br>avec l'association WaterWood</h1>
    <div class=\"row\">
      <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/money-bag.png"), "html", null, true);
        echo "\" alt=\"\" />
      <div class=\"left-bar\">
        <p>445€ Contribué</p>
        <p>800€ Objectif</p>
        <p>11 supporteur</p>
      </div>
    </div>
    <div>
      <p>Cette campagne n'a pas réussi à ateindre son objectif de financement il y'a 3 semaines Cette campagne n'a pas réussi à ateindre son objectif de
      </p>
      <ul class=\"social-networks\">
        <li>
          <a href=\"#\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/facebook_vert.png"), "html", null, true);
        echo "\" class=\"social-icons\" alt=\"Twitter\" /></a>
        </li>
        <li>
          <a href=\"#\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/google-plus_vert.png"), "html", null, true);
        echo "\" class=\"social-icons\" alt=\"Google plus\" /></a>
        </li>
        <li>
          <a href=\"#\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/linkedin_vert.png"), "html", null, true);
        echo "\" class=\"social-icons\" alt=\"Linkedin\" /></a>
        </li>
        <li>
          <a href=\"#\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/twitter_vert.png"), "html", null, true);
        echo "\" class=\"social-icons\" alt=\"Twitter\" /></a>
        </li>
      </ul>
    </div>
  </section>
</div>
";
        // line 40
        $this->displayBlock('section', $context, $blocks);
        // line 41
        echo "<!-- /project details -->
<aside class=\"proposer\">
  <!-- contribute button -->
  <div class=\"contribute\">
    <button class=\"project-button \" type=\"button\" name=\"button\">Contribuer</button>
  </div>
  <!-- /contribute button -->
  <div class=\"proposer-info\">
    <h1>Le porteur de projet:</h1>
    <figure>
      <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/businessman.png"), "html", null, true);
        echo "\" alt=\"proposer image\" />
    </figure>
    <p>Informations à propos du porteur de projet et de ses valeurs. Informations à propos du porteur de projet et de ses valeurs Informations à propos du porteur de projet et de
    </p>
  </div>

  <!-- Top contributors -->
  <div class=\"contributors\">
    <h2>Top contributions:</h2>
    <p class=\"ten\">10€</p>
    <p class=\"twenty\">20€</p>
    <p class=\"thirty\">30€</p>
  </div>

  <!-- social networks-->
  <ul class=\"social-networks\">
    <li>
      <a href=\"#\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/facebook_vert.png"), "html", null, true);
        echo "\" class=\"social-icons\" alt=\"Twitter\" /></a>
    </li>
    <li>
      <a href=\"#\"><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/twitter_vert.png"), "html", null, true);
        echo "\" class=\"social-icons\" alt=\"Twitter\" /></a>
    </li>
  </ul>
</aside>
</div>
";
    }

    // line 40
    public function block_section($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MMHSiteBundle::projetlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  129 => 71,  123 => 68,  103 => 51,  91 => 41,  89 => 40,  80 => 34,  74 => 31,  68 => 28,  62 => 25,  47 => 13,  38 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::baselayout.html.twig' %}
{% block body %}

<!-- project image -->
<div class=\"container\">
  <figure class=\"project-image-container\">
    <img src=\"{{ asset('bundles/mmhsite/img/Team-Waterwood.jpg') }}\" alt=\"team waterwood image\">
  </figure>
  <!-- project details -->
  <section class=\"header-text\">
    <h1>Un winch pour rider sur l'eau<br>avec l'association WaterWood</h1>
    <div class=\"row\">
      <img src=\"{{ asset('bundles/mmhsite/img/money-bag.png') }}\" alt=\"\" />
      <div class=\"left-bar\">
        <p>445€ Contribué</p>
        <p>800€ Objectif</p>
        <p>11 supporteur</p>
      </div>
    </div>
    <div>
      <p>Cette campagne n'a pas réussi à ateindre son objectif de financement il y'a 3 semaines Cette campagne n'a pas réussi à ateindre son objectif de
      </p>
      <ul class=\"social-networks\">
        <li>
          <a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/logos_RS/facebook_vert.png') }}\" class=\"social-icons\" alt=\"Twitter\" /></a>
        </li>
        <li>
          <a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/logos_RS/google-plus_vert.png') }}\" class=\"social-icons\" alt=\"Google plus\" /></a>
        </li>
        <li>
          <a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/logos_RS/linkedin_vert.png') }}\" class=\"social-icons\" alt=\"Linkedin\" /></a>
        </li>
        <li>
          <a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/logos_RS/twitter_vert.png') }}\" class=\"social-icons\" alt=\"Twitter\" /></a>
        </li>
      </ul>
    </div>
  </section>
</div>
{% block section %}{% endblock %}
<!-- /project details -->
<aside class=\"proposer\">
  <!-- contribute button -->
  <div class=\"contribute\">
    <button class=\"project-button \" type=\"button\" name=\"button\">Contribuer</button>
  </div>
  <!-- /contribute button -->
  <div class=\"proposer-info\">
    <h1>Le porteur de projet:</h1>
    <figure>
      <img src=\"{{ asset('bundles/mmhsite/img/businessman.png') }}\" alt=\"proposer image\" />
    </figure>
    <p>Informations à propos du porteur de projet et de ses valeurs. Informations à propos du porteur de projet et de ses valeurs Informations à propos du porteur de projet et de
    </p>
  </div>

  <!-- Top contributors -->
  <div class=\"contributors\">
    <h2>Top contributions:</h2>
    <p class=\"ten\">10€</p>
    <p class=\"twenty\">20€</p>
    <p class=\"thirty\">30€</p>
  </div>

  <!-- social networks-->
  <ul class=\"social-networks\">
    <li>
      <a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/logos_RS/facebook_vert.png') }}\" class=\"social-icons\" alt=\"Twitter\" /></a>
    </li>
    <li>
      <a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/logos_RS/twitter_vert.png') }}\" class=\"social-icons\" alt=\"Twitter\" /></a>
    </li>
  </ul>
</aside>
</div>
{% endblock %}
";
    }
}
