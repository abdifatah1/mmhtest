<?php

/* MMHSiteBundle::projetlayout.html.twig */
class __TwigTemplate_bc42f3393e3269b83516a652de7b0d651ce5aef5dce97d08a7226caa49566a4f extends Twig_Template
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
        $__internal_f32c73304b96f79433cad6b6ed911cc4438945ce13ffceada14abd18b58611ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32c73304b96f79433cad6b6ed911cc4438945ce13ffceada14abd18b58611ec->enter($__internal_f32c73304b96f79433cad6b6ed911cc4438945ce13ffceada14abd18b58611ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHSiteBundle::projetlayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f32c73304b96f79433cad6b6ed911cc4438945ce13ffceada14abd18b58611ec->leave($__internal_f32c73304b96f79433cad6b6ed911cc4438945ce13ffceada14abd18b58611ec_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_56ad16f061c4aaff0f49c25959b486aaa8967f30e9e8dcf6e073888b62b2f668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ad16f061c4aaff0f49c25959b486aaa8967f30e9e8dcf6e073888b62b2f668->enter($__internal_56ad16f061c4aaff0f49c25959b486aaa8967f30e9e8dcf6e073888b62b2f668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle::projetlayout.html.twig"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["project"]);
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 4
            echo "
<!-- project image -->
<div class=\"container\">
  <figure class=\"project-image-container\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "imageproject", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 9
                echo "    ";
                if ($this->getAttribute($context["image"], "headimage", array())) {
                    echo " <img src=\"";
                    echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("") . $this->getAttribute($context["image"], "path", array())), "html", null, true);
                    echo "\" class=\"cards-image\" /> ";
                }
                // line 10
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "  </figure>
  <!-- project details -->
  <section class=\"header-text\">
    <h1>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "</h1>

    <!-- <h1>Un winch pour rider sur l'eau<br>avec l'association WaterWood</h1> -->
    <div class=\"row\">
      <div class=\"second circle\">
        <strong></strong>
      </div>
      <div class=\"left-bar\">
        ";
            // line 23
            $context["total"] = 0;
            // line 24
            echo "        ";
            $context["supp"] = 0;
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "payment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                echo " ";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["payment"], "amount", array()));
                // line 26
                echo "        ";
                $context["supp"] = ((isset($context["supp"]) ? $context["supp"] : $this->getContext($context, "supp")) + 1);
                // line 27
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        <p>";
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " € Contribué";
            if (((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > 0)) {
                echo "s";
            }
            echo "</p>
        <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "finalObjective", array()), "html", null, true);
            echo " € Objectif</p>
        <p> ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["supp"]) ? $context["supp"] : $this->getContext($context, "supp")), "html", null, true);
            echo " supporteur";
            if (((isset($context["supp"]) ? $context["supp"] : $this->getContext($context, "supp")) > 0)) {
                echo "s";
            }
            echo "</p>
      </div>
    </div>
    <div>
      <p>Cette campagne n'a pas réussi à ateindre son objectif de financement il y'a 3 semaines.
      </p>
      <ul class=\"social-networks\">
        <li>
          <a href=\"#\"><img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/facebook_vert.png"), "html", null, true);
            echo "\" class=\"social-icons\" alt=\"Twitter\" /></a>
        </li>
        <li>
          <a href=\"#\"><img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/google-plus_vert.png"), "html", null, true);
            echo "\" class=\"social-icons\" alt=\"Google plus\" /></a>
        </li>
        <li>
          <a href=\"#\"><img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/linkedin_vert.png"), "html", null, true);
            echo "\" class=\"social-icons\" alt=\"Linkedin\" /></a>
        </li>
        <li>
          <a href=\"#\"><img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/twitter_vert.png"), "html", null, true);
            echo "\" class=\"social-icons\" alt=\"Twitter\" /></a>
        </li>
      </ul>
    </div>
  </section>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        $this->displayBlock('section', $context, $blocks);
        // line 55
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
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/businessman.png"), "html", null, true);
        echo "\" alt=\"proposer image\" />
    </figure>
    <p>Informations à propos du porteur de projet et de ses valeurs. Informations à propos du porteur de projet et de ses valeurs Informations à propos du porteur de projet et de
    </p>
  </div>

  <!-- Top contributors -->
  <div class=\"contributors\">
    <h2>Top contributions:</h2>
    <p class=\"ten span\"><span>10€</span><i>6</i><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/group.png"), "html", null, true);
        echo "\" alt=\"\" /></p>
    <p class=\"twenty span\"><span>20€</span><i>8</i><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/group.png"), "html", null, true);
        echo "\" alt=\"\" /></p>
    <p class=\"thirty span\"><span>30€</span><i>9</i><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/group.png"), "html", null, true);
        echo "\" alt=\"\" /></p>
  </div>

  <!-- social networks-->
  <ul class=\"social-networks\">
    <li>
      <a href=\"#\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/facebook_vert.png"), "html", null, true);
        echo "\" class=\"social-icons\" alt=\"Twitter\" /></a>
    </li>
    <li>
      <a href=\"#\"><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/twitter_vert.png"), "html", null, true);
        echo "\" class=\"social-icons\" alt=\"Twitter\" /></a>
    </li>
  </ul>
</aside>
</div>
";
        
        $__internal_56ad16f061c4aaff0f49c25959b486aaa8967f30e9e8dcf6e073888b62b2f668->leave($__internal_56ad16f061c4aaff0f49c25959b486aaa8967f30e9e8dcf6e073888b62b2f668_prof);

    }

    // line 54
    public function block_section($context, array $blocks = array())
    {
        $__internal_acbc05dd0b2d976f15b38555ecf7ecd07fb917a0f9c0ecf7d4a067ef1a0180a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbc05dd0b2d976f15b38555ecf7ecd07fb917a0f9c0ecf7d4a067ef1a0180a4->enter($__internal_acbc05dd0b2d976f15b38555ecf7ecd07fb917a0f9c0ecf7d4a067ef1a0180a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle::projetlayout.html.twig"));

        
        $__internal_acbc05dd0b2d976f15b38555ecf7ecd07fb917a0f9c0ecf7d4a067ef1a0180a4->leave($__internal_acbc05dd0b2d976f15b38555ecf7ecd07fb917a0f9c0ecf7d4a067ef1a0180a4_prof);

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
        return array (  227 => 54,  214 => 85,  208 => 82,  199 => 76,  195 => 75,  191 => 74,  179 => 65,  167 => 55,  165 => 54,  152 => 47,  146 => 44,  140 => 41,  134 => 38,  119 => 30,  115 => 29,  106 => 28,  100 => 27,  97 => 26,  90 => 25,  87 => 24,  85 => 23,  74 => 15,  69 => 12,  62 => 10,  55 => 9,  51 => 8,  45 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
{% for project in project %}

<!-- project image -->
<div class=\"container\">
  <figure class=\"project-image-container\">
    {% for image in project.imageproject %}
    {% if image.headimage %} <img src=\"{{ asset(\"\") ~ image.path }}\" class=\"cards-image\" /> {% endif %}

    {% endfor %}
  </figure>
  <!-- project details -->
  <section class=\"header-text\">
    <h1>{{project.title}}</h1>

    <!-- <h1>Un winch pour rider sur l'eau<br>avec l'association WaterWood</h1> -->
    <div class=\"row\">
      <div class=\"second circle\">
        <strong></strong>
      </div>
      <div class=\"left-bar\">
        {% set total = 0 %}
        {% set supp = 0 %}
        {% for payment in project.payment %} {% set total = total + payment.amount %}
        {% set supp = supp + 1 %}
        {% endfor %}
        <p>{{total}} € Contribué{% if total > 0 %}s{% endif %}</p>
        <p>{{project.finalObjective}} € Objectif</p>
        <p> {{supp}} supporteur{% if supp > 0 %}s{% endif %}</p>
      </div>
    </div>
    <div>
      <p>Cette campagne n'a pas réussi à ateindre son objectif de financement il y'a 3 semaines.
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
{% endfor %}
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
    <p class=\"ten span\"><span>10€</span><i>6</i><img src=\"{{ asset('bundles/mmhsite/img/group.png') }}\" alt=\"\" /></p>
    <p class=\"twenty span\"><span>20€</span><i>8</i><img src=\"{{ asset('bundles/mmhsite/img/group.png') }}\" alt=\"\" /></p>
    <p class=\"thirty span\"><span>30€</span><i>9</i><img src=\"{{ asset('bundles/mmhsite/img/group.png') }}\" alt=\"\" /></p>
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
", "MMHSiteBundle::projetlayout.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/SiteBundle/Resources/views/projetlayout.html.twig");
    }
}
