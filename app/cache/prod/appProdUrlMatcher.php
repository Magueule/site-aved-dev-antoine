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

        // avedblog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'avedblog_homepage');
            }

            return array (  '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'avedblog_homepage',);
        }

        // avedblog_eventpage
        if ($pathinfo === '/events') {
            return array (  '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::eventAction',  '_route' => 'avedblog_eventpage',);
        }

        // avedblog_galeriepage
        if ($pathinfo === '/galerie') {
            return array (  '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::galerieAction',  '_route' => 'avedblog_galeriepage',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // avedblog_contactpage
            if ($pathinfo === '/contact') {
                return array (  '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::contactAction',  '_route' => 'avedblog_contactpage',);
            }

            // avedblog_campuspage
            if ($pathinfo === '/campus') {
                return array (  '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::campusAction',  '_route' => 'avedblog_campuspage',);
            }

        }

        if (0 === strpos($pathinfo, '/trophee201')) {
            // avedblog_tropheedtpage
            if ($pathinfo === '/trophee2013') {
                return array (  '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::tropheedtAction',  '_route' => 'avedblog_tropheedtpage',);
            }

            // avedblog_tropheedqpage
            if ($pathinfo === '/trophee2014') {
                return array (  '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::tropheedqAction',  '_route' => 'avedblog_tropheedqpage',);
            }

        }

        // avedblog_pimpmdpage
        if ($pathinfo === '/pimpmydescartes') {
            return array (  '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::pimpmdAction',  '_route' => 'avedblog_pimpmdpage',);
        }

        // avedblog_mappage
        if ($pathinfo === '/map') {
            return array (  '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::mapAction',  '_route' => 'avedblog_mappage',);
        }

        if (0 === strpos($pathinfo, '/les')) {
            // avedblog_ecolespage
            if ($pathinfo === '/lesecoles') {
                return array (  '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::ecolesAction',  '_route' => 'avedblog_ecolespage',);
            }

            // avedblog_associationspage
            if ($pathinfo === '/lesassociations') {
                return array (  '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::associationsAction',  '_route' => 'avedblog_associationspage',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
