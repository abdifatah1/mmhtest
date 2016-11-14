<?php

namespace MMH\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="MMH\SiteBundle\Repository\ProjectRepository")
 */
class Project
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
  private $slug;

    /**
     * @ORM\OneToMany(targetEntity="MMH\SiteBundle\Entity\Payment", mappedBy="project")
     */
     private $payment;

     /**
      * @ORM\OneToMany(targetEntity="MMH\SiteBundle\Entity\imageProject", mappedBy="project")
      */
      private $imageproject;


    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="headline", type="string", length=65, unique=true)
     */
    private $headline;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @var int
     *
     * @ORM\Column(name="finalObjective", type="integer")
     */
    private $finalObjective;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime")
     */
    private $endDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime")
     */
    private $startDate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Project
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Project
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Project
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Project
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set finalObjective
     *
     * @param integer $finalObjective
     *
     * @return Project
     */
    public function setFinalObjective($finalObjective)
    {
        $this->finalObjective = $finalObjective;

        return $this;
    }

    /**
     * Get finalObjective
     *
     * @return integer
     */
    public function getFinalObjective()
    {
        return $this->finalObjective;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Project
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set headline
     *
     * @param string $headline
     *
     * @return Project
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get headline
     *
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Project
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->payment = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add payment
     *
     * @param \MMH\SiteBundle\Entity\Payment $payment
     *
     * @return Project
     */
    public function addPayment(\MMH\SiteBundle\Entity\Payment $payment)
    {
        $this->payment[] = $payment;

        $payment->setProject($this);

        return $this;
    }

    /**
     * Remove payment
     *
     * @param \MMH\SiteBundle\Entity\Payment $payment
     */
    public function removePayment(\MMH\SiteBundle\Entity\Payment $payment)
    {
        $this->payment->removeElement($payment);
    }

    /**
     * Get payment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Add imageproject
     *
     * @param \MMH\SiteBundle\Entity\imageProject $imageproject
     *
     * @return Project
     */
    public function addImageproject(\MMH\SiteBundle\Entity\imageProject $imageproject)
    {
        $this->imageproject[] = $imageproject;

        $imageproject->setProject($this);

        return $this;
    }

    /**
     * Remove imageproject
     *
     * @param \MMH\SiteBundle\Entity\imageProject $imageproject
     */
    public function removeImageproject(\MMH\SiteBundle\Entity\imageProject $imageproject)
    {
        $this->imageproject->removeElement($imageproject);
    }

    /**
     * Get imageproject
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImageproject()
    {
        return $this->imageproject;
    }
}
