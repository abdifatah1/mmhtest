<?php

/* MMHSiteBundle:Home:home.html.twig */
class __TwigTemplate_af1b4f806cd66caa0ae7658fc4e584d5a3cd1bb90d514ba382fe4e1b2b9c07e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMHSiteBundle::sliderlayout.html.twig", "MMHSiteBundle:Home:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadescription' => array($this, 'block_metadescription'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MMHSiteBundle::sliderlayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1eb73febf33e01af0432dfb758a6b45d3b8320d104d5e967cb6116565991bd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb73febf33e01af0432dfb758a6b45d3b8320d104d5e967cb6116565991bd62->enter($__internal_1eb73febf33e01af0432dfb758a6b45d3b8320d104d5e967cb6116565991bd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHSiteBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb73febf33e01af0432dfb758a6b45d3b8320d104d5e967cb6116565991bd62->leave($__internal_1eb73febf33e01af0432dfb758a6b45d3b8320d104d5e967cb6116565991bd62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_074c2f61af9de746f9a4e42b8e8c3626a81137e29855f282c09be08533ea7201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074c2f61af9de746f9a4e42b8e8c3626a81137e29855f282c09be08533ea7201->enter($__internal_074c2f61af9de746f9a4e42b8e8c3626a81137e29855f282c09be08533ea7201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle:Home:home.html.twig"));

        echo "My Money Help";
        
        $__internal_074c2f61af9de746f9a4e42b8e8c3626a81137e29855f282c09be08533ea7201->leave($__internal_074c2f61af9de746f9a4e42b8e8c3626a81137e29855f282c09be08533ea7201_prof);

    }

    // line 5
    public function block_metadescription($context, array $blocks = array())
    {
        $__internal_46e50bfac968057c45f46f5931a190cf674388753e1e7215e43d3ff15330b399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e50bfac968057c45f46f5931a190cf674388753e1e7215e43d3ff15330b399->enter($__internal_46e50bfac968057c45f46f5931a190cf674388753e1e7215e43d3ff15330b399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle:Home:home.html.twig"));

        echo "Plateforme de financement participatif MyMoneyHelp";
        
        $__internal_46e50bfac968057c45f46f5931a190cf674388753e1e7215e43d3ff15330b399->leave($__internal_46e50bfac968057c45f46f5931a190cf674388753e1e7215e43d3ff15330b399_prof);

    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        $__internal_d32e8a655684574df7f99cb7b9c43614dfeda3ffd8ef24cc5a978f0b8a202e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32e8a655684574df7f99cb7b9c43614dfeda3ffd8ef24cc5a978f0b8a202e87->enter($__internal_d32e8a655684574df7f99cb7b9c43614dfeda3ffd8ef24cc5a978f0b8a202e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle:Home:home.html.twig"));

        // line 8
        echo "
<!--************************** MAIN CONTENT ********************************-->
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

        <!-- cards -->

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

<!--************************* /MAIN CONTENT ********************************-->

";
        
        $__internal_d32e8a655684574df7f99cb7b9c43614dfeda3ffd8ef24cc5a978f0b8a202e87->leave($__internal_d32e8a655684574df7f99cb7b9c43614dfeda3ffd8ef24cc5a978f0b8a202e87_prof);

    }

    public function getTemplateName()
    {
        return "MMHSiteBundle:Home:home.html.twig";
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
        return new Twig_Source("{% extends 'MMHSiteBundle::sliderlayout.html.twig' %}

{% block title %}My Money Help{% endblock %}

{% block metadescription %}Plateforme de financement participatif MyMoneyHelp{% endblock %}

{% block section %}

<!--************************** MAIN CONTENT ********************************-->
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

        <!-- cards -->

        {% for project in project %}
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"{{ path('mmh_site_projet',{'slug':project.slug}) }}\">
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

<!--************************* /MAIN CONTENT ********************************-->

{% endblock %}
", "MMHSiteBundle:Home:home.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/SiteBundle/Resources/views/Home/home.html.twig");
    }
}
