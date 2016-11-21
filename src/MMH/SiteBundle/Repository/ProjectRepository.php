<?php

namespace MMH\SiteBundle\Repository;

/**
 * ProjectRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectRepository extends \Doctrine\ORM\EntityRepository
{

  public function getProjectWithPayment()
  {

      return $this->createQueryBuilder('p')
      ->innerJoin('p.payment', 'pay')
      ->addSelect('pay')
      ->innerJoin('p.imageproject', 'img')
      ->addSelect('img')
      // ->setMaxResults(4)
      // ->setFirstResult(1)
      ->orderBy('p.startDate', 'DESC')
      ->getQuery()
      ->getResult();
  }

  public function getProjectForSlider() {

    $qb =  $this->createQueryBuilder('p');
    $qb
      ->where ("p.slider = :bool")
      ->setParameter("bool", 1)
      ;
      return $qb
    ->innerJoin('p.payment', 'pay')
    ->addSelect('pay')
    ->innerJoin('p.imageproject', 'img')
    ->addSelect('img')

    ->getQuery()
    ->getResult();
  }

  public function getProjectWithImage($slug)
  {
    $qb =  $this->createQueryBuilder('p');
    $qb
      ->where ("p.slug = :slug")
      ->setParameter("slug",$slug)
      ;
      return $qb
    ->innerJoin('p.payment', 'pay')
    ->addSelect('pay')
    ->innerJoin('p.imageproject', 'img')
    ->addSelect('img')

    ->getQuery()
    ->getResult();
  }

}
