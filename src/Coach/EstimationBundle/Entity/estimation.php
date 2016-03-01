<?php

namespace Coach\EstimationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * estimation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class estimation
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
     * @ORM\Column(name="type_annonce", type="string",length=255)
     */
    private $typeAnnonce;
	 /**
     * @var string
     *
     * @ORM\Column(name="nb_pieces", type="string",length=255)
     */
    private $nbPieces;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_chambre", type="string",length=255)
     */
    private $nbChambre;
	
    /**
     * @var string
     *
     * @ORM\Column(name="etat_bien", type="string",length=255)
     */
    private $etatBien;
    /**
     * @var string
     *
     * @ORM\Column(name="annee_construction", type="string",length=255)
     */
    private $anneeConstruction;	
    /**
      * @ORM\ManyToMany(targetEntity="Coach\AnnonceBundle\Entity\Proximite")
    */
    private $proximite;
	
    /**
    * @ORM\ManyToMany(targetEntity="Coach\EstimationBundle\Entity\loisirAnnonce")
    */
    private $loisirAnnonce;
    /**
     * @var float
     *
     * @ORM\Column(name="surface", type="float")
     */
    private $surface;
    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string",length=255)
     */
    private $adresse;
    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string",length=255)
     */
    private $ville;
    /**
     * @var integer
     *
     * @ORM\Column(name="cp", type="string",length=255)
     */
    private $cp;
	
    /**
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\ContactPerson",inversedBy="estimation",cascade={"persist"}))
     */
    private $client;
	
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
     * Constructor
     */
    public function __construct()
    {
        $this->proximite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->loisirAnnonce = new \Doctrine\Common\Collections\ArrayCollection();
    }

    

    /**
     * Add proximite
     *
     * @param \Coach\AnnonceBundle\Entity\Proximite $proximite
     * @return estimation
     */
    public function addProximite(\Coach\AnnonceBundle\Entity\Proximite $proximite)
    {
        $this->proximite[] = $proximite;

        return $this;
    }

    /**
     * Remove proximite
     *
     * @param \Coach\AnnonceBundle\Entity\Proximite $proximite
     */
    public function removeProximite(\Coach\AnnonceBundle\Entity\Proximite $proximite)
    {
        $this->proximite->removeElement($proximite);
    }

    /**
     * Get proximite
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProximite()
    {
        return $this->proximite;
    }

    /**
     * Add loisirAnnonce
     *
     * @param \Coach\EstimationBundle\Entity\loisirAnnonce $loisirAnnonce
     * @return estimation
     */
    public function addLoisirAnnonce(\Coach\EstimationBundle\Entity\loisirAnnonce $loisirAnnonce)
    {
        $this->loisirAnnonce[] = $loisirAnnonce;

        return $this;
    }

    /**
     * Remove loisirAnnonce
     *
     * @param \Coach\EstimationBundle\Entity\loisirAnnonce $loisirAnnonce
     */
    public function removeLoisirAnnonce(\Coach\EstimationBundle\Entity\loisirAnnonce $loisirAnnonce)
    {
        $this->loisirAnnonce->removeElement($loisirAnnonce);
    }

    /**
     * Get loisirAnnonce
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLoisirAnnonce()
    {
        return $this->loisirAnnonce;
    }

    /**
     * Set typeAnnonce
     *
     * @param string $typeAnnonce
     * @return estimation
     */
    public function setTypeAnnonce($typeAnnonce)
    {
        $this->typeAnnonce = $typeAnnonce;

        return $this;
    }

    /**
     * Get typeAnnonce
     *
     * @return string 
     */
    public function getTypeAnnonce()
    {
        return $this->typeAnnonce;
    }

    /**
     * Set nbPieces
     *
     * @param string $nbPieces
     * @return estimation
     */
    public function setNbPieces($nbPieces)
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    /**
     * Get nbPieces
     *
     * @return string 
     */
    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    /**
     * Set nbChambre
     *
     * @param string $nbChambre
     * @return estimation
     */
    public function setNbChambre($nbChambre)
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    /**
     * Get nbChambre
     *
     * @return string 
     */
    public function getNbChambre()
    {
        return $this->nbChambre;
    }

    /**
     * Set etatBien
     *
     * @param string $etatBien
     * @return estimation
     */
    public function setEtatBien($etatBien)
    {
        $this->etatBien = $etatBien;

        return $this;
    }

    /**
     * Get etatBien
     *
     * @return string 
     */
    public function getEtatBien()
    {
        return $this->etatBien;
    }

    /**
     * Set anneeConstruction
     *
     * @param string $anneeConstruction
     * @return estimation
     */
    public function setAnneeConstruction($anneeConstruction)
    {
        $this->anneeConstruction = $anneeConstruction;

        return $this;
    }

    /**
     * Get anneeConstruction
     *
     * @return string 
     */
    public function getAnneeConstruction()
    {
        return $this->anneeConstruction;
    }

    /**
     * Set surface
     *
     * @param float $surface
     * @return estimation
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
     * Set adresse
     *
     * @param string $adresse
     * @return estimation
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
     * Set ville
     *
     * @param string $ville
     * @return estimation
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
     * Set cp
     *
     * @param string $cp
     * @return estimation
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set client
     *
     * @param \Application\Sonata\UserBundle\Entity\ContactPerson $client
     * @return estimation
     */
    public function setClient(\Application\Sonata\UserBundle\Entity\ContactPerson $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Application\Sonata\UserBundle\Entity\ContactPerson 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set total
     *
     * @param float $total
     * @return estimation
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }
}
