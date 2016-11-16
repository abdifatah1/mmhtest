<?php

/* MMHStaticBundle:Conditions:conditions.html.twig */
class __TwigTemplate_20b435702a6cd3b430fd4d387c7744e1c07822497a2c66543718187773b63910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMHStaticBundle::staticlayout.html.twig", "MMHStaticBundle:Conditions:conditions.html.twig", 1);
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
        $__internal_a56f0c5aca9e82cb85f947ea11893bacfcc131e0928c05ab9d1832ed0f5471cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56f0c5aca9e82cb85f947ea11893bacfcc131e0928c05ab9d1832ed0f5471cb->enter($__internal_a56f0c5aca9e82cb85f947ea11893bacfcc131e0928c05ab9d1832ed0f5471cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHStaticBundle:Conditions:conditions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a56f0c5aca9e82cb85f947ea11893bacfcc131e0928c05ab9d1832ed0f5471cb->leave($__internal_a56f0c5aca9e82cb85f947ea11893bacfcc131e0928c05ab9d1832ed0f5471cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8770cf6f524e86dd3f6873a6b11b5048fd09a9c7cc95a8f34c00c742e8ca40e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8770cf6f524e86dd3f6873a6b11b5048fd09a9c7cc95a8f34c00c742e8ca40e4->enter($__internal_8770cf6f524e86dd3f6873a6b11b5048fd09a9c7cc95a8f34c00c742e8ca40e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Conditions:conditions.html.twig"));

        echo "My Money Help";
        
        $__internal_8770cf6f524e86dd3f6873a6b11b5048fd09a9c7cc95a8f34c00c742e8ca40e4->leave($__internal_8770cf6f524e86dd3f6873a6b11b5048fd09a9c7cc95a8f34c00c742e8ca40e4_prof);

    }

    // line 5
    public function block_metadescription($context, array $blocks = array())
    {
        $__internal_23101bee3648386687ede5a916c6bdf3ff6cb979cf303f4c9f4657d6d5b74128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23101bee3648386687ede5a916c6bdf3ff6cb979cf303f4c9f4657d6d5b74128->enter($__internal_23101bee3648386687ede5a916c6bdf3ff6cb979cf303f4c9f4657d6d5b74128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Conditions:conditions.html.twig"));

        echo "Plateforme de financement participatif MyMoneyHelp";
        
        $__internal_23101bee3648386687ede5a916c6bdf3ff6cb979cf303f4c9f4657d6d5b74128->leave($__internal_23101bee3648386687ede5a916c6bdf3ff6cb979cf303f4c9f4657d6d5b74128_prof);

    }

    // line 7
    public function block_headtitle($context, array $blocks = array())
    {
        $__internal_1f943204a0d6b5d83514f659dc4911e4f8caf318e10eecd24cf1326be1e8ac01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f943204a0d6b5d83514f659dc4911e4f8caf318e10eecd24cf1326be1e8ac01->enter($__internal_1f943204a0d6b5d83514f659dc4911e4f8caf318e10eecd24cf1326be1e8ac01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Conditions:conditions.html.twig"));

        echo "Conditions légales";
        
        $__internal_1f943204a0d6b5d83514f659dc4911e4f8caf318e10eecd24cf1326be1e8ac01->leave($__internal_1f943204a0d6b5d83514f659dc4911e4f8caf318e10eecd24cf1326be1e8ac01_prof);

    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        $__internal_5c84d8c116895946087dc6202f88ad58ed6a11122dd66a142e73a81eea50a91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c84d8c116895946087dc6202f88ad58ed6a11122dd66a142e73a81eea50a91f->enter($__internal_5c84d8c116895946087dc6202f88ad58ed6a11122dd66a142e73a81eea50a91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHStaticBundle:Conditions:conditions.html.twig"));

        // line 10
        echo "
<!-- General wrapper for the content -->
<div class=\"wrapper-static-content flex\">
  <!-- Main section on the left with text and image content -->
  <section class=\"static-content-section\">
      <h2>1. Acceptation des conditions générales d’utilisation du site</h2>
      <p>L’utilisation du site http://www.mymoneyhelp.fr implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les
          utilisateurs du site http://www.mymoneyhelp.fr sont donc invités à les consulter de manière régulière.<br>
          <br>Ce site est normalement accessible à tout moment aux utilisateurs c’est-à-dire aux internautes qui utilisent le site http://www.mymoneyhelp.fr.<br><br>
          Une interruption pour raison de maintenance technique peut être toutefois décidée par http://www.mymoneyhelp.fr, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.<br><br>
          De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer afin d’en prendre connaissance.</p>

      <h2>2. Limitations contractuelles sur les données techniques</h2>
      <p>Le site Internet mymoneyhelp.fr, ne pourra être tenu responsable de dommages matériels directs ou indirects liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas
          de virus et avec un navigateur de dernière génération mis-à-jour.</p>

      <h2>3. Propriété intellectuelle et contrefaçons</h2>
      <p>L’association MyMoneyHelp est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.<br><br>
          Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de l’association MyMoneyHelp.<br><br>
          Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété
          Intellectuelle.<br><br>
          Le site ne peut être utilisé à des fins commerciales ou publicitaires.</p>

      <h2>4. Dons</h2>
      <p>Les dons sont effectués directement par les donateurs vers les porteurs de projets en ligne sur le site internet et ne transitent pas par MyMoneyHelp.<br><br>
          MyMoneyHelp ne prélève aucune commission sur les dons effectués.<br><br>
          L’origine des fonds versés par les donateurs aux porteurs de projets ne doit en aucune cas provenir d’une activité illégale.</p>

      <h2>5. Limitations de responsabilité</h2>
      <p>L’association MyMoneyHelp ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications, soit de
          l’apparition d’un bug ou d’une incompatibilité.<br><br>
          L’association MyMoneyHelp ne pourra également être tenue responsable des dommages indirects (tels que l’échec d’une collecte ou perte d’une chance) consécutifs à l’utilisation du site http://www.mymoneyhelp.fr.<br><br>
          Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. L’association MyMoneyHelp se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace
          qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, l’association se réserve également la possibilité de mettre en cause la responsabilité civile et/ou
          pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé.</p>

      <h2>6. Gestion des données personnelles</h2>
      <p>Conformément à la loi n° 78-87 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l’informatique, aux fichiers et aux libertés, le site est déclaré à la CNIL.<br><br>
          Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.<br><br>
          A l’occasion de l’utilisation du site http://www.mymoneyhelp.fr, peuvent être recueillies : l’URL des liens par l’intermédiaire desquels l’utilisateur a accédé au site http://www.mymoneyhelp.fr, le fournisseur d’accès de l’utilisateur, l’adresse de
          protocole Internet (IP) de l’utilisateur.<br><br>
          Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données
          personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.<br><br>
          Aucune information personnelle de l’utilisateur du site http://www.mymoneyhelp.fr n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers.</p>

      <h2>7. Liens hypertextes et cookies</h2>
      <p>Le Site peut contenir des liens hypertextes renvoyant vers d’autres sites web. L’utilisateur visite ces sites sous sa seule et entière responsabilité. MyMoneyHelp n’est en aucun cas responsable du contenu et des pratiques concernant la protection
          des données des autres sites web.<br><br>
          La navigation sur le site http://www.mymoneyhelp.fr est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui
          enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation. Le refus
          d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services.</p>

      <h2>8. Droit applicable et attribution de juridiction</h2>
      <p>Tout litige en relation avec l’utilisation du site http://www.mymoneyhelp.fr est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Lille.</p>
";
        
        $__internal_5c84d8c116895946087dc6202f88ad58ed6a11122dd66a142e73a81eea50a91f->leave($__internal_5c84d8c116895946087dc6202f88ad58ed6a11122dd66a142e73a81eea50a91f_prof);

    }

    public function getTemplateName()
    {
        return "MMHStaticBundle:Conditions:conditions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 10,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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

{% block headtitle %}Conditions légales{% endblock %}

{% block section %}

<!-- General wrapper for the content -->
<div class=\"wrapper-static-content flex\">
  <!-- Main section on the left with text and image content -->
  <section class=\"static-content-section\">
      <h2>1. Acceptation des conditions générales d’utilisation du site</h2>
      <p>L’utilisation du site http://www.mymoneyhelp.fr implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les
          utilisateurs du site http://www.mymoneyhelp.fr sont donc invités à les consulter de manière régulière.<br>
          <br>Ce site est normalement accessible à tout moment aux utilisateurs c’est-à-dire aux internautes qui utilisent le site http://www.mymoneyhelp.fr.<br><br>
          Une interruption pour raison de maintenance technique peut être toutefois décidée par http://www.mymoneyhelp.fr, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.<br><br>
          De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer afin d’en prendre connaissance.</p>

      <h2>2. Limitations contractuelles sur les données techniques</h2>
      <p>Le site Internet mymoneyhelp.fr, ne pourra être tenu responsable de dommages matériels directs ou indirects liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas
          de virus et avec un navigateur de dernière génération mis-à-jour.</p>

      <h2>3. Propriété intellectuelle et contrefaçons</h2>
      <p>L’association MyMoneyHelp est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.<br><br>
          Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de l’association MyMoneyHelp.<br><br>
          Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété
          Intellectuelle.<br><br>
          Le site ne peut être utilisé à des fins commerciales ou publicitaires.</p>

      <h2>4. Dons</h2>
      <p>Les dons sont effectués directement par les donateurs vers les porteurs de projets en ligne sur le site internet et ne transitent pas par MyMoneyHelp.<br><br>
          MyMoneyHelp ne prélève aucune commission sur les dons effectués.<br><br>
          L’origine des fonds versés par les donateurs aux porteurs de projets ne doit en aucune cas provenir d’une activité illégale.</p>

      <h2>5. Limitations de responsabilité</h2>
      <p>L’association MyMoneyHelp ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications, soit de
          l’apparition d’un bug ou d’une incompatibilité.<br><br>
          L’association MyMoneyHelp ne pourra également être tenue responsable des dommages indirects (tels que l’échec d’une collecte ou perte d’une chance) consécutifs à l’utilisation du site http://www.mymoneyhelp.fr.<br><br>
          Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. L’association MyMoneyHelp se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace
          qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, l’association se réserve également la possibilité de mettre en cause la responsabilité civile et/ou
          pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé.</p>

      <h2>6. Gestion des données personnelles</h2>
      <p>Conformément à la loi n° 78-87 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l’informatique, aux fichiers et aux libertés, le site est déclaré à la CNIL.<br><br>
          Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.<br><br>
          A l’occasion de l’utilisation du site http://www.mymoneyhelp.fr, peuvent être recueillies : l’URL des liens par l’intermédiaire desquels l’utilisateur a accédé au site http://www.mymoneyhelp.fr, le fournisseur d’accès de l’utilisateur, l’adresse de
          protocole Internet (IP) de l’utilisateur.<br><br>
          Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données
          personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.<br><br>
          Aucune information personnelle de l’utilisateur du site http://www.mymoneyhelp.fr n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers.</p>

      <h2>7. Liens hypertextes et cookies</h2>
      <p>Le Site peut contenir des liens hypertextes renvoyant vers d’autres sites web. L’utilisateur visite ces sites sous sa seule et entière responsabilité. MyMoneyHelp n’est en aucun cas responsable du contenu et des pratiques concernant la protection
          des données des autres sites web.<br><br>
          La navigation sur le site http://www.mymoneyhelp.fr est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui
          enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation. Le refus
          d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services.</p>

      <h2>8. Droit applicable et attribution de juridiction</h2>
      <p>Tout litige en relation avec l’utilisation du site http://www.mymoneyhelp.fr est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Lille.</p>
{% endblock %}
", "MMHStaticBundle:Conditions:conditions.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/StaticBundle/Resources/views/Conditions/conditions.html.twig");
    }
}
