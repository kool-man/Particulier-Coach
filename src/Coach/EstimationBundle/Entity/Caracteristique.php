<?php

namespace Coach\EstimationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caracteristique
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Caracteristique
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
     * @ORM\Column(name="type", type="string")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string")
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anneeConstruction", type="date")
     */
    private $anneeConstruction;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbPieces", type="integer")
     */
    private $nbPieces;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbChambre", type="integer")
     */
    private $nbChambre;

    /**
     * @var float
     *
     * @ORM\Column(name="surface", type="float")
     */
    private $surface;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string")
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string")
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="cp", type="integer")
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string")
     */
    private $ville;

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
     * @ORM\ManyToOne(targetEntity="Coach\EstimationBundle\Entity\Proprietaire", inversedBy="caracteristiques")
     */
    private $proprietaire;


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
     * Set type
     *
     * @param string $type
     * @return Caracteristique
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Caracteristique
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set anneeConstruction
     *
     * @param \DateTime $anneeConstruction
     * @return Caracteristique
     */
    public function setAnneeConstruction($anneeConstruction)
    {
        $this->anneeConstruction = $anneeConstruction;

        return $this;
    }

    /**
     * Get anneeConstruction
     *
     * @return \DateTime 
     */
    public function getAnneeConstruction()
    {
        return $this->anneeConstruction;
    }

    /**
     * Set nbPieces
     *
     * @param integer $nbPieces
     * @return Caracteristique
     */
    public function setNbPieces($nbPieces)
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    /**
     * Get nbPieces
     *
     * @return integer 
     */
    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    /**
     * Set nbChambre
     *
     * @param integer $nbChambre
     * @return Caracteristique
     */
    public function setNbChambre($nbChambre)
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    /**
     * Get nbChambre
     *
     * @return integer 
     */
    public function getNbChambre()
    {
        return $this->nbChambre;
    }

    /**
     * Set surface
     *
     * @param float $surface
     * @return Caracteristique
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return float 
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Caracteristique
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Caracteristique
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     * @return Caracteristique
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Caracteristique
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Caracteristique
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
     * @return Caracteristique
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
     * Set proprietaire
     *
     * @param \Coach\EstimationBundle\Entity\Proprietaire $proprietaire
     * @return Caracteristique
     */
    public function setProprietaire(\Coach\EstimationBundle\Entity\Proprietaire $proprietaire = null)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \Coach\EstimationBundle\Entity\Proprietaire 
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }
}
