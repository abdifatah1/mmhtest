<?php

namespace MMH\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * imageProject
 *
 * @ORM\Table(name="image_project")
 * @ORM\Entity(repositoryClass="MMH\SiteBundle\Repository\imageProjectRepository")
 */
class imageProject
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
     * @ORM\ManyToOne(targetEntity="MMH\SiteBundle\Entity\Project", inversedBy="imageproject")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var bool
     *
     * @ORM\Column(name="headImage", type="boolean")
     */
    private $headImage;

    /**
     * @var bool
     *
     * @ORM\Column(name="bodyImage", type="boolean")
     */
    private $bodyImage;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;




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
     * Set path
     *
     * @param string $path
     *
     * @return imageProject
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set project
     *
     * @param \MMH\SiteBundle\Entity\Project $project
     *
     * @return imageProject
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
     * Set headImage
     *
     * @param boolean $headImage
     *
     * @return imageProject
     */
    public function setHeadImage($headImage)
    {
        $this->headImage = $headImage;

        return $this;
    }

    /**
     * Get headImage
     *
     * @return boolean
     */
    public function getHeadImage()
    {
        return $this->headImage;
    }

    /**
     * Set bodyImage
     *
     * @param boolean $bodyImage
     *
     * @return imageProject
     */
    public function setBodyImage($bodyImage)
    {
        $this->bodyImage = $bodyImage;

        return $this;
    }

    /**
     * Get bodyImage
     *
     * @return boolean
     */
    public function getBodyImage()
    {
        return $this->bodyImage;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return imageProject
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
