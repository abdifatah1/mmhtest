<?php

namespace MMH\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
  public function adminAction () {
    return new Response ('Vous voici sur la page de connexion à l\'administration');
  }

  public function tableauAction () {
    return new Response ('Vous voici sur le tableau de bord d\'un administrateur');
  }
}
