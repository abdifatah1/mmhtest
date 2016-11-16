<?php

/* MMHSiteBundle:Projet:decouvrir.html.twig */
class __TwigTemplate_a89e44ee27f1d42a345677c340a994aebdb212e500068414756125a87f3393ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baselayout.html.twig", "MMHSiteBundle:Projet:decouvrir.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadescription' => array($this, 'block_metadescription'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baselayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16303bc1bbad4564dbae4de4d1f351681c0325ae6cf8e161ef4cefc63a410eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16303bc1bbad4564dbae4de4d1f351681c0325ae6cf8e161ef4cefc63a410eae->enter($__internal_16303bc1bbad4564dbae4de4d1f351681c0325ae6cf8e161ef4cefc63a410eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHSiteBundle:Projet:decouvrir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16303bc1bbad4564dbae4de4d1f351681c0325ae6cf8e161ef4cefc63a410eae->leave($__internal_16303bc1bbad4564dbae4de4d1f351681c0325ae6cf8e161ef4cefc63a410eae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8dbc5f2e0ee0ce2009c136006e0e38eecbd621d0b4723195cd0fb201de1a9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8dbc5f2e0ee0ce2009c136006e0e38eecbd621d0b4723195cd0fb201de1a9c5->enter($__internal_e8dbc5f2e0ee0ce2009c136006e0e38eecbd621d0b4723195cd0fb201de1a9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle:Projet:decouvrir.html.twig"));

        echo "Découvrir les projets";
        
        $__internal_e8dbc5f2e0ee0ce2009c136006e0e38eecbd621d0b4723195cd0fb201de1a9c5->leave($__internal_e8dbc5f2e0ee0ce2009c136006e0e38eecbd621d0b4723195cd0fb201de1a9c5_prof);

    }

    // line 5
    public function block_metadescription($context, array $blocks = array())
    {
        $__internal_7ef646bb7e82756f3ddc09c53695c6cdaf0288bd54f213f645186004dcd5672e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef646bb7e82756f3ddc09c53695c6cdaf0288bd54f213f645186004dcd5672e->enter($__internal_7ef646bb7e82756f3ddc09c53695c6cdaf0288bd54f213f645186004dcd5672e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle:Projet:decouvrir.html.twig"));

        echo "Plateforme de financement participatif MyMoneyHelp";
        
        $__internal_7ef646bb7e82756f3ddc09c53695c6cdaf0288bd54f213f645186004dcd5672e->leave($__internal_7ef646bb7e82756f3ddc09c53695c6cdaf0288bd54f213f645186004dcd5672e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_048833c96fe41c9dfeb9c1063e3240fad397d3af8f757b0ccce8d8f4b543081e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048833c96fe41c9dfeb9c1063e3240fad397d3af8f757b0ccce8d8f4b543081e->enter($__internal_048833c96fe41c9dfeb9c1063e3240fad397d3af8f757b0ccce8d8f4b543081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle:Projet:decouvrir.html.twig"));

        // line 8
        echo "
<section class=\"static-page-title flex\">
  <h1>Les projets</h1>
</section>

<section class=\"cards-home-section\">
    <div class=\"wrapper-nav\">
        <nav class=\"cards-home-navbar\">
          <a href=\"#\" class=\"popular\">En cours</a>
        <div id=\"menuderoulant\">
          <a href=\"#\" class=\"category\">Catégories</a>
           <ul>
             <li><a href=\"#\">Tout</a></li>
             <li><a href=\"#\">Solidarité, humanitaire, société</a></li>
             <li><a href=\"#\">Entrepreneuriat, ESS</a></li>
             <li><a href=\"#\">Sports, santé</a></li>
             <li><a href=\"#\">Culture, arts, éducation</a></li>
             <li><a href=\"#\">Autres</a></li>
          </ul>
        </div>
            <form class=\"card-nav-form-d\">
                <input type=\"text\" placeholder=\"Chercher Un Projet\" class=\"searchbar-cards-home\">
            </form>
        </nav>

        <hr class=\"hr-cards\">
    </div>
    <div class=\"wrapper-home-cards\">
        <form class=\"card-nav-form-m\">
            <input type=\"text\" placeholder=\"Chercher Un Projet\" class=\"searchbar-cards-home\">
        </form>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["project"]);
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 40
            echo "        <div class=\"home-cards\" target=\"blank\">
            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_site_projet", array("slug" => $this->getAttribute($context["project"], "slug", array()))), "html", null, true);
            echo "\">
                <h2 class=\"card-home-title\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "</h2>
                <div class=\"img-remplacement\">
                  ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "imageproject", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 45
                echo "                    ";
                if ($this->getAttribute($context["image"], "headimage", array())) {
                    echo " <img src=\"";
                    echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("") . $this->getAttribute($context["image"], "path", array())), "html", null, true);
                    echo "\" class=\"cards-image\" /> ";
                }
                // line 46
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                </div>
                <h2 class=\"finish-banner\">";
            // line 48
            if ($this->getAttribute($context["project"], "status", array())) {
                echo "En cours ";
            } else {
                echo "Terminée ";
            }
            echo "</h2>
                <p class=\"home-card-description\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "headline", array()), "html", null, true);
            echo "</p>
                <div class=\"home-card-stats\">
                  <div class = \"progressBar\">
                    <div class = \"progression\">
                      <span class=\"value\">
                        ";
            // line 54
            $context["total"] = 0;
            // line 55
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "payment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                echo " ";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["payment"], "amount", array()));
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                        ";
            $context["percent"] = (((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) / $this->getAttribute($context["project"], "finalObjective", array())) * 100);
            // line 57
            echo "                        ";
            echo twig_escape_filter($this->env, twig_round((isset($context["percent"]) ? $context["percent"] : $this->getContext($context, "percent"))), "html", null, true);
            echo "%
                      </span>
                    </div>
                  </div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\"> ";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " €</p>
                        <p class=\"contribut\">contribué";
            // line 63
            if (((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > 0)) {
                echo "s";
            }
            echo "</p>
                    </div>
                </div>
            </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
    </div>
</section>

";
        
        $__internal_048833c96fe41c9dfeb9c1063e3240fad397d3af8f757b0ccce8d8f4b543081e->leave($__internal_048833c96fe41c9dfeb9c1063e3240fad397d3af8f757b0ccce8d8f4b543081e_prof);

    }

    public function getTemplateName()
    {
        return "MMHSiteBundle:Projet:decouvrir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 69,  181 => 63,  177 => 62,  168 => 57,  165 => 56,  153 => 55,  151 => 54,  143 => 49,  135 => 48,  132 => 47,  126 => 46,  119 => 45,  115 => 44,  110 => 42,  106 => 41,  103 => 40,  99 => 39,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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

{% block title %}Découvrir les projets{% endblock %}

{% block metadescription %}Plateforme de financement participatif MyMoneyHelp{% endblock %}

{% block body %}

<section class=\"static-page-title flex\">
  <h1>Les projets</h1>
</section>

<section class=\"cards-home-section\">
    <div class=\"wrapper-nav\">
        <nav class=\"cards-home-navbar\">
          <a href=\"#\" class=\"popular\">En cours</a>
        <div id=\"menuderoulant\">
          <a href=\"#\" class=\"category\">Catégories</a>
           <ul>
             <li><a href=\"#\">Tout</a></li>
             <li><a href=\"#\">Solidarité, humanitaire, société</a></li>
             <li><a href=\"#\">Entrepreneuriat, ESS</a></li>
             <li><a href=\"#\">Sports, santé</a></li>
             <li><a href=\"#\">Culture, arts, éducation</a></li>
             <li><a href=\"#\">Autres</a></li>
          </ul>
        </div>
            <form class=\"card-nav-form-d\">
                <input type=\"text\" placeholder=\"Chercher Un Projet\" class=\"searchbar-cards-home\">
            </form>
        </nav>

        <hr class=\"hr-cards\">
    </div>
    <div class=\"wrapper-home-cards\">
        <form class=\"card-nav-form-m\">
            <input type=\"text\" placeholder=\"Chercher Un Projet\" class=\"searchbar-cards-home\">
        </form>
        {% for project in project %}
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"{{ path('mmh_site_projet', {'slug': project.slug}) }}\">
                <h2 class=\"card-home-title\">{{project.title}}</h2>
                <div class=\"img-remplacement\">
                  {% for image in project.imageproject %}
                    {% if image.headimage %} <img src=\"{{ asset(\"\") ~ image.path }}\" class=\"cards-image\" /> {% endif %}
                  {% endfor %}
                </div>
                <h2 class=\"finish-banner\">{% if project.status %}En cours {% else %}Terminée {% endif %}</h2>
                <p class=\"home-card-description\">{{project.headline}}</p>
                <div class=\"home-card-stats\">
                  <div class = \"progressBar\">
                    <div class = \"progression\">
                      <span class=\"value\">
                        {% set total = 0 %}
                        {% for payment in project.payment %} {% set total = total + payment.amount %} {% endfor %}
                        {% set percent = (total / project.finalObjective) *100 %}
                        {{ percent|round }}%
                      </span>
                    </div>
                  </div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\"> {{total}} €</p>
                        <p class=\"contribut\">contribué{% if total > 0 %}s{% endif %}</p>
                    </div>
                </div>
            </a>
        </div>
        {% endfor %}

    </div>
</section>

{% endblock %}
", "MMHSiteBundle:Projet:decouvrir.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/SiteBundle/Resources/views/Projet/decouvrir.html.twig");
    }
}
