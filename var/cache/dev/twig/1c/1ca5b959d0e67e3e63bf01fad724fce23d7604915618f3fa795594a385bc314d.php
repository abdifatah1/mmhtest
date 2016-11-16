<?php

/* MMHSiteBundle::sliderlayout.html.twig */
class __TwigTemplate_1c928c15f4d0fbd3c8682b70b2e7b9f486df18814abeb8dd4d73023e748954c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baselayout.html.twig", "MMHSiteBundle::sliderlayout.html.twig", 1);
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
        $__internal_6cdbc6df1b63918932b3a61f2b766d41b47485d6d5e6c282cf196f356a4e06cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdbc6df1b63918932b3a61f2b766d41b47485d6d5e6c282cf196f356a4e06cb->enter($__internal_6cdbc6df1b63918932b3a61f2b766d41b47485d6d5e6c282cf196f356a4e06cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMHSiteBundle::sliderlayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cdbc6df1b63918932b3a61f2b766d41b47485d6d5e6c282cf196f356a4e06cb->leave($__internal_6cdbc6df1b63918932b3a61f2b766d41b47485d6d5e6c282cf196f356a4e06cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78e448a65df687cb09f12a112934ee924fb66cb302883a2f960077b0cf84c162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e448a65df687cb09f12a112934ee924fb66cb302883a2f960077b0cf84c162->enter($__internal_78e448a65df687cb09f12a112934ee924fb66cb302883a2f960077b0cf84c162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle::sliderlayout.html.twig"));

        // line 4
        echo "
<!--***************************** SLIDER *********************************-->

<section class=\"slider\">
    <!-- Carousel wrapper for higher res -->
    <div class=\"slider-wrapper flex\">
        <!-- Pictures -->
        <div class=\"carousel\">
            <ul>

                <li>
                    <figure><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/slider/crowdfunding.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"slide-picture slide1 active\" /></figure>
                </li>


                <li>
                    <figure><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/slider/slider-4.png"), "html", null, true);
        echo "\" alt=\"\" class=\"slide-picture slide2\" /></figure>
                </li>


                <li>
                    <figure><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/slider/slider-1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"slide-picture slide3\" /></figure>
                </li>

            </ul>
            <!-- Arrows -->

            <div class=\"arrow-left arrow\">
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/left-arrow.png"), "html", null, true);
        echo "\" class=\"arrows\" onclick=\"changeImage('previous')\" alt=\"flèche gauche\" />
            </div>

            <div class=\"arrow-right arrow\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mmhsite/img/right-arrow.png"), "html", null, true);
        echo "\" class=\"arrows\" onclick=\"changeImage('next')\" alt=\"flèche droite\" />
            </div>
            <!-- /Arrows -->

            <!-- Circles -->
            <div class=\"carousel-circles flex\">
                <div class=\"circle1\" onclick=\"pickASlide('0')\"></div>
                <div class=\"circle2\" onclick=\"pickASlide('1')\"></div>
                <div class=\"circle3\" onclick=\"pickASlide('2')\"></div>
            </div>
            <!-- /Circles -->
        </div>
        <!-- /Pictures -->

        <div class=\"carousel-info\">
            <!-- Info Panel Wrapper -->
            <div class=\"carousel-info-wrapper flex\">
                <!-- Slide 1 -->
                <div class=\"slide slide1-txt active\">
                    <!-- Title -->
                    <h2 >Un Winch pour \"rider\" sur l'eau. Avec l'association des winners</h2>
                    <!-- /Title -->
                    <!-- Texte -->
                    <div class=\"slide-text\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore.
                        </p>
                    </div>
                    <!-- /Texte -->
                    <!-- Contribute ! -->
                    <div class=\"contribute\">
                        <a href=\"projet.html\" class=\"button slider-button\">Contribuer</a>
                    </div>
                    <!-- /Contribute -->
                    <!-- Stats -->
                    <div class=\"slide-stats flex\">

                        <div class=\"stat flex\">
                            <span>161%</span>
                            <p>Financé</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>3370 €</span>
                            <p>contribués</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>2000 €</span>
                            <p>objectif</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>66</span>
                            <p>Supporteurs</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>J-30</span>
                        </div>
                    </div>
                    <!-- /Stats -->
                </div>
                <!-- /Slide 1 -->

                <!-- Slide 2 -->
                <div class=\"slide slide2-txt\">
                    <!-- Title -->
                    <h2>Des bouées pour sauver des vies</h2>
                    <!-- /Title -->
                    <!-- Texte -->
                    <div class=\"slide-text\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore.
                        </p>
                    </div>
                    <!-- /Texte -->
                    <!-- Contribute ! -->
                    <div class=\"contribute\">
                        <a href=\"#\" class=\"button slider-button\">Contribuer</a>
                    </div>
                    <!-- /Contribute -->
                    <!-- Stats -->
                    <div class=\"slide-stats flex\">

                        <div class=\"stat flex\">
                            <span>20%</span>
                            <p>Financé</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>8500 €</span>
                            <p>contribués</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>175000 €</span>
                            <p>objectif</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>17</span>
                            <p>Supporteurs</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>J-50</span>
                        </div>
                    </div>
                    <!-- /Stats -->
                </div>
                <!-- /Slide 2 -->

                <!-- Slide 3 -->
                <div class=\"slide slide3-txt\">
                    <!-- Title -->
                    <h2>Soutenez Linolin</h2>
                    <!-- /Title -->
                    <!-- Texte -->
                    <div class=\"slide-text\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore.
                        </p>
                    </div>
                    <!-- /Texte -->
                    <!-- Contribute ! -->
                    <div class=\"contribute\">
                        <a href=\"#\" class=\"button slider-button\">Contribuer</a>
                    </div>
                    <!-- /Contribute -->
                    <!-- Stats -->
                    <div class=\"slide-stats flex\">

                        <div class=\"stat flex\">
                            <span>450%</span>
                            <p>Financé</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>10250 €</span>
                            <p>contribués</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>2000 €</span>
                            <p>objectif</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>1200</span>
                            <p>Supporteurs</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>J-50</span>
                        </div>
                    </div>
                    <!-- /Stats -->
                </div>
                <!-- /Slide 3 -->
            </div>
            <!-- /Info Panel Wrapper -->

        </div>
        <!-- Carousel Info -->
    </div>
    <!-- /Carousel wrapper -->
</section>

<!--***************************** /SLIDER **********************************-->
";
        // line 203
        $this->displayBlock('section', $context, $blocks);
        // line 206
        echo "
";
        
        $__internal_78e448a65df687cb09f12a112934ee924fb66cb302883a2f960077b0cf84c162->leave($__internal_78e448a65df687cb09f12a112934ee924fb66cb302883a2f960077b0cf84c162_prof);

    }

    // line 203
    public function block_section($context, array $blocks = array())
    {
        $__internal_2170d194d3067d50bf9a68b2f0452b9d286d7bfcf329e2ef6502bbb044eed252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2170d194d3067d50bf9a68b2f0452b9d286d7bfcf329e2ef6502bbb044eed252->enter($__internal_2170d194d3067d50bf9a68b2f0452b9d286d7bfcf329e2ef6502bbb044eed252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MMHSiteBundle::sliderlayout.html.twig"));

        // line 204
        echo "
";
        
        $__internal_2170d194d3067d50bf9a68b2f0452b9d286d7bfcf329e2ef6502bbb044eed252->leave($__internal_2170d194d3067d50bf9a68b2f0452b9d286d7bfcf329e2ef6502bbb044eed252_prof);

    }

    public function getTemplateName()
    {
        return "MMHSiteBundle::sliderlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 204,  267 => 203,  259 => 206,  257 => 203,  87 => 36,  80 => 32,  70 => 25,  62 => 20,  54 => 15,  41 => 4,  35 => 3,  11 => 1,);
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

<!--***************************** SLIDER *********************************-->

<section class=\"slider\">
    <!-- Carousel wrapper for higher res -->
    <div class=\"slider-wrapper flex\">
        <!-- Pictures -->
        <div class=\"carousel\">
            <ul>

                <li>
                    <figure><img src=\"{{ asset('bundles/mmhsite/img/slider/crowdfunding.jpg') }}\" alt=\"\" class=\"slide-picture slide1 active\" /></figure>
                </li>


                <li>
                    <figure><img src=\"{{ asset('bundles/mmhsite/img/slider/slider-4.png') }}\" alt=\"\" class=\"slide-picture slide2\" /></figure>
                </li>


                <li>
                    <figure><img src=\"{{ asset('bundles/mmhsite/img/slider/slider-1.png') }}\" alt=\"\" class=\"slide-picture slide3\" /></figure>
                </li>

            </ul>
            <!-- Arrows -->

            <div class=\"arrow-left arrow\">
                <img src=\"{{ asset('bundles/mmhsite/img/left-arrow.png') }}\" class=\"arrows\" onclick=\"changeImage('previous')\" alt=\"flèche gauche\" />
            </div>

            <div class=\"arrow-right arrow\">
                <img src=\"{{ asset('bundles/mmhsite/img/right-arrow.png') }}\" class=\"arrows\" onclick=\"changeImage('next')\" alt=\"flèche droite\" />
            </div>
            <!-- /Arrows -->

            <!-- Circles -->
            <div class=\"carousel-circles flex\">
                <div class=\"circle1\" onclick=\"pickASlide('0')\"></div>
                <div class=\"circle2\" onclick=\"pickASlide('1')\"></div>
                <div class=\"circle3\" onclick=\"pickASlide('2')\"></div>
            </div>
            <!-- /Circles -->
        </div>
        <!-- /Pictures -->

        <div class=\"carousel-info\">
            <!-- Info Panel Wrapper -->
            <div class=\"carousel-info-wrapper flex\">
                <!-- Slide 1 -->
                <div class=\"slide slide1-txt active\">
                    <!-- Title -->
                    <h2 >Un Winch pour \"rider\" sur l'eau. Avec l'association des winners</h2>
                    <!-- /Title -->
                    <!-- Texte -->
                    <div class=\"slide-text\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore.
                        </p>
                    </div>
                    <!-- /Texte -->
                    <!-- Contribute ! -->
                    <div class=\"contribute\">
                        <a href=\"projet.html\" class=\"button slider-button\">Contribuer</a>
                    </div>
                    <!-- /Contribute -->
                    <!-- Stats -->
                    <div class=\"slide-stats flex\">

                        <div class=\"stat flex\">
                            <span>161%</span>
                            <p>Financé</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>3370 €</span>
                            <p>contribués</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>2000 €</span>
                            <p>objectif</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>66</span>
                            <p>Supporteurs</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>J-30</span>
                        </div>
                    </div>
                    <!-- /Stats -->
                </div>
                <!-- /Slide 1 -->

                <!-- Slide 2 -->
                <div class=\"slide slide2-txt\">
                    <!-- Title -->
                    <h2>Des bouées pour sauver des vies</h2>
                    <!-- /Title -->
                    <!-- Texte -->
                    <div class=\"slide-text\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore.
                        </p>
                    </div>
                    <!-- /Texte -->
                    <!-- Contribute ! -->
                    <div class=\"contribute\">
                        <a href=\"#\" class=\"button slider-button\">Contribuer</a>
                    </div>
                    <!-- /Contribute -->
                    <!-- Stats -->
                    <div class=\"slide-stats flex\">

                        <div class=\"stat flex\">
                            <span>20%</span>
                            <p>Financé</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>8500 €</span>
                            <p>contribués</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>175000 €</span>
                            <p>objectif</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>17</span>
                            <p>Supporteurs</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>J-50</span>
                        </div>
                    </div>
                    <!-- /Stats -->
                </div>
                <!-- /Slide 2 -->

                <!-- Slide 3 -->
                <div class=\"slide slide3-txt\">
                    <!-- Title -->
                    <h2>Soutenez Linolin</h2>
                    <!-- /Title -->
                    <!-- Texte -->
                    <div class=\"slide-text\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore, sed do eiusmod tempor incididunt ut labore.
                        </p>
                    </div>
                    <!-- /Texte -->
                    <!-- Contribute ! -->
                    <div class=\"contribute\">
                        <a href=\"#\" class=\"button slider-button\">Contribuer</a>
                    </div>
                    <!-- /Contribute -->
                    <!-- Stats -->
                    <div class=\"slide-stats flex\">

                        <div class=\"stat flex\">
                            <span>450%</span>
                            <p>Financé</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>10250 €</span>
                            <p>contribués</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>2000 €</span>
                            <p>objectif</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>1200</span>
                            <p>Supporteurs</p>
                        </div>

                        <div class=\"stat flex\">
                            <span>J-50</span>
                        </div>
                    </div>
                    <!-- /Stats -->
                </div>
                <!-- /Slide 3 -->
            </div>
            <!-- /Info Panel Wrapper -->

        </div>
        <!-- Carousel Info -->
    </div>
    <!-- /Carousel wrapper -->
</section>

<!--***************************** /SLIDER **********************************-->
{% block section %}

{% endblock %}

{% endblock %}
", "MMHSiteBundle::sliderlayout.html.twig", "/var/www/html/MyMoneyHelp/src/MMH/SiteBundle/Resources/views/sliderlayout.html.twig");
    }
}
