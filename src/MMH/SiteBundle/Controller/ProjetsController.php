<?php

namespace MMH\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProjetsController extends Controller
{
    public function indexAction()
    {
      $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Project');

      $project = $repo->findAll();

      return $this->render('MMHSiteBundle:Home:home.html.twig', ['project'=>$project]);
    }

    public function decouvrirAction($categorie)
    {

      return $this->render('MMHSiteBundle:Projet:decouvrir.html.twig');
    }

    public function projetAction($slug)
    {

        return $this->render('MMHSiteBundle:Projet:projet.html.twig');
    }


}
