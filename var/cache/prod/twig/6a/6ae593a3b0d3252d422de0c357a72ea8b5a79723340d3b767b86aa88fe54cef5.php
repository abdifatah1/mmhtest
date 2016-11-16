<?php

/* MMHStaticBundle::staticlayout.html.twig */
class __TwigTemplate_a4236f770bad43fe013507340fa6df58706df6fc35ae6a2b8b9f51f7965f1c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baselayout.html.twig", "MMHStaticBundle::staticlayout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'headtitle' => array($this, 'block_headtitle'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 12
        echo "
  ";
        // line 13
        $this->displayBlock('section', $context, $blocks);
        // line 15
        echo "
  <!-- Social icons at the bottom of article -->
  <ul class=\"flex static-social-medias\">
    <li><a href=\"#\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/icon/facebook_vert.png"), "html", null, true);
        echo "\" alt=\"logo facebook\"></a></li>
    <li><a href=\"#\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/icon/twitter_vert.png"), "html", null, true);
        echo "\" alt=\"logo twitter\"></a></li>
    <li><a href=\"#\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/icon/linkedin_vert.png"), "html", null, true);
        echo "\" alt=\"logo linkedin\"></a></li>
  </ul>
</section>

  <!-- End Social icons at the bottom of article -->

  <!-- Aside on the right with the articles -->
      <aside class=\"static-content-aside\">

        <!-- Social media icons at the top of the aside -->
        <ul class=\"flex static-social-medias\">
          <li><a href=\"#\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/icon/facebook_vert.png"), "html", null, true);
        echo "\" alt=\"logo facebook\"></a></li>
          <li><a href=\"#\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/icon/twitter_vert.png"), "html", null, true);
        echo "\" alt=\"logo twitter\"></a></li>
          <li><a href=\"#\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/icon/linkedin_vert.png"), "html", null, true);
        echo "\" alt=\"logo linkedin\"></a></li>
        </ul>

        <!-- Blog articles on the left side -->
        <article>
          <a href=\"#\">
            <h3>Le financement participatif solidaire en France : les raisons du boom</h3>
            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/content/Telethon.jpg"), "html", null, true);
        echo "\" alt=\"célébration du telethon\">
          </a>
        </article>
        <article>
          <a href=\"#\">
            <h3>Le crowdfunding solidaire dans la troisième révolution industrielle en Nord Pas-de-Calais</h3>
            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/content/fille_fleur.jpg"), "html", null, true);
        echo "\" alt=\"enfant qui souffle sur un moulin à vent\">
          </a>
        </article>
        <article>
          <a href=\"#\">          
            <h3>Aux origines du financement participatif en France, le mécénat collectif !</h3>
            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/content/statue_liberte.jpg"), "html", null, true);
        echo "\" alt=\"statue de la liberté\">
          </a>
        </article>
      </aside>

      <!-- Son wrapper closure -->
    </div>


";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "  <!-- Page main title -->
    <section class=\"static-page-title flex\">
    <h1>";
        // line 8
        $this->displayBlock('headtitle', $context, $blocks);
        echo "</h1>
    </section>
  <!-- /Page main title -->
  ";
    }

    public function block_headtitle($context, array $blocks = array())
    {
    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        // line 14
        echo "  ";
    }

    public function getTemplateName()
    {
        return "MMHStaticBundle::staticlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 14,  140 => 13,  128 => 8,  124 => 6,  121 => 5,  107 => 52,  98 => 46,  89 => 40,  79 => 33,  75 => 32,  71 => 31,  57 => 20,  53 => 19,  49 => 18,  44 => 15,  42 => 13,  39 => 12,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::baselayout.html.twig' %}

{% block body %}

  {% block header %}
  <!-- Page main title -->
    <section class=\"static-page-title flex\">
    <h1>{% block headtitle %}{% endblock %}</h1>
    </section>
  <!-- /Page main title -->
  {% endblock %}

  {% block section %}
  {% endblock %}

  <!-- Social icons at the bottom of article -->
  <ul class=\"flex static-social-medias\">
    <li><a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/icon/facebook_vert.png') }}\" alt=\"logo facebook\"></a></li>
    <li><a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/icon/twitter_vert.png') }}\" alt=\"logo twitter\"></a></li>
    <li><a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/icon/linkedin_vert.png') }}\" alt=\"logo linkedin\"></a></li>
  </ul>
</section>

  <!-- End Social icons at the bottom of article -->

  <!-- Aside on the right with the articles -->
      <aside class=\"static-content-aside\">

        <!-- Social media icons at the top of the aside -->
        <ul class=\"flex static-social-medias\">
          <li><a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/icon/facebook_vert.png') }}\" alt=\"logo facebook\"></a></li>
          <li><a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/icon/twitter_vert.png') }}\" alt=\"logo twitter\"></a></li>
          <li><a href=\"#\"><img src=\"{{ asset('bundles/mmhsite/img/icon/linkedin_vert.png') }}\" alt=\"logo linkedin\"></a></li>
        </ul>

        <!-- Blog articles on the left side -->
        <article>
          <a href=\"#\">
            <h3>Le financement participatif solidaire en France : les raisons du boom</h3>
            <img src=\"{{ asset('bundles/mmhsite/img/content/Telethon.jpg') }}\" alt=\"célébration du telethon\">
          </a>
        </article>
        <article>
          <a href=\"#\">
            <h3>Le crowdfunding solidaire dans la troisième révolution industrielle en Nord Pas-de-Calais</h3>
            <img src=\"{{ asset('bundles/mmhsite/img/content/fille_fleur.jpg') }}\" alt=\"enfant qui souffle sur un moulin à vent\">
          </a>
        </article>
        <article>
          <a href=\"#\">          
            <h3>Aux origines du financement participatif en France, le mécénat collectif !</h3>
            <img src=\"{{ asset('bundles/mmhsite/img/content/statue_liberte.jpg') }}\" alt=\"statue de la liberté\">
          </a>
        </article>
      </aside>

      <!-- Son wrapper closure -->
    </div>


{% endblock %}
";
    }
}
