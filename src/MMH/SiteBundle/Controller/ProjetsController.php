<?php

namespace MMH\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProjetsController extends Controller
{
    public function indexAction()
    {
        return new Response('Vous voici sur la page d\'accueil');
    }

    public function associationAction()
    {
        return new Response('Vous voici sur la page qui sommes nous');
    }
}
