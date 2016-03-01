<?php

namespace Coach\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ville
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coach\AnnonceBundle\Entity\villeRepository")
 */
class ville
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
     * @ORM\Column(name="name", type="string", length=45,nullable=true)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="departement_name", type="string", length=255,nullable=true)
     */
    private $departement_name;
     /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255,nullable=true)
     */
    private $slug;
     /**
     * @var string
     *
     * @ORM\Column(name="name_simple", type="string", length=45,nullable=true)
     */
    private $name_simple;
    /**
     * @var string
     *
     * @ORM\Column(name="name_reel", type="string", length=45,nullable=true)
     */
    private $name_reel;
    /**
     * @var string
     *
     * @ORM\Column(name="name_soundex", type="string", length=45,nullable=true)
     */
    private $name_soundex;
    /**
     * @var string
     *
     * @ORM\Column(name="name_metaphone", type="string", length=45,nullable=true)
     */
    private $name_metaphone;
    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=45,nullable=true)
     */
    private $code_postal;
   /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=45,nullable=true)
     */
    private $commune;
    /**
     * @var string
     *
     * @ORM\Column(name="code_commune", type="string", length=45,nullable=true)
     */
    private $code_commune;      
    /**
     * @var string
     *
     * @ORM\Column(name="arrondissement", type="string", length=45,nullable=true)
     */
    private $arrondissement;  
    /**
     * @var string
     *
     * @ORM\Column(name="canton", type="string", length=45,nullable=true)
     */
    private $canton;      
    /**
     * @var string
     *
     * @ORM\Column(name="amdi", type="string", length=45,nullable=true)
     */
    private $amdi;
    /**
     * @var string
     *
     * @ORM\Column(name="population_2010", type="string", length=45,nullable=true)
     */
    private $population_2010;
    /**
     * @var string
     *
     * @ORM\Column(name="population_1999", type="string", length=45,nullable=true)
     */
    private $population_1999;
    /**
     * @var string
     *
     * @ORM\Column(name="population_2012", type="string", length=45,nullable=true)
     */
    private $population_2012;
    /**
     * @var string
     *
     * @ORM\Column(name="densite_2010", type="string", length=45,nullable=true)
     */
    private $densite_2010;
    /**
     * @var string
     *
     * @ORM\Column(name="surface", type="string", length=45,nullable=true)
     */
    private $surface;
    /**
     * @var string
     *
     * @ORM\Column(name="longitude_deg", type="string", length=45,nullable=true)
     */
    private $longitude_deg; 
    /**
     * @var string
     *
     * @ORM\Column(name="latitude_deg", type="string", length=45,nullable=true)
     */
    private $latitude_deg;
    /**
     * @var string
     *
     * @ORM\Column(name="longitude_grd", type="string", length=45,nullable=true)
     */
    private $longitude_grd;
    /**
     * @var string
     *
     * @ORM\Column(name="latitude_grd", type="string", length=45,nullable=true)
     */
    private $latitude_grd;
    /**
     * @var string
     *
     * @ORM\Column(name="longitude_dms", type="string", length=45,nullable=true)
     */
    private $longitude_dms;
    /**
     * @var string
     *
     * @ORM\Column(name="latitude_dms", type="string", length=45,nullable=true)
     */
    private $latitude_dms;
    /**
     * @var string
     *
     * @ORM\Column(name="zmin", type="string", length=45,nullable=true)
     */
    private $zmin;
    /**
     * @var string
     *
     * @ORM\Column(name="zmax", type="string", length=45,nullable=true)
     */
    private $zmax;      
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
     * @ORM\ManyToOne(targetEntity="Coach\AnnonceBundle\Entity\departement", inversedBy="villes",cascade={"persist"})
     */
    private $departement;
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
     * Set name
     *
     * @param string $name
     * @return ville
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
	
	 public function __toString()
    {
      return $this->getName();
    }

    /**
     * Set departement
     *
     * @param \Coach\AnnonceBundle\Entity\departement $departement
     * @return ville
     */
    public function setDepartement(\Coach\AnnonceBundle\Entity\departement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \Coach\AnnonceBundle\Entity\departement 
     */
    public function getDepartement()
    {
        return $this->departement;
    }
        

    /**
     * Set venteMaison
     *
     * @param float $venteMaison
     * @return ville
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
     * @return ville
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
     * @return ville
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
     * @return ville
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

    /**
     * Set departement_name
     *
     * @param string $departementName
     * @return ville
     */
    public function setDepartementName($departementName)
    {
        $this->departement_name = $departementName;

        return $this;
    }

    /**
     * Get departement_name
     *
     * @return string 
     */
    public function getDepartementName()
    {
        return $this->departement_name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return ville
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set name_simple
     *
     * @param string $nameSimple
     * @return ville
     */
    public function setNameSimple($nameSimple)
    {
        $this->name_simple = $nameSimple;

        return $this;
    }

    /**
     * Get name_simple
     *
     * @return string 
     */
    public function getNameSimple()
    {
        return $this->name_simple;
    }

    /**
     * Set name_reel
     *
     * @param string $nameReel
     * @return ville
     */
    public function setNameReel($nameReel)
    {
        $this->name_reel = $nameReel;

        return $this;
    }

    /**
     * Get name_reel
     *
     * @return string 
     */
    public function getNameReel()
    {
        return $this->name_reel;
    }

    /**
     * Set name_soundex
     *
     * @param string $nameSoundex
     * @return ville
     */
    public function setNameSoundex($nameSoundex)
    {
        $this->name_soundex = $nameSoundex;

        return $this;
    }

    /**
     * Get name_soundex
     *
     * @return string 
     */
    public function getNameSoundex()
    {
        return $this->name_soundex;
    }

    /**
     * Set name_metaphone
     *
     * @param string $nameMetaphone
     * @return ville
     */
    public function setNameMetaphone($nameMetaphone)
    {
        $this->name_metaphone = $nameMetaphone;

        return $this;
    }

    /**
     * Get name_metaphone
     *
     * @return string 
     */
    public function getNameMetaphone()
    {
        return $this->name_metaphone;
    }

    /**
     * Set code_postal
     *
     * @param string $codePostal
     * @return ville
     */
    public function setCodePostal($codePostal)
    {
        $this->code_postal = $codePostal;

        return $this;
    }

    /**
     * Get code_postal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * Set commune
     *
     * @param string $commune
     * @return ville
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string 
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set code_commune
     *
     * @param string $codeCommune
     * @return ville
     */
    public function setCodeCommune($codeCommune)
    {
        $this->code_commune = $codeCommune;

        return $this;
    }

    /**
     * Get code_commune
     *
     * @return string 
     */
    public function getCodeCommune()
    {
        return $this->code_commune;
    }

    /**
     * Set arrondissement
     *
     * @param string $arrondissement
     * @return ville
     */
    public function setArrondissement($arrondissement)
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    /**
     * Get arrondissement
     *
     * @return string 
     */
    public function getArrondissement()
    {
        return $this->arrondissement;
    }

    /**
     * Set canton
     *
     * @param string $Canton
     * @return ville
     */
    public function setCanton($Canton)
    {
        $this->canton = $Canton;

        return $this;
    }

    /**
     * Get canton
     *
     * @return string 
     */
    public function getCanton()
    {
        return $this->canton;
    }

    /**
     * Set amdi
     *
     * @param string $Amdi
     * @return ville
     */
    public function setAmdi($Amdi)
    {
        $this->amdi = $Amdi;

        return $this;
    }

    /**
     * Get amdi
     *
     * @return string 
     */
    public function getAmdi()
    {
        return $this->amdi;
    }

    /**
     * Set population_2010
     *
     * @param string $population2010
     * @return ville
     */
    public function setPopulation2010($population2010)
    {
        $this->population_2010 = $population2010;

        return $this;
    }

    /**
     * Get population_2010
     *
     * @return string 
     */
    public function getPopulation2010()
    {
        return $this->population_2010;
    }

    /**
     * Set population_1999
     *
     * @param string $population1999
     * @return ville
     */
    public function setPopulation1999($population1999)
    {
        $this->population_1999 = $population1999;

        return $this;
    }

    /**
     * Get population_1999
     *
     * @return string 
     */
    public function getPopulation1999()
    {
        return $this->population_1999;
    }

    /**
     * Set population_2012
     *
     * @param string $population2012
     * @return ville
     */
    public function setPopulation2012($population2012)
    {
        $this->population_2012 = $population2012;

        return $this;
    }

    /**
     * Get population_2012
     *
     * @return string 
     */
    public function getPopulation2012()
    {
        return $this->population_2012;
    }

    /**
     * Set densite_2010
     *
     * @param string $densite2010
     * @return ville
     */
    public function setDensite2010($densite2010)
    {
        $this->densite_2010 = $densite2010;

        return $this;
    }

    /**
     * Get densite_2010
     *
     * @return string 
     */
    public function getDensite2010()
    {
        return $this->densite_2010;
    }

    /**
     * Set surface
     *
     * @param string $surface
     * @return ville
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return string 
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set longitude_deg
     *
     * @param string $longitudeDeg
     * @return ville
     */
    public function setLongitudeDeg($longitudeDeg)
    {
        $this->longitude_deg = $longitudeDeg;

        return $this;
    }

    /**
     * Get longitude_deg
     *
     * @return string 
     */
    public function getLongitudeDeg()
    {
        return $this->longitude_deg;
    }

    /**
     * Set latitude_deg
     *
     * @param string $latitudeDeg
     * @return ville
     */
    public function setLatitudeDeg($latitudeDeg)
    {
        $this->latitude_deg = $latitudeDeg;

        return $this;
    }

    /**
     * Get latitude_deg
     *
     * @return string 
     */
    public function getLatitudeDeg()
    {
        return $this->latitude_deg;
    }

    /**
     * Set longitude_grd
     *
     * @param string $longitudeGrd
     * @return ville
     */
    public function setLongitudeGrd($longitudeGrd)
    {
        $this->longitude_grd = $longitudeGrd;

        return $this;
    }

    /**
     * Get longitude_grd
     *
     * @return string 
     */
    public function getLongitudeGrd()
    {
        return $this->longitude_grd;
    }

    /**
     * Set latitude_grd
     *
     * @param string $latitudeGrd
     * @return ville
     */
    public function setLatitudeGrd($latitudeGrd)
    {
        $this->latitude_grd = $latitudeGrd;

        return $this;
    }

    /**
     * Get latitude_grd
     *
     * @return string 
     */
    public function getLatitudeGrd()
    {
        return $this->latitude_grd;
    }

    /**
     * Set longitude_dms
     *
     * @param string $longitudeDms
     * @return ville
     */
    public function setLongitudeDms($longitudeDms)
    {
        $this->longitude_dms = $longitudeDms;

        return $this;
    }

    /**
     * Get longitude_dms
     *
     * @return string 
     */
    public function getLongitudeDms()
    {
        return $this->longitude_dms;
    }

    /**
     * Set latitude_dms
     *
     * @param string $latitudeDms
     * @return ville
     */
    public function setLatitudeDms($latitudeDms)
    {
        $this->latitude_dms = $latitudeDms;

        return $this;
    }

    /**
     * Get latitude_dms
     *
     * @return string 
     */
    public function getLatitudeDms()
    {
        return $this->latitude_dms;
    }

    /**
     * Set zmin
     *
     * @param string $zmin
     * @return ville
     */
    public function setZmin($zmin)
    {
        $this->zmin = $zmin;

        return $this;
    }

    /**
     * Get zmin
     *
     * @return string 
     */
    public function getZmin()
    {
        return $this->zmin;
    }

    /**
     * Set zmax
     *
     * @param string $zmax
     * @return ville
     */
    public function setZmax($zmax)
    {
        $this->zmax = $zmax;

        return $this;
    }

    /**
     * Get zmax
     *
     * @return string 
     */
    public function getZmax()
    {
        return $this->zmax;
    }
}
