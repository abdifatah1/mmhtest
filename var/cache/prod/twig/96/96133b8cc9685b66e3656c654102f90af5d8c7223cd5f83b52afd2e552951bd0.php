<?php

/* MMHSiteBundle:Home:home.html.twig */
class __TwigTemplate_2f73cce085fe067708fafac9d9e32402ca7e96d0bba9842c7d3a107e1075a5b8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "My Money Help";
    }

    // line 5
    public function block_metadescription($context, array $blocks = array())
    {
        echo "Plateforme de financement participatif MyMoneyHelp";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
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
             <li><a href=\"#\">Circuit cours</a></li>
             <li><a href=\"#\">Collaboratif</a></li>
             <li><a href=\"#\">Création d'emploi</a></li>
             <li><a href=\"#\">Culturel</a></li>
             <li><a href=\"#\">Environnemental</a></li>
             <li><a href=\"#\">Humanitaire</a></li>
             <li><a href=\"#\">Social</a></li>
             <li><a href=\"#\">Solidaire</a></li>
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
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->

        <!-- cards -->
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->

        <!-- cards -->
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->

        <!-- cards -->
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->

        <!-- cards -->
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->

        <!-- cards -->
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->
    </div>
</section>

<!--************************* /MAIN CONTENT ********************************-->

";
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
        return array (  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'MMHSiteBundle::sliderlayout.html.twig' %}

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
             <li><a href=\"#\">Circuit cours</a></li>
             <li><a href=\"#\">Collaboratif</a></li>
             <li><a href=\"#\">Création d'emploi</a></li>
             <li><a href=\"#\">Culturel</a></li>
             <li><a href=\"#\">Environnemental</a></li>
             <li><a href=\"#\">Humanitaire</a></li>
             <li><a href=\"#\">Social</a></li>
             <li><a href=\"#\">Solidaire</a></li>
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
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->

        <!-- cards -->
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->

        <!-- cards -->
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->

        <!-- cards -->
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->

        <!-- cards -->
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->

        <!-- cards -->
        <div class=\"home-cards\" target=\"blank\">
            <a href=\"projet.html\">
                <h2 class=\"card-home-title\">Inolin : un matériau écologique</h2>
                <div class=\"img-remplacement\"></div>
                <h2 class=\"finish-banner\">Terminée</h2>
                <p class=\"home-card-description\">Devant le succès nous avons décidé de prolonger la campagne</p>
                <div class=\"home-card-stats\">
                    <div class=\"card-home-loadbar\">161%</div>
                    <div class=\"card-home-amount\">
                        <p class=\"amount\">3370€</p>
                        <p class=\"contribut\">contribués</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- /cards -->
    </div>
</section>

<!--************************* /MAIN CONTENT ********************************-->

{% endblock %}
";
    }
}
