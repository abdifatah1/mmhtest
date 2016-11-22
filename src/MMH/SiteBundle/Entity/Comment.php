<?php

namespace MMH\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="MMH\SiteBundle\Repository\CommentRepository")
 */
class Comment
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
     * @ORM\ManyToOne(targetEntity="MMH\SiteBundle\Entity\Project")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project;

    /**
     * @ORM\ManyToOne(targetEntity="MMH\SiteBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Comment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set project
     *
     * @param \MMH\SiteBundle\Entity\Project $project
     *
     * @return Comment
     */
    public function setProject(\MMH\SiteBundle\Entity\Project $project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \MMH\SiteBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set user
     *
     * @param \MMH\SiteBundle\Entity\User $user
     *
     * @return Comment
     */
    public function setUser(\MMH\SiteBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \MMH\SiteBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
