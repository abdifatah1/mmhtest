<?php

/* MMHStaticBundle::staticlayout.html.twig */
class __TwigTemplate_171cb63c0978b8e071540f5dba91fc713089d4993103f995f687c879048a9cbd extends Twig_Template
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
        $__internal_29de0885e7dde756324d4dbccb2cfff5c7dd06e38af43990f3845d19f37f602a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29de0885e7dde756324d4dbccb2cfff5c7dd06e38af43990f3845d19f37f602a->enter($__internal_29de0885e7dde756324d4dbccb2cfff5c7dd06e38af43990f3845d19f37f602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHStaticBundle::staticlayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29de0885e7dde756324d4dbccb2cfff5c7dd06e38af43990f3845d19f37f602a->leave($__internal_29de0885e7dde756324d4dbccb2cfff5c7dd06e38af43990f3845d19f37f602a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d44fe9be0f7d986b2969e7072e482ae1b07a619c338b2ab1ac038ebfe0cce69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d44fe9be0f7d986b2969e7072e482ae1b07a619c338b2ab1ac038ebfe0cce69->enter($__internal_7d44fe9be0f7d986b2969e7072e482ae1b07a619c338b2ab1ac038ebfe0cce69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle::staticlayout.html.twig"));

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
        
        $__internal_7d44fe9be0f7d986b2969e7072e482ae1b07a619c338b2ab1ac038ebfe0cce69->leave($__internal_7d44fe9be0f7d986b2969e7072e482ae1b07a619c338b2ab1ac038ebfe0cce69_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_58bdf6c9a5fcdef9fd9b23d38f698e2b1e3ed0b5b93153a3b3331ebf7f646ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bdf6c9a5fcdef9fd9b23d38f698e2b1e3ed0b5b93153a3b3331ebf7f646ab7->enter($__internal_58bdf6c9a5fcdef9fd9b23d38f698e2b1e3ed0b5b93153a3b3331ebf7f646ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle::staticlayout.html.twig"));

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
        
        $__internal_58bdf6c9a5fcdef9fd9b23d38f698e2b1e3ed0b5b93153a3b3331ebf7f646ab7->leave($__internal_58bdf6c9a5fcdef9fd9b23d38f698e2b1e3ed0b5b93153a3b3331ebf7f646ab7_prof);

    }

    public function block_headtitle($context, array $blocks = array())
    {
        $__internal_6f844e811e73b6c21947a3f0dd9a786a56c993ef20652b916515693c2885c571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f844e811e73b6c21947a3f0dd9a786a56c993ef20652b916515693c2885c571->enter($__internal_6f844e811e73b6c21947a3f0dd9a786a56c993ef20652b916515693c2885c571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle::staticlayout.html.twig"));

        
        $__internal_6f844e811e73b6c21947a3f0dd9a786a56c993ef20652b916515693c2885c571->leave($__internal_6f844e811e73b6c21947a3f0dd9a786a56c993ef20652b916515693c2885c571_prof);

    }

    // line 13
    public function block_section($context, array $blocks = array())
    {
        $__internal_f7d926efcc0df9cdc3444fbadc3a95adf0c12782f8ea091bc0fd67c3a4b0b4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d926efcc0df9cdc3444fbadc3a95adf0c12782f8ea091bc0fd67c3a4b0b4f8->enter($__internal_f7d926efcc0df9cdc3444fbadc3a95adf0c12782f8ea091bc0fd67c3a4b0b4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle::staticlayout.html.twig"));

        // line 14
        echo "  ";
        
        $__internal_f7d926efcc0df9cdc3444fbadc3a95adf0c12782f8ea091bc0fd67c3a4b0b4f8->leave($__internal_f7d926efcc0df9cdc3444fbadc3a95adf0c12782f8ea091bc0fd67c3a4b0b4f8_prof);

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
        return array (  170 => 14,  164 => 13,  143 => 8,  139 => 6,  133 => 5,  116 => 52,  107 => 46,  98 => 40,  88 => 33,  84 => 32,  80 => 31,  66 => 20,  62 => 19,  58 => 18,  53 => 15,  51 => 13,  48 => 12,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::baselayout.html.twig' %}

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
", "MMHStaticBundle::staticlayout.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/StaticBundle/Resources/views/staticlayout.html.twig");
    }
}
