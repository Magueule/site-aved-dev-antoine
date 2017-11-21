<?php

namespace Aved\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AvedBlogBundle:Default:index.html.twig');
    }

    public function eventAction()
    {
    	return $this->render('AvedBlogBundle:Default:event.html.twig');
    }

    public function galerieAction()
    {
    	return $this->render('AvedBlogBundle:Default:galerie.html.twig');
    }

    public function contactAction()
    {
    	return $this->render('AvedBlogBundle:Default:contact.html.twig');
    }

    public function campusAction()
    {
    	return $this->render('AvedBlogBundle:Default:campus.html.twig');
    }

    public function tropheedtAction()
    {
    	return $this->render('AvedBlogBundle:Default:tropheedt.html.twig');
    }

    public function tropheedqAction()
    {
    	return $this->render('AvedBlogBundle:Default:tropheedq.html.twig');
    }

    public function pimpmdAction()
    {
    	return $this->render('AvedBlogBundle:Default:pimpmd.html.twig');
    }

    public function mapAction()
    {
    	return $this->render('AvedBlogBundle:Default:map.html.twig');
    }

    public function ecolesAction()
    {
    	return $this->render('AvedBlogBundle:Default:ecoles.html.twig');
    }

    public function associationsAction()
    {
    	return $this->render('AvedBlogBundle:Default:associations.html.twig');
    }
}