<?php

/* MMHSiteBundle::sliderlayout.html.twig */
class __TwigTemplate_745ccd215b752fc25dd1114fd7ed21fd91e7c06d7544f24e783ab7f23699ad00 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
                    <h2 class=\"carousel-title\">Un Winch pour \"rider\" sur l'eau. Avec l'association des winners</h2>
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
    }

    // line 203
    public function block_section($context, array $blocks = array())
    {
        // line 204
        echo "
";
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
        return array (  258 => 204,  255 => 203,  250 => 206,  248 => 203,  78 => 36,  71 => 32,  61 => 25,  53 => 20,  45 => 15,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::baselayout.html.twig' %}

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
                    <h2 class=\"carousel-title\">Un Winch pour \"rider\" sur l'eau. Avec l'association des winners</h2>
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
";
    }
}
