<?php

/* MMHStaticBundle:Conditions:conditions.html.twig */
class __TwigTemplate_4859f9131048c9b1eb2ebe4c421c2c6578d20a153a221b1c9e0c0fdf2a6e7aae extends Twig_Template
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
    public function block_headtitle($context, array $blocks = array())
    {
        echo "Conditions légales";
    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
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
        return array (  52 => 10,  49 => 9,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'MMHStaticBundle::staticlayout.html.twig' %}

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
";
    }
}
