<?php

namespace Coach\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity
 */
class Page
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255,nullable=true)
     */
    private $nom;
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="text")
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="titre_page", type="text",nullable=true)
     */
    private $titre_page;
    /**
     * @var string
     *
     * @ORM\Column(name="ordre", type="text",nullable=true)
     */
    private $ordre;

    /**
     * @var integer
     * @ORM\OneToOne(targetEntity="Coach\PageBundle\Entity\Menu", cascade={"persist"})
     */
    private $menu;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Coach\PageBundle\Entity\BlockVideo", mappedBy="page")
     */
    private $videos;
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Coach\PageBundle\Entity\BlockText", mappedBy="page")
     */
    private $blocktext;
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Coach\PageBundle\Entity\BlockLienMiddle", mappedBy="page")
     */
    private $blocklienmiddle;
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Coach\PageBundle\Entity\BlockSocial", mappedBy="page")
     */
    private $blocksocial;
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Coach\PageBundle\Entity\TitrePage", mappedBy="page")
     */
    private $titrespage;
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Coach\CoachingBundle\Entity\Coaching", mappedBy="page")
     */
    private $coaching;
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
     * @return Page
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
     * Set keywords
     *
     * @param text $keywords
     * @return Page
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return text 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set description
     *
     * @param text $description
     * @return Page
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set menu
     *
     * @param integer $menu
     * @return Page
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return integer 
     */
    public function getMenu()
    {
        return $this->menu;
    }
    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Menu
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
     * @return Menu
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
      return $this->getNom();
    }
    /**
     * Add videos
     *
     * @param \Coach\PageBundle\Entity\BlockVideo $videos
     * @return Page
     */
    public function addVideo(\Coach\PageBundle\Entity\BlockVideo $videos)
    {
        $this->videos[] = $videos;

        return $this;
    }

    /**
     * Remove videos
     *
     * @param \Coach\PageBundle\Entity\BlockVideo $videos
     */
    public function removeVideo(\Coach\PageBundle\Entity\BlockVideo $videos)
    {
        $this->videos->removeElement($videos);
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * Add blocktext
     *
     * @param \Coach\PageBundle\Entity\BlockText $blocktext
     * @return Page
     */
    public function addBlocktext(\Coach\PageBundle\Entity\BlockText $blocktext)
    {
        $this->blocktext[] = $blocktext;

        return $this;
    }

    /**
     * Remove blocktext
     *
     * @param \Coach\PageBundle\Entity\BlockText $blocktext
     */
    public function removeBlocktext(\Coach\PageBundle\Entity\BlockText $blocktext)
    {
        $this->blocktext->removeElement($blocktext);
    }

    /**
     * Get blocktext
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlocktext()
    {
        return $this->blocktext;
    }

    /**
     * Add blocklienmiddle
     *
     * @param \Coach\PageBundle\Entity\BlockLienMiddle $blocklienmiddle
     * @return Page
     */
    public function addBlocklienmiddle(\Coach\PageBundle\Entity\BlockLienMiddle $blocklienmiddle)
    {
        $this->blocklienmiddle[] = $blocklienmiddle;

        return $this;
    }

    /**
     * Remove blocklienmiddle
     *
     * @param \Coach\PageBundle\Entity\BlockLienMiddle $blocklienmiddle
     */
    public function removeBlocklienmiddle(\Coach\PageBundle\Entity\BlockLienMiddle $blocklienmiddle)
    {
        $this->blocklienmiddle->removeElement($blocklienmiddle);
    }

    /**
     * Get blocklienmiddle
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlocklienmiddle()
    {
        return $this->blocklienmiddle;
    }

    /**
     * Add blocksocial
     *
     * @param \Coach\PageBundle\Entity\BlockSocial $blocksocial
     * @return Page
     */
    public function addBlocksocial(\Coach\PageBundle\Entity\BlockSocial $blocksocial)
    {
        $this->blocksocial[] = $blocksocial;

        return $this;
    }

    /**
     * Remove blocksocial
     *
     * @param \Coach\PageBundle\Entity\BlockSocial $blocksocial
     */
    public function removeBlocksocial(\Coach\PageBundle\Entity\BlockSocial $blocksocial)
    {
        $this->blocksocial->removeElement($blocksocial);
    }

    /**
     * Get blocksocial
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlocksocial()
    {
        return $this->blocksocial;
    }

    /**
     * Set titre_page
     *
     * @param string $titrePage
     * @return Page
     */
    public function setTitrePage($titrePage)
    {
        $this->titre_page = $titrePage;

        return $this;
    }

    /**
     * Get titre_page
     *
     * @return string 
     */
    public function getTitrePage()
    {
        return $this->titre_page;
    }

    /**
     * Set ordre
     *
     * @param string $ordre
     * @return Page
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return string 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }
    

    /**
     * Add titrespage
     *
     * @param \Coach\PageBundle\Entity\TitrePage $titrespage
     * @return Page
     */
    public function addTitrespage(\Coach\PageBundle\Entity\TitrePage $titrespage)
    {
        $this->titrespage[] = $titrespage;

        return $this;
    }

    /**
     * Remove titrespage
     *
     * @param \Coach\PageBundle\Entity\TitrePage $titrespage
     */
    public function removeTitrespage(\Coach\PageBundle\Entity\TitrePage $titrespage)
    {
        $this->titrespage->removeElement($titrespage);
    }

    /**
     * Get titrespage
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTitrespage()
    {
        return $this->titrespage;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Page
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Add coaching
     *
     * @param \Coach\CoachingBundle\Entity\Coaching $coaching
     * @return Page
     */
    public function addCoaching(\Coach\CoachingBundle\Entity\Coaching $coaching)
    {
        $this->coaching[] = $coaching;

        return $this;
    }

    /**
     * Remove coaching
     *
     * @param \Coach\CoachingBundle\Entity\Coaching $coaching
     */
    public function removeCoaching(\Coach\CoachingBundle\Entity\Coaching $coaching)
    {
        $this->coaching->removeElement($coaching);
    }

    /**
     * Get coaching
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCoaching()
    {
        return $this->coaching;
    }
}
