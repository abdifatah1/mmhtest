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

    public function soutenirAction()
    {
        return new Response('Vous voici sur la page qui Nous Soutenir');
    }

    public function contactAction()
    {
        return new Response('Vous voici sur la page de contact');
    }

    public function decouvrirAction()
    {
        return new Response('Vous voici sur la page decouvrir les projet');
    }

    public function deposerAction()
    {
        return new Response('Vous voici sur la page deposer un projet');
    }
}
