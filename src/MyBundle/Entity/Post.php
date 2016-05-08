<?php
/**
 * Created by PhpStorm.
 * User: dina
 * Date: 02.05.16
 * Time: 19:28
 */
namespace MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity (repositoryClass="PostRepository")
 * @ORM\Table(name="my_post")
 * @ORM\HasLifecycleCallbacks
 */

class Post{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length= 128)
     */
    protected $title;
    /**
     * @ORM\Column(type="string",length= 255)
     */
    protected $description;
    /**
     * @ORM\Column(type="text",nullable=true)
     */
    protected $test;
    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    protected $published=false;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    protected $created;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    protected $updated;

    public function __toString()
    {
        return $this->title;

    }





    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Post
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
     * Set description
     *
     * @param string $description
     * @return Post
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
     * Set test
     *
     * @param string $test
     * @return Post
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return string 
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Post
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Post
     * @ORM\PrePersist
     */
    public function setCreated($created)
    {
        $this->created = new \DateTime('now');

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Post
     * @ORM\PreUpdate()
     */
    public function setUpdated()
    {
        $this->updated = new \DateTime('now');

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
