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
    private static $declaredRoutes = array(
        'avedblog_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avedblog_eventpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::eventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avedblog_galeriepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::galerieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/galerie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avedblog_contactpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avedblog_campuspage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::campusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/campus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avedblog_tropheedtpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::tropheedtAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trophee2013',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avedblog_tropheedqpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::tropheedqAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trophee2014',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avedblog_pimpmdpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::pimpmdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pimpmydescartes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avedblog_mappage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::mapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/map',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avedblog_ecolespage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::ecolesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lesecoles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avedblog_associationspage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Aved\\BlogBundle\\Controller\\DefaultController::associationsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lesassociations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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
