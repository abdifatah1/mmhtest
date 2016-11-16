<?php

namespace MMH\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class StaticController extends Controller
{
  public function associationAction()
  {

    $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Article');

    $article = $repo->findAll();

      return $this->render('MMHStaticBundle:About:about.html.twig', ['article'=>$article]);
      
  }

  public function soutenirAction()
  {
      return $this->render('MMHStaticBundle:Support:support.html.twig');
  }

  public function contactAction()
  {
      return $this->render('MMHStaticBundle:Contact:contact.html.twig');
  }

  public function deposerAction()
  {
      return $this->render('MMHStaticBundle:Submit:submit.html.twig');
  }

  public function mentionsAction()
  {
      return $this->render('MMHStaticBundle:Mention:mention.html.twig');
  }

  public function conditionsAction()
  {
      return $this->render('MMHStaticBundle:Conditions:conditions.html.twig');
  }

  public function blogAction($year, $article)
  {
      return $this->render('MMHStaticBundle:Blog:blog.html.twig');
  }
}
