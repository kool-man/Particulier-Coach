<?php

namespace Coach\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlockSocial
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coach\PageBundle\Entity\BlockSocialRepository")
 */
class BlockSocial
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
     * @ORM\Column(name="link_facebook", type="string", length=255,nullable=true)
     */
    private $linkFacebook;

    /**
     * @var string
     *
     * @ORM\Column(name="link_twitter", type="string", length=255,nullable=true)
     */
    private $linkTwitter;

    /**
     * @var string
     *
     * @ORM\Column(name="link_google", type="string", length=255,nullable=true)
     */
    private $linkGoogle;

    /**
     * @var string
     *
     * @ORM\Column(name="link_linkedin", type="string", length=255,nullable=true)
     */
    private $linkLinkedin;

    /**
     * @var string
     *
     * @ORM\Column(name="link_youtube", type="string", length=255,nullable=true)
     */
    private $linkYoutube;

    /**
     * @var string
     *
     * @ORM\Column(name="link_rss", type="string", length=255,nullable=true)
     */
    private $linkRss;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Coach\PageBundle\Entity\Page", inversedBy="blocksocial")
     */
    private $page;

    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
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
     * Set linkFacebook
     *
     * @param string $linkFacebook
     * @return BlockSocial
     */
    public function setLinkFacebook($linkFacebook)
    {
        $this->linkFacebook = $linkFacebook;

        return $this;
    }

    /**
     * Get linkFacebook
     *
     * @return string 
     */
    public function getLinkFacebook()
    {
        return $this->linkFacebook;
    }

    /**
     * Set linkTwitter
     *
     * @param string $linkTwitter
     * @return BlockSocial
     */
    public function setLinkTwitter($linkTwitter)
    {
        $this->linkTwitter = $linkTwitter;

        return $this;
    }

    /**
     * Get linkTwitter
     *
     * @return string 
     */
    public function getLinkTwitter()
    {
        return $this->linkTwitter;
    }

    /**
     * Set linkGoogle
     *
     * @param string $linkGoogle
     * @return BlockSocial
     */
    public function setLinkGoogle($linkGoogle)
    {
        $this->linkGoogle = $linkGoogle;

        return $this;
    }

    /**
     * Get linkGoogle
     *
     * @return string 
     */
    public function getLinkGoogle()
    {
        return $this->linkGoogle;
    }

    /**
     * Set linkLinkedin
     *
     * @param string $linkLinkedin
     * @return BlockSocial
     */
    public function setLinkLinkedin($linkLinkedin)
    {
        $this->linkLinkedin = $linkLinkedin;

        return $this;
    }

    /**
     * Get linkLinkedin
     *
     * @return string 
     */
    public function getLinkLinkedin()
    {
        return $this->linkLinkedin;
    }

    /**
     * Set linkYoutube
     *
     * @param string $linkYoutube
     * @return BlockSocial
     */
    public function setLinkYoutube($linkYoutube)
    {
        $this->linkYoutube = $linkYoutube;

        return $this;
    }

    /**
     * Get linkYoutube
     *
     * @return string 
     */
    public function getLinkYoutube()
    {
        return $this->linkYoutube;
    }

    /**
     * Set linkRss
     *
     * @param string $linkRss
     * @return BlockSocial
     */
    public function setLinkRss($linkRss)
    {
        $this->linkRss = $linkRss;

        return $this;
    }

    /**
     * Get linkRss
     *
     * @return string 
     */
    public function getLinkRss()
    {
        return $this->linkRss;
    }

    /**
     * Set page
     *
     * @param \Coach\PageBundle\Entity\Page $page
     * @return BlockSocial
     */
    public function setPage(\Coach\PageBundle\Entity\Page $page = null)
    {
        $this->page = $page;

        return $this;
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
    
    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return BlockVideo
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
     * @return BlockVideo
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
}
