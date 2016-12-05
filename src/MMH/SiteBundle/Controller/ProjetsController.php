<?php

namespace MMH\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ProjetsController extends Controller
{
  public function indexAction()
  {
    $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Project');


    $project = $repo->getProjectWithPayment();

    $projectSlider = $repo->getProjectForSlider();

    return $this->render('MMHSiteBundle:Home:home.html.twig', ['project'=>$project, 'projectSlider' => $projectSlider]);
  }


    public function decouvrirAction($categorie)
    {
      $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Project');

      if($categorie == 'generale') {
        $project = $repo->getProjectWithPayment();
      } else {
        $project = $repo->findBy(
          array('category' => $categorie)
        );
      }


      return $this->render('MMHSiteBundle:Projet:decouvrir.html.twig', ['project'=>$project]);
    }


  public function projetAction($slug)
  {
    $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Project');

    $project = $repo->getProjectWithImage($slug);

    return $this->render('MMHSiteBundle:Projet:projet.html.twig',['project'=>$project]);

  }

}
