<?php

namespace MMH\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * imageArticle
 *
 * @ORM\Table(name="image_article")
 * @ORM\Entity(repositoryClass="MMH\SiteBundle\Repository\imageArticleRepository")
 */
class imageArticle
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
     * @ORM\ManyToOne(targetEntity="MMH\SiteBundle\Entity\Article")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;


    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, unique=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

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
     * @return imageArticle
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
     * Set description
     *
     * @param string $description
     *
     * @return imageArticle
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

    /**
     * Set headImage
     *
     * @param boolean $headImage
     *
     * @return imageArticle
     */
    public function setHeadImage($headImage)
    {
        $this->headImage = $headImage;

        return $this;
    }

    /**
     * Get headImage
     *
     * @return bool
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
     * @return imageArticle
     */
    public function setBodyImage($bodyImage)
    {
        $this->bodyImage = $bodyImage;

        return $this;
    }

    /**
     * Get bodyImage
     *
     * @return bool
     */
    public function getBodyImage()
    {
        return $this->bodyImage;
    }

    /**
     * Set article
     *
     * @param \MMH\SiteBundle\Entity\Article $article
     *
     * @return imageArticle
     */
    public function setArticle(\MMH\SiteBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \MMH\SiteBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }
}
