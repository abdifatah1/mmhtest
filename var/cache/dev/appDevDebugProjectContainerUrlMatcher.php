<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
        if (0 === strpos($pathinfo, '/projet') && preg_match('#^/projet/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mmh_site_projet')), array (  '_controller' => 'MMH\\SiteBundle\\Controller\\ProjetsController::projetAction',));
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
