<?php

namespace Coach\CoachingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coaching
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coach\CoachingBundle\Entity\CoachingRepository")
 */
class Coaching
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="icone", type="string", length=255)
     */
    private $icone;

    /**
     * @var string
     *
     * @ORM\Column(name="point1", type="text",nullable=true)
     */
    private $point1;
    /**
     * @var string
     *
     * @ORM\Column(name="point2", type="text",nullable=true)
     */
    private $point2;
    /**
     * @var string
     *
     * @ORM\Column(name="point3", type="text",nullable=true)
     */
    private $point3;
    /**
     * @var string
     *
     * @ORM\Column(name="point4", type="text",nullable=true)
     */
    private $point4;
    /**
     * @var string
     *
     * @ORM\Column(name="point5", type="text",nullable=true)
     */
    private $point5;
    /**
     * @var string
     *
     * @ORM\Column(name="point6", type="text",nullable=true)
     */
    private $point6;
    /**
     * @var string
     *
     * @ORM\Column(name="point7", type="text",nullable=true)
     */
    private $point7;
    /**
     * @var string
     *
     * @ORM\Column(name="point8", type="text",nullable=true)
     */
    private $point8;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Coach\PageBundle\Entity\Page", inversedBy="coaching")
     */
    private $page;


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
     * Set titre
     *
     * @param string $titre
     * @return Coaching
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set icone
     *
     * @param string $icone
     * @return Coaching
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;

        return $this;
    }

    /**
     * Get icone
     *
     * @return string 
     */
    public function getIcone()
    {
        return $this->icone;
    }    
    
    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->createdAt = $this->updatedAt = new \DateTime('now');         
    }
     
    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime('now');
    }
    
    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
    }
    
    public function __toString()
    {
      return $this->getTitre();
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Coaching
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Coaching
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set page
     *
     * @param \Coach\PageBundle\Entity\Page $page
     * @return Coaching
     */
    public function setPage(\Coach\PageBundle\Entity\Page $page = null)
    {
        $this->page = $page;

        return $this;
    }
    

    /**
     * Set point1
     *
     * @param string $point1
     * @return Coaching
     */
    public function setPoint1($point1)
    {
        $this->point1 = $point1;

        return $this;
    }

    /**
     * Get point1
     *
     * @return string 
     */
    public function getPoint1()
    {
        return $this->point1;
    }

    /**
     * Set point2
     *
     * @param string $point2
     * @return Coaching
     */
    public function setPoint2($point2)
    {
        $this->point2 = $point2;

        return $this;
    }

    /**
     * Get point2
     *
     * @return string 
     */
    public function getPoint2()
    {
        return $this->point2;
    }

    /**
     * Set point3
     *
     * @param string $point3
     * @return Coaching
     */
    public function setPoint3($point3)
    {
        $this->point3 = $point3;

        return $this;
    }

    /**
     * Get point3
     *
     * @return string 
     */
    public function getPoint3()
    {
        return $this->point3;
    }

    /**
     * Set point4
     *
     * @param string $point4
     * @return Coaching
     */
    public function setPoint4($point4)
    {
        $this->point4 = $point4;

        return $this;
    }

    /**
     * Get point4
     *
     * @return string 
     */
    public function getPoint4()
    {
        return $this->point4;
    }

    /**
     * Set point5
     *
     * @param string $point5
     * @return Coaching
     */
    public function setPoint5($point5)
    {
        $this->point5 = $point5;

        return $this;
    }

    /**
     * Get point5
     *
     * @return string 
     */
    public function getPoint5()
    {
        return $this->point5;
    }

    /**
     * Set point6
     *
     * @param string $point6
     * @return Coaching
     */
    public function setPoint6($point6)
    {
        $this->point6 = $point6;

        return $this;
    }

    /**
     * Get point6
     *
     * @return string 
     */
    public function getPoint6()
    {
        return $this->point6;
    }

    /**
     * Set point7
     *
     * @param string $point7
     * @return Coaching
     */
    public function setPoint7($point7)
    {
        $this->point7 = $point7;

        return $this;
    }

    /**
     * Get point7
     *
     * @return string 
     */
    public function getPoint7()
    {
        return $this->point7;
    }

    /**
     * Set point8
     *
     * @param string $point8
     * @return Coaching
     */
    public function setPoint8($point8)
    {
        $this->point8 = $point8;

        return $this;
    }

    /**
     * Get point8
     *
     * @return string 
     */
    public function getPoint8()
    {
        return $this->point8;
    }

    /**
     * Get page
     *
     * @return \Coach\PageBundle\Entity\Page 
     */
    public function getPage()
    {
        return $this->page;
    }
}
