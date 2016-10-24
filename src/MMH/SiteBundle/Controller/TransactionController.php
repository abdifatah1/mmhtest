<?php

namespace MMH\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TransactionController extends Controller
{
  public function inscriptionAction () {
    return new Response ('Vous voici sur la page d\'inscription');
  }

  public function connexionAction () {
    return new Response ('Vous voici sur la page de connexion');
  }

  public function financementAction ($projet) {
    return new Response ('Vous voici sur la page de financement d\'un projet');
  }

  public function membreAction ($membre) {
    return new Response ('Vous voici sur le profil d\'un membre');
  }

}
