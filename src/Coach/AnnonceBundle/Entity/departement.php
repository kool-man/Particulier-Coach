<?php

namespace Coach\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * departement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class departement
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
	
	 /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;
    /**
     * @var float
     *
     * @ORM\Column(name="vente_maison", type="float")
     */
    private $venteMaison=0;
    /**
     * @var float
     *
     * @ORM\Column(name="vente_appartement", type="float")
     */
    private $venteAppartement=0;/**
     * @var float
     *
     * @ORM\Column(name="location_maison", type="float")
     */
    private $locationMaison=0;
    /**
     * @var float
     *
     * @ORM\Column(name="location_appartement", type="float")
     */
    private $locationAppartement=0;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Coach\AnnonceBundle\Entity\region", inversedBy="departement",cascade={"persist"})
     */
    private $region;
	/**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Coach\AnnonceBundle\Entity\ville", mappedBy="departement",cascade={"persist"})
     */
    private $villes;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
	
	public function __toString(){
		return $this->getName();
	}
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->villes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return departement
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return departement
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set region
     *
     * @param \Coach\AnnonceBundle\Entity\region $region
     * @return departement
     */
    public function setRegion(\Coach\AnnonceBundle\Entity\region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \Coach\AnnonceBundle\Entity\region 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Add villes
     *
     * @param \Coach\AnnonceBundle\Entity\ville $villes
     * @return departement
     */
    public function addVille(\Coach\AnnonceBundle\Entity\ville $villes)
    {
        $this->villes[] = $villes;

        return $this;
    }

    /**
     * Remove villes
     *
     * @param \Coach\AnnonceBundle\Entity\ville $villes
     */
    public function removeVille(\Coach\AnnonceBundle\Entity\ville $villes)
    {
        $this->villes->removeElement($villes);
    }

    /**
     * Get villes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVilles()
    {
        return $this->villes;
    }

    /**
     * Set venteMaison
     *
     * @param float $venteMaison
     * @return departement
     */
    public function setVenteMaison($venteMaison)
    {
        $this->venteMaison = $venteMaison;

        return $this;
    }

    /**
     * Get venteMaison
     *
     * @return float 
     */
    public function getVenteMaison()
    {
        return $this->venteMaison;
    }

    /**
     * Set venteAppartement
     *
     * @param float $venteAppartement
     * @return departement
     */
    public function setVenteAppartement($venteAppartement)
    {
        $this->venteAppartement = $venteAppartement;

        return $this;
    }

    /**
     * Get venteAppartement
     *
     * @return float 
     */
    public function getVenteAppartement()
    {
        return $this->venteAppartement;
    }

    /**
     * Set locationMaison
     *
     * @param float $locationMaison
     * @return departement
     */
    public function setLocationMaison($locationMaison)
    {
        $this->locationMaison = $locationMaison;

        return $this;
    }

    /**
     * Get locationMaison
     *
     * @return float 
     */
    public function getLocationMaison()
    {
        return $this->locationMaison;
    }

    /**
     * Set locationAppartement
     *
     * @param float $locationAppartement
     * @return departement
     */
    public function setLocationAppartement($locationAppartement)
    {
        $this->locationAppartement = $locationAppartement;

        return $this;
    }

    /**
     * Get locationAppartement
     *
     * @return float 
     */
    public function getLocationAppartement()
    {
        return $this->locationAppartement;
    }
}
