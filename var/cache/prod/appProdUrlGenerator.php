<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'mmh_admin_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMH\\AdminBundle\\Controller\\AdminController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administration',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_admin_tableau' => array (  0 =>   array (    0 => 'nom',  ),  1 =>   array (    '_controller' => 'MMH\\AdminBundle\\Controller\\AdminController::tableauAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nom',    ),    1 =>     array (      0 => 'text',      1 => '/administration/tableau-de-bord',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_static_association' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::associationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/qui-sommes-nous',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_static_soutenir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::soutenirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nous-soutenir',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_static_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_static_deposer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::deposerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deposer-un-projet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_static_mentions' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::mentionsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mentions-legales',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_static_conditions' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::conditionsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/conditions-generales',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_static_blog' => array (  0 =>   array (    0 => 'year',    1 => 'article',  ),  1 =>   array (    '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::blogAction',  ),  2 =>   array (    'year' => '\\d{4}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'article',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d{4}',      3 => 'year',    ),    2 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_site_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMH\\SiteBundle\\Controller\\ProjetsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_site_decouvrir' => array (  0 =>   array (    0 => 'categorie',  ),  1 =>   array (    '_controller' => 'MMH\\SiteBundle\\Controller\\ProjetsController::decouvrirAction',    'categorie' => 'generale',  ),  2 =>   array (    'categorie' => '\\w*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\w*',      3 => 'categorie',    ),    1 =>     array (      0 => 'text',      1 => '/decouvrir-les-projets',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_site_projet' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMH\\SiteBundle\\Controller\\ProjetsController::projetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_site_inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMH\\SiteBundle\\Controller\\TransactionController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_site_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMH\\SiteBundle\\Controller\\TransactionController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_site_financement' => array (  0 =>   array (    0 => 'projet',  ),  1 =>   array (    '_controller' => 'MMH\\SiteBundle\\Controller\\TransactionController::financementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'projet',    ),    1 =>     array (      0 => 'text',      1 => '/financement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mmh_site_membre' => array (  0 =>   array (    0 => 'membre',  ),  1 =>   array (    '_controller' => 'MMH\\SiteBundle\\Controller\\TransactionController::membreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'membre',    ),    1 =>     array (      0 => 'text',      1 => '/espace',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
