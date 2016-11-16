<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/administration')) {
            // mmh_admin_admin
            if ($pathinfo === '/administration') {
                return array (  '_controller' => 'MMH\\AdminBundle\\Controller\\AdminController::adminAction',  '_route' => 'mmh_admin_admin',);
            }

            // mmh_admin_tableau
            if (0 === strpos($pathinfo, '/administration/tableau-de-bord') && preg_match('#^/administration/tableau\\-de\\-bord/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mmh_admin_tableau')), array (  '_controller' => 'MMH\\AdminBundle\\Controller\\AdminController::tableauAction',));
            }

        }

        // mmh_static_association
        if ($pathinfo === '/qui-sommes-nous') {
            return array (  '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::associationAction',  '_route' => 'mmh_static_association',);
        }

        // mmh_static_soutenir
        if ($pathinfo === '/nous-soutenir') {
            return array (  '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::soutenirAction',  '_route' => 'mmh_static_soutenir',);
        }

        // mmh_static_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::contactAction',  '_route' => 'mmh_static_contact',);
        }

        // mmh_static_deposer
        if ($pathinfo === '/deposer-un-projet') {
            return array (  '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::deposerAction',  '_route' => 'mmh_static_deposer',);
        }

        // mmh_static_mentions
        if ($pathinfo === '/mentions-legales') {
            return array (  '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::mentionsAction',  '_route' => 'mmh_static_mentions',);
        }

        // mmh_static_conditions
        if ($pathinfo === '/conditions-generales') {
            return array (  '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::conditionsAction',  '_route' => 'mmh_static_conditions',);
        }

        // mmh_static_blog
        if (0 === strpos($pathinfo, '/blog') && preg_match('#^/blog/(?P<year>\\d{4})/(?P<article>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mmh_static_blog')), array (  '_controller' => 'MMH\\StaticBundle\\Controller\\StaticController::blogAction',));
        }

        // mmh_site_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mmh_site_homepage');
            }

            return array (  '_controller' => 'MMH\\SiteBundle\\Controller\\ProjetsController::indexAction',  '_route' => 'mmh_site_homepage',);
        }

        // mmh_site_decouvrir
        if (0 === strpos($pathinfo, '/decouvrir-les-projets') && preg_match('#^/decouvrir\\-les\\-projets(?:/(?P<categorie>\\w*))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mmh_site_decouvrir')), array (  '_controller' => 'MMH\\SiteBundle\\Controller\\ProjetsController::decouvrirAction',  'categorie' => 'generale',));
        }

        // mmh_site_projet
        if ($pathinfo === '/projet') {
            return array (  '_controller' => 'MMH\\SiteBundle\\Controller\\ProjetsController::projetAction',  '_route' => 'mmh_site_projet',);
        }

        // mmh_site_inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'MMH\\SiteBundle\\Controller\\TransactionController::inscriptionAction',  '_route' => 'mmh_site_inscription',);
        }

        // mmh_site_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'MMH\\SiteBundle\\Controller\\TransactionController::connexionAction',  '_route' => 'mmh_site_connexion',);
        }

        // mmh_site_financement
        if (0 === strpos($pathinfo, '/financement') && preg_match('#^/financement/(?P<projet>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mmh_site_financement')), array (  '_controller' => 'MMH\\SiteBundle\\Controller\\TransactionController::financementAction',));
        }

        // mmh_site_membre
        if (0 === strpos($pathinfo, '/espace') && preg_match('#^/espace/(?P<membre>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mmh_site_membre')), array (  '_controller' => 'MMH\\SiteBundle\\Controller\\TransactionController::membreAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
