<?php

/* ::baselayout.html.twig */
class __TwigTemplate_64eed9f63686d6224b7caa80ff9227753d4fe6c5f938898efef3bd75ad025080 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadescription' => array($this, 'block_metadescription'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"keywords\" content=\"MyMoneyHelp crowdfunding financement participatif social \">
    <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('metadescription', $context, $blocks);
        echo "\">
    <meta name=\"author\" content=\"Abdifatah Ibrahim Omar, Etienne Dhennin et Thomas Gossart \">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <!-- Place favicon.ico in the root directory -->

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/css/main.css"), "html", null, true);
        echo "\">
    <!-- Custom Css -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/css/style.css"), "html", null, true);
        echo "\">
    <!-- /Custom Css -->
    <!-- Google fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Noticia+Text%7cOpen+Sans%7cUbuntu+Condensed\" rel=\"stylesheet\">
    <!-- Google fonts -->
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
</head>


<body>

    <!--****************************** HEADER ***********************************-->

    <header>
        <!-- Start Of Header -->
        <section class=\"top-header-flex\">
            <!--Start of Top Header:: Section Above The NavBar -->
            <div class=\"logo-remplacement\">LOGO</div>
            <div class=\"top-header-buttons\">
                <div class=\"buttons-social\">
                  <a href=\"https://www.facebook.com/mymoneyhelp/\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/icon/facebook_vert.png"), "html", null, true);
        echo "\" class=\"header-logo-social\" alt=\"logo facebook\">
                  </a>
                  <a href=\"https://twitter.com/mymoneyhelp\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/icon/twitter_vert.png"), "html", null, true);
        echo "\" class=\"header-logo-social\" alt=\"logo twitter\">
                  </a>
                  <a href=\"https://www.linkedin.com/in/mymoneyhelp-crowdfunding-39a94498\">
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/icon/linkedin_vert.png"), "html", null, true);
        echo "\" class=\"header-logo-social\" alt=\"logo linkedin\">
                  </a>
                </div>
                <button class=\"login-button\">S'inscrire/Se connecter</button>
                <!-- Login button -->
            </div>
        </section>
        <!-- End Of Top Header -->
        <nav class=\"main-navbar\">
          <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/triangle_menu.png"), "html", null, true);
        echo "\" class=\"triangle\">
            <!-- Start of Navbar -->
            <div class=\"visible-navbar\">
                <!-- Part of the navbar alway visible on mobile -->
                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/icon/menu_bleu.png"), "html", null, true);
        echo "\" class=\"menu-mobile-icon\">
            </div>
            <ul class=\"menu-list\">
                <!-- List of nav items -->
                <li class=\"title acceuil\"><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_site_homepage");
        echo "\" class=\"";
        if ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "mmh_site_homepage") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "mmh_static_conditions")) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "mmh_static_mentions")) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "mmh_static_blog"))) {
            echo "active ";
        }
        echo "\">Accueil</a></li>
                <li class=\"title under-menu ";
        // line 64
        if (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "mmh_static_association") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "mmh_static_soutenir")) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "mmh_static_contact"))) {
            echo " active ";
        }
        echo "\">
                    <!-- List item with title + under menu -->
                    <div class=\"mmh\">Mymoneyhelp +</div>
                    <div class=\"under-menu-link\">
                        <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_static_association");
        echo "\">Qui sommes-nous ?</a>
                        <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_static_soutenir");
        echo "\">Nous soutenir</a>
                        <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_static_contact");
        echo "\">Contact</a>
                    </div>
                </li>
                <!-- end of mmh tab -->
                <li class=\"title\"><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_site_decouvrir");
        echo "\" class=\"";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "mmh_site_decouvrir") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "mmh_site_projet"))) {
            echo " active ";
        }
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/telescope.png"), "html", null, true);
        echo "\" alt=\"homme tenant un telescope\" class=\"menu-image\">Découvrir les projets</a></li>
                <li class=\"title\"><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_static_deposer");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "mmh_static_deposer")) {
            echo " active ";
        }
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/board.png"), "html", null, true);
        echo "\" alt=\"homme devant un tableau\" class=\"menu-image\">Déposer un projet</a></li>
                <li class=\"language\">EN</li>
            </ul>
            <!-- End of list -->
        </nav>
        <!-- End Of Navbar -->
    </header>

    <!--***************************** /HEADER ***********************************-->

";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "
    <!--**************************** FOOTER ************************************-->

    <!--  ~~~~~~~~~~Start of the footer~~~~~~~~~~~ -->


    <footer>
        <!-- Section with the partners -->
        <section class=\"wrapper\">
            <h4>Merci à nos partenaires qui nous font confiance</h4>
            <figure class=\"flex partners\">
                <a href=\"http://www.avistem.com/\" target=\"_blank\">
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_partenaires/Avistem.jpg"), "html", null, true);
        echo "\" alt=\"logo avistem\">
                </a>
                <a href=\"http://www.francebenevolat.org//\" target=\"_blank\">
                    <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_partenaires/FranceBenevolat.png"), "html", null, true);
        echo "\" alt=\"logo France benevolat\">
                </a>
                <a href=\"http://www.comexpert.com/\" target=\"_blank\">
                    <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_partenaires/ComeXpert.jpg"), "html", null, true);
        echo "\" alt=\"logo comexpert\">
                </a>
                <a href=\"http://www.initiativesetcite.com/\" target=\"_blank\">
                    <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_partenaires/InitiativesCites.png"), "html", null, true);
        echo "\" alt=\"logo initiativescites\">
                </a>
                <a href=\"#\">
                    <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_partenaires/Sivao.jpg"), "html", null, true);
        echo "\" alt=\"logo sivao\">
                </a>
                <a href=\"http://www.payplug.com/\" target=\"_blank\">
                    <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_partenaires/payplug.png"), "html", null, true);
        echo "\" alt=\"payplug\">
                </a>
            </figure>
        </section>

        <!-- Aside with the submenus and the social medias -->
        <aside>

            <!-- Sub menu -->
            <div class=\"wrapper flex\">
                <ul>
                    <li class=\"title-list\">MyMoneyHelp</li>
                    <li><a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_static_association");
        echo "\">Qui sommes-nous ?</a></li>
                    <li><a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_static_soutenir");
        echo "\">Nous soutenir</a></li>
                    <li><a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_static_conditions");
        echo "\">Conditions générales<br> d'utilisation</a></li>
                    <li><a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_static_mentions");
        echo "\">Mentions légales</a></li>
                    <li><a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_static_contact");
        echo "\">Contact</a></li>
                </ul>
                <ul>
                    <li><a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_site_decouvrir");
        echo "\" class=\"title-list\">Découvrir les projets</a></li>
                </ul>
                <ul>
                    <li><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmh_static_deposer");
        echo "\" class=\"title-list\">Déposer un projet</a></li>
                </ul>

                <div class=\"twitter-container\">
                    <a class=\"twitter-timeline\" data-lang=\"fr\" data-width=\"600\" data-heigth=\"400\" data-lang=\"fr\" data-theme=\"dark\" href=\"https://twitter.com/MyMoneyHelp\">Tweets by MyMoneyHelp</a>
                    <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
                </div>

            </div>

            <!-- Social medias icons -->
            <figure class=\"flex wrapper\">
                <a href=\"https://www.facebook.com/mymoneyhelp/\">
                    <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/facebook_vert.png"), "html", null, true);
        echo "\" alt=\"icon facebook\">

                </a>
                <a href=\"https://twitter.com/mymoneyhelp\">
                    <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/twitter_vert.png"), "html", null, true);
        echo "\" alt=\"icon twitter\">
                </a>
                <a href=\"https://www.linkedin.com/in/mymoneyhelp-crowdfunding-39a94498\">
                    <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/linkedin_vert.png"), "html", null, true);
        echo "\" alt=\"icon linkedin\">
                </a>
                <a href=\"https://plus.google.com/+MyMoneyHelpFr\">
                    <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/google-plus_vert.png"), "html", null, true);
        echo "\" alt=\"icon googleplus\">
                </a>
                <a href=\"#\">
                    <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/logos_RS/pinterest_vert.png"), "html", null, true);
        echo "\" alt=\"icon pinterest\">
                </a>
            </figure>

            <!-- Credits -->
            <p>MyMoneyHelp 2016 tous droits réservés. Une réalisation de
                <a href=\"http://abdifatah-ibrahim.fr/\" target=\"_blank\">Abdifatah, </a>
                <a href=\"http://www.etiennedh.com/\" target=\"_blank\">Etienne, </a>
                <a href=\"#\">Jean, </a>
                <a href=\"https://www.thomas-gossart.fr\" target=\"_blank\"> Thomas et </a>
                <a href=\"\">Yanis </a> pour <a href=\"http://simplon.co/roubaix/\" target=\"_blank\">Simplon Roubaix</a>
            </p>
        </aside>

    </footer>

    <!--**************************** /FOOTER ***********************************-->

    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/js/main.js"), "html", null, true);
        echo "\"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = 'https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_metadescription($context, array $blocks = array())
    {
    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::baselayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 85,  368 => 9,  363 => 7,  336 => 181,  332 => 180,  310 => 161,  304 => 158,  298 => 155,  292 => 152,  285 => 148,  269 => 135,  263 => 132,  257 => 129,  253 => 128,  249 => 127,  245 => 126,  241 => 125,  226 => 113,  220 => 110,  214 => 107,  208 => 104,  202 => 101,  196 => 98,  182 => 86,  180 => 85,  161 => 75,  151 => 74,  144 => 70,  140 => 69,  136 => 68,  127 => 64,  119 => 63,  112 => 59,  105 => 55,  93 => 46,  87 => 43,  81 => 40,  62 => 24,  54 => 19,  49 => 17,  45 => 16,  35 => 9,  30 => 7,  22 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html class=\"no-js\" lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>{% block title %}{% endblock %}</title>
    <meta name=\"keywords\" content=\"MyMoneyHelp crowdfunding financement participatif social \">
    <meta name=\"description\" content=\"{% block metadescription %}{% endblock %}\">
    <meta name=\"author\" content=\"Abdifatah Ibrahim Omar, Etienne Dhennin et Thomas Gossart \">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <!-- Place favicon.ico in the root directory -->

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mmhsite/css/normalize.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mmhsite/css/main.css') }}\">
    <!-- Custom Css -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mmhsite/css/style.css') }}\">
    <!-- /Custom Css -->
    <!-- Google fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Noticia+Text%7cOpen+Sans%7cUbuntu+Condensed\" rel=\"stylesheet\">
    <!-- Google fonts -->
    <script src=\"{{ asset('bundles/mmhsite/js/vendor/modernizr-2.8.3.min.js')}}\"></script>
</head>


<body>

    <!--****************************** HEADER ***********************************-->

    <header>
        <!-- Start Of Header -->
        <section class=\"top-header-flex\">
            <!--Start of Top Header:: Section Above The NavBar -->
            <div class=\"logo-remplacement\">LOGO</div>
            <div class=\"top-header-buttons\">
                <div class=\"buttons-social\">
                  <a href=\"https://www.facebook.com/mymoneyhelp/\">
                    <img src=\"{{ asset('bundles/mmhsite/img/icon/facebook_vert.png') }}\" class=\"header-logo-social\" alt=\"logo facebook\">
                  </a>
                  <a href=\"https://twitter.com/mymoneyhelp\">
                    <img src=\"{{ asset('bundles/mmhsite/img/icon/twitter_vert.png') }}\" class=\"header-logo-social\" alt=\"logo twitter\">
                  </a>
                  <a href=\"https://www.linkedin.com/in/mymoneyhelp-crowdfunding-39a94498\">
                    <img src=\"{{ asset('bundles/mmhsite/img/icon/linkedin_vert.png') }}\" class=\"header-logo-social\" alt=\"logo linkedin\">
                  </a>
                </div>
                <button class=\"login-button\">S'inscrire/Se connecter</button>
                <!-- Login button -->
            </div>
        </section>
        <!-- End Of Top Header -->
        <nav class=\"main-navbar\">
          <img src=\"{{ asset('bundles/mmhsite/img/triangle_menu.png') }}\" class=\"triangle\">
            <!-- Start of Navbar -->
            <div class=\"visible-navbar\">
                <!-- Part of the navbar alway visible on mobile -->
                <img src=\"{{ asset('bundles/mmhsite/img/icon/menu_bleu.png') }}\" class=\"menu-mobile-icon\">
            </div>
            <ul class=\"menu-list\">
                <!-- List of nav items -->
                <li class=\"title acceuil\"><a href=\"{{ path('mmh_site_homepage')}}\" class=\"{% if app.request.attributes.get('_route') == 'mmh_site_homepage' or app.request.attributes.get('_route') == 'mmh_static_conditions' or app.request.attributes.get('_route') == 'mmh_static_mentions' or app.request.attributes.get('_route') == 'mmh_static_blog' %}active {% endif %}\">Accueil</a></li>
                <li class=\"title under-menu {% if app.request.attributes.get('_route') == 'mmh_static_association' or app.request.attributes.get('_route') == 'mmh_static_soutenir' or app.request.attributes.get('_route') == 'mmh_static_contact' %} active {% endif %}\">
                    <!-- List item with title + under menu -->
                    <div class=\"mmh\">Mymoneyhelp +</div>
                    <div class=\"under-menu-link\">
                        <a href=\"{{ path('mmh_static_association')}}\">Qui sommes-nous ?</a>
                        <a href=\"{{ path('mmh_static_soutenir')}}\">Nous soutenir</a>
                        <a href=\"{{ path('mmh_static_contact')}}\">Contact</a>
                    </div>
                </li>
                <!-- end of mmh tab -->
                <li class=\"title\"><a href=\"{{ path('mmh_site_decouvrir')}}\" class=\"{% if app.request.attributes.get('_route') == 'mmh_site_decouvrir' or app.request.attributes.get('_route') == 'mmh_site_projet' %} active {% endif %}\"><img src=\"{{ asset('bundles/mmhsite/img/telescope.png') }}\" alt=\"homme tenant un telescope\" class=\"menu-image\">Découvrir les projets</a></li>
                <li class=\"title\"><a href=\"{{ path('mmh_static_deposer')}}\" class=\"{% if app.request.attributes.get('_route') == 'mmh_static_deposer' %} active {% endif %}\"><img src=\"{{ asset('bundles/mmhsite/img/board.png') }}\" alt=\"homme devant un tableau\" class=\"menu-image\">Déposer un projet</a></li>
                <li class=\"language\">EN</li>
            </ul>
            <!-- End of list -->
        </nav>
        <!-- End Of Navbar -->
    </header>

    <!--***************************** /HEADER ***********************************-->

{% block body %}{% endblock %}

    <!--**************************** FOOTER ************************************-->

    <!--  ~~~~~~~~~~Start of the footer~~~~~~~~~~~ -->


    <footer>
        <!-- Section with the partners -->
        <section class=\"wrapper\">
            <h4>Merci à nos partenaires qui nous font confiance</h4>
            <figure class=\"flex partners\">
                <a href=\"http://www.avistem.com/\" target=\"_blank\">
                    <img src=\"{{ asset('bundles/mmhsite/img/logos_partenaires/Avistem.jpg') }}\" alt=\"logo avistem\">
                </a>
                <a href=\"http://www.francebenevolat.org//\" target=\"_blank\">
                    <img src=\"{{ asset('bundles/mmhsite/img/logos_partenaires/FranceBenevolat.png') }}\" alt=\"logo France benevolat\">
                </a>
                <a href=\"http://www.comexpert.com/\" target=\"_blank\">
                    <img src=\"{{ asset('bundles/mmhsite/img/logos_partenaires/ComeXpert.jpg') }}\" alt=\"logo comexpert\">
                </a>
                <a href=\"http://www.initiativesetcite.com/\" target=\"_blank\">
                    <img src=\"{{ asset('bundles/mmhsite/img/logos_partenaires/InitiativesCites.png') }}\" alt=\"logo initiativescites\">
                </a>
                <a href=\"#\">
                    <img src=\"{{ asset('bundles/mmhsite/img/logos_partenaires/Sivao.jpg') }}\" alt=\"logo sivao\">
                </a>
                <a href=\"http://www.payplug.com/\" target=\"_blank\">
                    <img src=\"{{ asset('bundles/mmhsite/img/logos_partenaires/payplug.png') }}\" alt=\"payplug\">
                </a>
            </figure>
        </section>

        <!-- Aside with the submenus and the social medias -->
        <aside>

            <!-- Sub menu -->
            <div class=\"wrapper flex\">
                <ul>
                    <li class=\"title-list\">MyMoneyHelp</li>
                    <li><a href=\"{{ path('mmh_static_association')}}\">Qui sommes-nous ?</a></li>
                    <li><a href=\"{{ path('mmh_static_soutenir')}}\">Nous soutenir</a></li>
                    <li><a href=\"{{ path('mmh_static_conditions')}}\">Conditions générales<br> d'utilisation</a></li>
                    <li><a href=\"{{ path('mmh_static_mentions')}}\">Mentions légales</a></li>
                    <li><a href=\"{{ path('mmh_static_contact')}}\">Contact</a></li>
                </ul>
                <ul>
                    <li><a href=\"{{ path('mmh_site_decouvrir')}}\" class=\"title-list\">Découvrir les projets</a></li>
                </ul>
                <ul>
                    <li><a href=\"{{ path('mmh_static_deposer')}}\" class=\"title-list\">Déposer un projet</a></li>
                </ul>

                <div class=\"twitter-container\">
                    <a class=\"twitter-timeline\" data-lang=\"fr\" data-width=\"600\" data-heigth=\"400\" data-lang=\"fr\" data-theme=\"dark\" href=\"https://twitter.com/MyMoneyHelp\">Tweets by MyMoneyHelp</a>
                    <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
                </div>

            </div>

            <!-- Social medias icons -->
            <figure class=\"flex wrapper\">
                <a href=\"https://www.facebook.com/mymoneyhelp/\">
                    <img src=\"{{ asset('bundles/mmhsite/img/logos_RS/facebook_vert.png') }}\" alt=\"icon facebook\">

                </a>
                <a href=\"https://twitter.com/mymoneyhelp\">
                    <img src=\"{{ asset('bundles/mmhsite/img/logos_RS/twitter_vert.png') }}\" alt=\"icon twitter\">
                </a>
                <a href=\"https://www.linkedin.com/in/mymoneyhelp-crowdfunding-39a94498\">
                    <img src=\"{{ asset('bundles/mmhsite/img/logos_RS/linkedin_vert.png') }}\" alt=\"icon linkedin\">
                </a>
                <a href=\"https://plus.google.com/+MyMoneyHelpFr\">
                    <img src=\"{{ asset('bundles/mmhsite/img/logos_RS/google-plus_vert.png') }}\" alt=\"icon googleplus\">
                </a>
                <a href=\"#\">
                    <img src=\"{{ asset('bundles/mmhsite/img/logos_RS/pinterest_vert.png') }}\" alt=\"icon pinterest\">
                </a>
            </figure>

            <!-- Credits -->
            <p>MyMoneyHelp 2016 tous droits réservés. Une réalisation de
                <a href=\"http://abdifatah-ibrahim.fr/\" target=\"_blank\">Abdifatah, </a>
                <a href=\"http://www.etiennedh.com/\" target=\"_blank\">Etienne, </a>
                <a href=\"#\">Jean, </a>
                <a href=\"https://www.thomas-gossart.fr\" target=\"_blank\"> Thomas et </a>
                <a href=\"\">Yanis </a> pour <a href=\"http://simplon.co/roubaix/\" target=\"_blank\">Simplon Roubaix</a>
            </p>
        </aside>

    </footer>

    <!--**************************** /FOOTER ***********************************-->

    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
    <script src=\"{{ asset('bundles/mmhsite/js/plugins.js')}}\"></script>
    <script src=\"{{ asset('bundles/mmhsite/js/main.js')}}\"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = 'https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>
";
    }
}
