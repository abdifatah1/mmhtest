<?php

/* MMHSiteBundle:Paiement:paiement.html.twig */
class __TwigTemplate_d5c7362ce84584a7c9ff9941614c074c0b4c633bc0d9afdbcc4c6132914fd5bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baselayout.html.twig", "MMHSiteBundle:Paiement:paiement.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baselayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec287c49d07fe6ff997de059877ce6b4587af08b240376c818f537dbe6f54f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec287c49d07fe6ff997de059877ce6b4587af08b240376c818f537dbe6f54f7f->enter($__internal_ec287c49d07fe6ff997de059877ce6b4587af08b240376c818f537dbe6f54f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHSiteBundle:Paiement:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec287c49d07fe6ff997de059877ce6b4587af08b240376c818f537dbe6f54f7f->leave($__internal_ec287c49d07fe6ff997de059877ce6b4587af08b240376c818f537dbe6f54f7f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c8bcd112e799f12a38c898528b011e6d3e3952bffc454c406b2b1ce38607113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8bcd112e799f12a38c898528b011e6d3e3952bffc454c406b2b1ce38607113->enter($__internal_0c8bcd112e799f12a38c898528b011e6d3e3952bffc454c406b2b1ce38607113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle:Paiement:paiement.html.twig"));

        // line 3
        echo "
<section class=\"static-page-title flex\">
  <h1>Soutenir le film \"Mémoire de terre, mémoire d'usine\"</h1>
</section>

<div class=\"wrapper-paiement\">
    <div class=\"checkbox\">
        <!-- checkbox choix montant -->
        <h2 class=\"title-checkbox\"> Montant de votre contribution :</h2>

        <label>
            <input class=\"euro\" type=\"checkbox\" id=\"cbox1\" value=\"premiere_checkbox\"> 10€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox2\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 20€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox3\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 30€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox4\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 40€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox5\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 50€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox5\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 60€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox5\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 70€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox5\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 80€ </label>
    </div>

    <!-- Detail du paiement -->

    <div class=\"resume-paiement\">
        <div class=\"project-resume\">
            <h2 class=\"paiement-validation\">Projet</h2>
            <img class=\"jardin\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/projets/jardin.jpg"), "html", null, true);
        echo "\" alt=\"jardin-travail\">
            <p class=\"text-project\">Texte de présentation rappelant rapidement les fondamentaux du projet.</p>
        </div>


        <div class=\"don\">
            <h2 class=\"paiement-validation\"> Don </h2>
            <p class=\"text-project\"> 10€ </p>

        </div>
        <div class=\"don-gift\">
            <h2 class=\"paiement-validation\"> Vous recevrez </h2>
            <p class=\"text-project3\"> Un grand merci sur facebook et votre nom sur le générique du film !</p>

        </div>
    </div>
    <div class=\"valid-paiement\">
        <div class=\"checkbox2\">
            <!-- Moyen de paiement -->
            <h2 class=\"moyen-paiement\">Moyen de paiement : </h2>
            <label>
                <input type=\"checkbox\" id=\"cbox1\" value=\"premiere_checkbox\"> chèque </label>

            <input type=\"checkbox\" id=\"cbox2\" value=\"deuxieme_checkbox\">
            <label for=\"cbox2\"> payplug </label>
        </div>


        <form class=\"form-style flex\" action=\"paiement.html\" method=\"post\">

            <h2 class=\"moyen-paiement\">Informations personnelles(ces informations resteront confidentielles) :</h2>


            <input class=\"form-color\" type=\"text\" id=\"Nom\" name=\"user_surname\" placeholder=\"Nom\">
            <br>
            <br>

            <input class=\"form-color\" type=\"text\" id=\"Prénom\" name=\"user_name\" placeholder=\"Prénom\">
            <br>
            <br>

            <input class=\"form-color\" type=\"email\" id=\"mail\" name=\"user_email\" placeholder=\"Adresse mail de facturation\">
            <br>
            <br>


        </form>


        <div class=\"contribute\">
            <a href=\"#\" class=\"contribute-button\">Contribuer (10€)</a>
        </div>



    </div>
    <!-- end detail du paiement-->


</div>
<!-------- End  Wrapper------->


";
        
        $__internal_0c8bcd112e799f12a38c898528b011e6d3e3952bffc454c406b2b1ce38607113->leave($__internal_0c8bcd112e799f12a38c898528b011e6d3e3952bffc454c406b2b1ce38607113_prof);

    }

    public function getTemplateName()
    {
        return "MMHSiteBundle:Paiement:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 43,  40 => 3,  34 => 2,  11 => 1,);
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

<section class=\"static-page-title flex\">
  <h1>Soutenir le film \"Mémoire de terre, mémoire d'usine\"</h1>
</section>

<div class=\"wrapper-paiement\">
    <div class=\"checkbox\">
        <!-- checkbox choix montant -->
        <h2 class=\"title-checkbox\"> Montant de votre contribution :</h2>

        <label>
            <input class=\"euro\" type=\"checkbox\" id=\"cbox1\" value=\"premiere_checkbox\"> 10€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox2\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 20€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox3\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 30€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox4\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 40€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox5\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 50€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox5\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 60€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox5\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 70€ </label>

        <input class=\"euro\" type=\"checkbox\" id=\"cbox5\" value=\"deuxieme_checkbox\">
        <label for=\"cbox2\"> 80€ </label>
    </div>

    <!-- Detail du paiement -->

    <div class=\"resume-paiement\">
        <div class=\"project-resume\">
            <h2 class=\"paiement-validation\">Projet</h2>
            <img class=\"jardin\" src=\"{{ asset('bundles/mmhsite/img/projets/jardin.jpg') }}\" alt=\"jardin-travail\">
            <p class=\"text-project\">Texte de présentation rappelant rapidement les fondamentaux du projet.</p>
        </div>


        <div class=\"don\">
            <h2 class=\"paiement-validation\"> Don </h2>
            <p class=\"text-project\"> 10€ </p>

        </div>
        <div class=\"don-gift\">
            <h2 class=\"paiement-validation\"> Vous recevrez </h2>
            <p class=\"text-project3\"> Un grand merci sur facebook et votre nom sur le générique du film !</p>

        </div>
    </div>
    <div class=\"valid-paiement\">
        <div class=\"checkbox2\">
            <!-- Moyen de paiement -->
            <h2 class=\"moyen-paiement\">Moyen de paiement : </h2>
            <label>
                <input type=\"checkbox\" id=\"cbox1\" value=\"premiere_checkbox\"> chèque </label>

            <input type=\"checkbox\" id=\"cbox2\" value=\"deuxieme_checkbox\">
            <label for=\"cbox2\"> payplug </label>
        </div>


        <form class=\"form-style flex\" action=\"paiement.html\" method=\"post\">

            <h2 class=\"moyen-paiement\">Informations personnelles(ces informations resteront confidentielles) :</h2>


            <input class=\"form-color\" type=\"text\" id=\"Nom\" name=\"user_surname\" placeholder=\"Nom\">
            <br>
            <br>

            <input class=\"form-color\" type=\"text\" id=\"Prénom\" name=\"user_name\" placeholder=\"Prénom\">
            <br>
            <br>

            <input class=\"form-color\" type=\"email\" id=\"mail\" name=\"user_email\" placeholder=\"Adresse mail de facturation\">
            <br>
            <br>


        </form>


        <div class=\"contribute\">
            <a href=\"#\" class=\"contribute-button\">Contribuer (10€)</a>
        </div>



    </div>
    <!-- end detail du paiement-->


</div>
<!-------- End  Wrapper------->


{% endblock %}
", "MMHSiteBundle:Paiement:paiement.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/SiteBundle/Resources/views/Paiement/paiement.html.twig");
    }
}
