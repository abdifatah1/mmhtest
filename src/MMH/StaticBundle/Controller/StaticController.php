<?php

namespace MMH\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class StaticController extends Controller
{
  public function associationAction()
  {
      return new Response('Vous voici sur la page qui sommes nous');
  }

  public function soutenirAction()
  {
      return new Response('Vous voici sur la page qui Nous Soutenir');
  }

  public function contactAction()
  {
      return new Response('Vous voici sur la page de contact');
  }

  public function deposerAction()
  {
      return new Response('Vous voici sur la page deposer un projet');
  }

  public function mentionsAction()
  {
      return new Response('Vous voici sur la page des mentions légales');
  }

  public function conditionsAction()
  {
      return new Response('Vous voici sur la page des conditions générales d\'utilisation');
  }

  public function blogAction($year, $article)
  {
      return new Response('Vous voici sur la page d\'un article de blog');
  }
}
