<?php

namespace MMH\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProjetsController extends Controller
{
    public function indexAction()
    {
        return $this->render('MMHSiteBundle:Home:home.html.twig');
    }

    public function decouvrirAction($categorie)
    {
        return $this->render('::baselayout.html.twig');
    }

    public function projetAction($nom)
    {
        return $this->render('::baselayout.html.twig');
    }

}
