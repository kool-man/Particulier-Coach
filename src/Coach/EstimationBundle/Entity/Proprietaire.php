<?php

namespace Coach\EstimationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Proprietaire
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
     * @ORM\Column(name="civilite", type="string")
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string")
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string")
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdOn", type="date")
     */
    private $createdOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedOn", type="date")
     */
    private $updatedOn;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Coach\EstimationBundle\Entity\Caracteristique", mappedBy="proprietaire")
     */
    private $caracteristiques;
    
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
     * Set civilite
     *
     * @param string $civilite
     * @return Proprietaire
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Proprietaire
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
     * Set prenom
     *
     * @param string $prenom
     * @return Proprietaire
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Proprietaire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Proprietaire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Proprietaire
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set updatedOn
     *
     * @param \DateTime $updatedOn
     * @return Proprietaire
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }

    /**
     * Get updatedOn
     *
     * @return \DateTime 
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->caracteristiques = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add caracteristiques
     *
     * @param \Coach\EstimationBundle\Entity\Caracteristique $caracteristiques
     * @return Proprietaire
     */
    public function addCaracteristique(\Coach\EstimationBundle\Entity\Caracteristique $caracteristiques)
    {
        $this->caracteristiques[] = $caracteristiques;

        return $this;
    }

    /**
     * Remove caracteristiques
     *
     * @param \Coach\EstimationBundle\Entity\Caracteristique $caracteristiques
     */
    public function removeCaracteristique(\Coach\EstimationBundle\Entity\Caracteristique $caracteristiques)
    {
        $this->caracteristiques->removeElement($caracteristiques);
    }

    /**
     * Get caracteristiques
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCaracteristiques()
    {
        return $this->caracteristiques;
    }
}
