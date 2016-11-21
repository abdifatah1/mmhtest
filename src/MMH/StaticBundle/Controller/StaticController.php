<?php

namespace MMH\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MMH\SiteBundle\Entity\Contact;
use MMH\SiteBundle\Form\ContactType;

class StaticController extends Controller
{

  public function allArticle() {
    $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Article');
    $article = $repo->getArticleWithImage();
    return $article;
  }

  public function associationAction()
  {
      return $this->render('MMHStaticBundle:About:about.html.twig', ['article'=>$this->allArticle()]);
  }

  public function soutenirAction()
  {
      return $this->render('MMHStaticBundle:Support:support.html.twig', ['article'=>$this->allArticle()]);
  }

  public function contactAction()
  {
      $contact = new Contact;

      $form = $this->createForm(ContactType::class, $contact);

      return $this->render('MMHStaticBundle:Contact:contact.html.twig', ['article'=>$this->allArticle(), 'form'=>$form->createView()]);
  }

  public function deposerAction()
  {
      $contact = new Contact;

      $form = $this->createForm(ContactType::class, $contact);

      return $this->render('MMHStaticBundle:Submit:submit.html.twig', ['article'=>$this->allArticle(), 'form'=>$form->createView()]);
  }

  public function mentionsAction()
  {
      return $this->render('MMHStaticBundle:Mention:mention.html.twig', ['article'=>$this->allArticle()]);
  }

  public function conditionsAction()
  {
      return $this->render('MMHStaticBundle:Conditions:conditions.html.twig', ['article'=>$this->allArticle()]);
  }

  public function blogAction($slug)
  {
      $repo = $this->getDoctrine()->getManager()->getRepository('MMHSiteBundle:Article');
      $articleAlone = $repo->getArticleWithAuthor($slug);

      return $this->render('MMHStaticBundle:Blog:blog.html.twig', ['article'=>$this->allArticle(), 'articleAlone'=>$articleAlone]);
  }
}
