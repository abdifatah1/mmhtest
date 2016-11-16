<?php

/* MMHStaticBundle:About:about.html.twig */
class __TwigTemplate_2ac2b7fc45a4945f770144739ac5d9ced19a42a5df001dbd4ad1c818236705b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMHStaticBundle::staticlayout.html.twig", "MMHStaticBundle:About:about.html.twig", 1);
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
        $__internal_40e2e5fdf0cd4c4208c0a74a5f7bf9536ae07ba1c2091de61e447e9da99a058e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e2e5fdf0cd4c4208c0a74a5f7bf9536ae07ba1c2091de61e447e9da99a058e->enter($__internal_40e2e5fdf0cd4c4208c0a74a5f7bf9536ae07ba1c2091de61e447e9da99a058e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHStaticBundle:About:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40e2e5fdf0cd4c4208c0a74a5f7bf9536ae07ba1c2091de61e447e9da99a058e->leave($__internal_40e2e5fdf0cd4c4208c0a74a5f7bf9536ae07ba1c2091de61e447e9da99a058e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f95582a6d56fd6c76339a69c5042b28f9d92c127b8b652785647ba33ff74a7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95582a6d56fd6c76339a69c5042b28f9d92c127b8b652785647ba33ff74a7fd->enter($__internal_f95582a6d56fd6c76339a69c5042b28f9d92c127b8b652785647ba33ff74a7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:About:about.html.twig"));

        echo "My Money Help";
        
        $__internal_f95582a6d56fd6c76339a69c5042b28f9d92c127b8b652785647ba33ff74a7fd->leave($__internal_f95582a6d56fd6c76339a69c5042b28f9d92c127b8b652785647ba33ff74a7fd_prof);

    }

    // line 5
    public function block_metadescription($context, array $blocks = array())
    {
        $__internal_78119d3ec6151c60eba24b62b50ca8684dac81e82869cfc1d327b7e44d5518b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78119d3ec6151c60eba24b62b50ca8684dac81e82869cfc1d327b7e44d5518b5->enter($__internal_78119d3ec6151c60eba24b62b50ca8684dac81e82869cfc1d327b7e44d5518b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:About:about.html.twig"));

        echo "Plateforme de financement participatif MyMoneyHelp";
        
        $__internal_78119d3ec6151c60eba24b62b50ca8684dac81e82869cfc1d327b7e44d5518b5->leave($__internal_78119d3ec6151c60eba24b62b50ca8684dac81e82869cfc1d327b7e44d5518b5_prof);

    }

    // line 9
    public function block_headtitle($context, array $blocks = array())
    {
        $__internal_ac2bb01cdb4b74dbe5e47b7382949ee3e1f5c6bb4a975862e5e84ffd7df7c5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2bb01cdb4b74dbe5e47b7382949ee3e1f5c6bb4a975862e5e84ffd7df7c5cc->enter($__internal_ac2bb01cdb4b74dbe5e47b7382949ee3e1f5c6bb4a975862e5e84ffd7df7c5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:About:about.html.twig"));

        echo "Qui Sommes nous ?";
        
        $__internal_ac2bb01cdb4b74dbe5e47b7382949ee3e1f5c6bb4a975862e5e84ffd7df7c5cc->leave($__internal_ac2bb01cdb4b74dbe5e47b7382949ee3e1f5c6bb4a975862e5e84ffd7df7c5cc_prof);

    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        $__internal_8ea388d0eb305915852ef844cd5bb2787fd4f596d2a6409953344d4302f59a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea388d0eb305915852ef844cd5bb2787fd4f596d2a6409953344d4302f59a76->enter($__internal_8ea388d0eb305915852ef844cd5bb2787fd4f596d2a6409953344d4302f59a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:About:about.html.twig"));

        // line 12
        echo "<!--************************** MAIN CONTENT ********************************-->

<!-- General wrapper for the content -->
    <div class=\"wrapper-static-content flex\">

      <!-- Main section on the left with text and image content -->
      <section class=\"static-content-section\">
        <h2>Notre plateforme en 3 points</h2>
        <ol>
          <li>
            <h3>Notre plateforme est gratuite</h3>
            <p>Sans frais ni commissions quel que soit le montant de la collecte.<br><br>
              MyMoneyHelp est une plateforme indépendante et tous les membres sont des bénévoles.<br><br>
              Nous soutenons tous les projets créatifs, innovants, qui concilient utilité sociale et efficacité économique.</p>
              <figure>
                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/content/femme_saut.jpg"), "html", null, true);
        echo "\"  alt=\"femme sautant avec un ruban\" class=\"static-image\">
              </figure>
          </li>

          <li>
            <h3>Nous vous garantissons le versement de tous vos dons quel que soit le montant collecté </h3>
            <div class=\"static-headline\">
              <span>Pas de « tout ou rien » !!!</span>
            </div>
            <p>Les dons sont versés intégralement et directement aux porteurs de projet.<br><br>
            Possibilité de prolonger la période de collecte si besoin.<br><br>
             Besoin de plus de renseignements ? Nous sommes à votre écoute.</p>
            <figure>
              <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/content/homme_grimpe.jpg"), "html", null, true);
        echo "\" alt=\"homme dessinant une fresque de New-York\" class=\"static-image\">
            </figure>
          </li>

          <li>
            <h3>Nous pouvons si besoin accompagner les porteurs de projets</h3>
            <p>Notre équipe comporte diverses compétences à la disposition des porteurs de projets ;<br>
            MyMoneyHelp dispose d’un réseau d’acteurs et de partenaires qui peuvent faciliter la réalisation de vos projets ;<br>
            Vous pouvez nous consulter même si vous n’êtes pas retenu sur notre plateforme.</p>
            <div class=\"static-headline\">
              <span>N'hésitez pas à <a href=\"soumettre-un-projet.html\">Déposer votre projet</a></span>
            </div>
          </li>
        </ol>

        <h2>Notre objectif</h2>
        <p>Les membres de l’association MyMoneyHelp sont tous des bénévoles, animés par la volonté de soutenir des projets ayant une forte utilité sociale, grâce :<br><br>
        - A la collecte de dons sur la plateforme pour favoriser l’autofinancement des projets ;<br>
        - Au réseau de compétence solidaire de MyMoneyHelp qui favorise la réussite du porteur de projet.
        </p>
        <figure>
          <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/content/cocinelles.jpg"), "html", null, true);
        echo "\" alt=\"cocinelles sur une feuille\" class=\"static-image\">
        </figure>
        <p>A travers cette plateforme, les membres de MyMoneyHelp proposent le triple don :</p>
        <ul>
          <li>
            <span class=\"static-don\">Le don de  soi :</span>
            <p>c’est le fait de se rendre disponible pour les autres. Ainsi, tous les membres de MyMoneyHelp soutiennent régulièrement
            personnellement ou collectivement des grandes causes nationales, telles que la lutte contre le cancer, le don du sang mais
            aussi la lutte contre le chômage et la pauvreté.</p>
          </li>
          <li>
            <span class=\"static-don\">Le don :</span>
            <p>c’est-à-dire le talent, la compétence ou le savoir-faire que les membres de l’association mettent de manière désintéressée,
            au service des projets ayant une forte utilité sociale.<br><br>
            Les membres de MyMoneyHelp forment aussi un réseau de compétence solidaire au service de la réussite des projets.</p>
          </li>
          <li>
            <span class=\"static-don\">Le don financier :</span>
            <p>c’est l’appel à notre générosité sous forme de paiements en ligne sur notre site pour soutenir les projets sélectionnés
            par des experts au sein de du comité des projets de MyMoneyHelp.</p>
          </li>
        </ul>
        <div class=\"static-headline\">
          <span>Pour plus d'informations <a href=\"contact.html\">Contactez-nous</a></span>
        </div>


    <!--************************* /MAIN CONTENT ********************************-->




";
        
        $__internal_8ea388d0eb305915852ef844cd5bb2787fd4f596d2a6409953344d4302f59a76->leave($__internal_8ea388d0eb305915852ef844cd5bb2787fd4f596d2a6409953344d4302f59a76_prof);

    }

    public function getTemplateName()
    {
        return "MMHStaticBundle:About:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 61,  112 => 40,  96 => 27,  79 => 12,  73 => 11,  61 => 9,  49 => 5,  37 => 3,  11 => 1,);
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



{% block headtitle %}Qui Sommes nous ?{% endblock %}

{% block section %}
<!--************************** MAIN CONTENT ********************************-->

<!-- General wrapper for the content -->
    <div class=\"wrapper-static-content flex\">

      <!-- Main section on the left with text and image content -->
      <section class=\"static-content-section\">
        <h2>Notre plateforme en 3 points</h2>
        <ol>
          <li>
            <h3>Notre plateforme est gratuite</h3>
            <p>Sans frais ni commissions quel que soit le montant de la collecte.<br><br>
              MyMoneyHelp est une plateforme indépendante et tous les membres sont des bénévoles.<br><br>
              Nous soutenons tous les projets créatifs, innovants, qui concilient utilité sociale et efficacité économique.</p>
              <figure>
                <img src=\"{{ asset('bundles/mmhsite/img/content/femme_saut.jpg') }}\"  alt=\"femme sautant avec un ruban\" class=\"static-image\">
              </figure>
          </li>

          <li>
            <h3>Nous vous garantissons le versement de tous vos dons quel que soit le montant collecté </h3>
            <div class=\"static-headline\">
              <span>Pas de « tout ou rien » !!!</span>
            </div>
            <p>Les dons sont versés intégralement et directement aux porteurs de projet.<br><br>
            Possibilité de prolonger la période de collecte si besoin.<br><br>
             Besoin de plus de renseignements ? Nous sommes à votre écoute.</p>
            <figure>
              <img src=\"{{ asset('bundles/mmhsite/img/content/homme_grimpe.jpg') }}\" alt=\"homme dessinant une fresque de New-York\" class=\"static-image\">
            </figure>
          </li>

          <li>
            <h3>Nous pouvons si besoin accompagner les porteurs de projets</h3>
            <p>Notre équipe comporte diverses compétences à la disposition des porteurs de projets ;<br>
            MyMoneyHelp dispose d’un réseau d’acteurs et de partenaires qui peuvent faciliter la réalisation de vos projets ;<br>
            Vous pouvez nous consulter même si vous n’êtes pas retenu sur notre plateforme.</p>
            <div class=\"static-headline\">
              <span>N'hésitez pas à <a href=\"soumettre-un-projet.html\">Déposer votre projet</a></span>
            </div>
          </li>
        </ol>

        <h2>Notre objectif</h2>
        <p>Les membres de l’association MyMoneyHelp sont tous des bénévoles, animés par la volonté de soutenir des projets ayant une forte utilité sociale, grâce :<br><br>
        - A la collecte de dons sur la plateforme pour favoriser l’autofinancement des projets ;<br>
        - Au réseau de compétence solidaire de MyMoneyHelp qui favorise la réussite du porteur de projet.
        </p>
        <figure>
          <img src=\"{{ asset('bundles/mmhsite/img/content/cocinelles.jpg') }}\" alt=\"cocinelles sur une feuille\" class=\"static-image\">
        </figure>
        <p>A travers cette plateforme, les membres de MyMoneyHelp proposent le triple don :</p>
        <ul>
          <li>
            <span class=\"static-don\">Le don de  soi :</span>
            <p>c’est le fait de se rendre disponible pour les autres. Ainsi, tous les membres de MyMoneyHelp soutiennent régulièrement
            personnellement ou collectivement des grandes causes nationales, telles que la lutte contre le cancer, le don du sang mais
            aussi la lutte contre le chômage et la pauvreté.</p>
          </li>
          <li>
            <span class=\"static-don\">Le don :</span>
            <p>c’est-à-dire le talent, la compétence ou le savoir-faire que les membres de l’association mettent de manière désintéressée,
            au service des projets ayant une forte utilité sociale.<br><br>
            Les membres de MyMoneyHelp forment aussi un réseau de compétence solidaire au service de la réussite des projets.</p>
          </li>
          <li>
            <span class=\"static-don\">Le don financier :</span>
            <p>c’est l’appel à notre générosité sous forme de paiements en ligne sur notre site pour soutenir les projets sélectionnés
            par des experts au sein de du comité des projets de MyMoneyHelp.</p>
          </li>
        </ul>
        <div class=\"static-headline\">
          <span>Pour plus d'informations <a href=\"contact.html\">Contactez-nous</a></span>
        </div>


    <!--************************* /MAIN CONTENT ********************************-->




{% endblock %}
", "MMHStaticBundle:About:about.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/StaticBundle/Resources/views/About/about.html.twig");
    }
}
