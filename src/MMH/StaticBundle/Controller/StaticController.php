<?php

namespace MMH\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class StaticController extends Controller
{
  public function associationAction()
  {
      return $this->render('MMHStaticBundle:About:about.html.twig');
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
      return $this->render('::baselayout.html.twig');
  }

  public function conditionsAction()
  {
      return $this->render('::baselayout.html.twig');
  }

  public function blogAction($year, $article)
  {
      return $this->render('::baselayout.html.twig');
  }
}
