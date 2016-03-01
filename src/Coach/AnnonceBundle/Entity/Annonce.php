<?php

namespace Coach\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Annonce
 * @ORM\Table(name="Annonce")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Coach\AnnonceBundle\Entity\AnnonceRepository")
 */
class Annonce
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
     * @var \DateTime
     *
     * @ORM\Column(name="expired_at", type="datetime")
     */
    private $expiredAt;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_annonce", type="string", length=255)
     */
    private $referenceAnnonce = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description="";
	
    /**
     * @var string
     *
     * @ORM\Column(name="etat_bien", type="string",length=255,nullable=true)
     */
    private $etatBien;
    /**
     * @var string
     *
     * @ORM\Column(name="annee_construction", type="string",length=255,nullable=true)
     */
    private $anneeConstruction="";	
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse="";

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
	 * @Assert\Length(max=100)
     */
    private $titre="";

    /**
     * @var integer
     *
     * @ORM\Column(name="surface", type="integer")
     */
    private $surface=0;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="decimal")
     */
    private $prix=0;
	
    /**
      * @ORM\ManyToMany(targetEntity="Coach\AnnonceBundle\Entity\Proximite")
      */
    private $proximite;
	
    /**
      * @ORM\ManyToMany(targetEntity="Coach\EstimationBundle\Entity\loisirAnnonce")
    */
    private $loisirAnnonce;
	
    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string",length=255)
     */
    private $cp="";
    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string",length=255)
     */
    private $ville="";	
     /**
     * @var integer
     *
     * @ORM\Column(name="pack", type="integer",nullable=true)
     */ 
    private $pack=0;
	
     /**
     * @ORM\ManyToOne(targetEntity="Coach\AnnonceBundle\Entity\region")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id", onDelete="SET NULL")
     */
	 
    private $region;
	
     /**
     * @ORM\ManyToOne(targetEntity="Coach\AnnonceBundle\Entity\departement")
     * @ORM\JoinColumn(name="departement_id", referencedColumnName="id", onDelete="SET NULL")
     */
	 
    private $departement;
    /**
     * @ORM\ManyToOne(targetEntity="Coach\AnnonceBundle\Entity\ville")
     * @ORM\JoinColumn(name="ville_id", referencedColumnName="id", onDelete="SET NULL")
     */
	 
    private $ville_id;
    /**
     * @var integer
     *
     * @ORM\Column(name="nom", type="string",length=255)
     */
    private $nom="";
    /**
     * @var integer
     *
     * @ORM\Column(name="email", type="string",length=255)
     */
    private $email="";
    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string",length=255)
     */
    private $tel1="";
    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string",length=255,nullable=true)
     */
    private $tel2;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="civilite", type="string",length=255,nullable=true)
     */
    private $civilite;
    /**
     * @var string
     *
     * @ORM\Column(name="nb_pieces", type="string",length=255,nullable=true)
     */
    private $nbPieces;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_chambre", type="string",length=255,nullable=true)
     */
    private $nbChambre;
    /**
     * @var boolean
     *
     * @ORM\Column(name="vendu", type="boolean")
     */
    private $vendu = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="nb_parking", type="string",length=255,nullable=true)
     */
    private $nbParking;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="optionAnnonce", type="integer",nullable=true)
     */
    private $optionAnnonce;
    /**
     * @var integer
     *
     * @ORM\Column(name="classAnnonce", type="integer",nullable=true)
     */
    private $classAnnonce;
    /**
     * @var integer
     *
     * @ORM\Column(name="typeAnnonce", type="integer",nullable=true)
     */
    private $typeAnnonce;
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Coach\AnnonceBundle\Entity\MesImages", mappedBy="annonce",cascade={"persist"})
     */
    private $mesImages;
	/**
     * @var  integer
     *
     * @ORM\Column(name="nb_vue", type="integer")
     */
    private $nb_vue=0;
	 /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_validation", type="datetime",nullable=true)
     */
    private $date_validation;
     /**
     * @var  boolean
     *
     * @ORM\Column(name="enabled", type="boolean",nullable=true)
     */
    private $enabled='N';
    
    /**
     * @var  boolean
     *
     * @ORM\Column(name="valider", type="boolean",nullable=true)
     */
    private $valider='N';
    /**
     * @var  boolean
     *
     * @ORM\Column(name="activer", type="boolean",nullable=true)
     */
    private $activer='N';
  
    /**
     * @var string $path
     *
     * @ORM\Column(name="path", type="string", length=255,nullable=true)
     */
    private $path;
     /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=255,nullable=true)
     */
    private $url;
     /**
     * @var string $keywords
     *
     * @ORM\Column(name="keywords", type="string", length=255,nullable=true)
     */
    private $keywords;	
    /**
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\ContactPerson",inversedBy="annonces",cascade={"persist"})
     */
    private $annonceur;
     /**
     * @ORM\OneToOne(targetEntity="Coach\AnnonceBundle\Entity\Commande", mappedBy="annonce")
     **/
    private $commande;
    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
	$this->setExpiredAt(new \DateTime());
	$this->loisirAnnonce = new \Doctrine\Common\Collections\ArrayCollection();
        $this->proximite     = new \Doctrine\Common\Collections\ArrayCollection();
		
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
     * Set createdAt
     * @param \DateTime $createdAt
     * @return Annonce
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
     * @param \DateTime $updatedAt
     * @return Annonce
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
     * Set referenceAnnonce
     *
     * @param string $referenceAnnonce
     * @return Annonce
     */
    public function setReferenceAnnonce($referenceAnnonce)
    {
        $this->referenceAnnonce = $referenceAnnonce;

        return $this;
    }

    /**
     * Get referenceAnnonce
     *
     * @return string 
     */
    public function getReferenceAnnonce()
    {
        return $this->referenceAnnonce;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonce
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
    public function getDescription($length = null)
    {
        
        if (false === is_null($length) && $length > 0)
            return substr($this->description, 0, $length);
        else
            return $this->description;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Annonce
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
     * Set surface
     *
     * @param integer $surface
     * @return Annonce
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return integer 
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set nbPieces
     *
     * @param string $nbPieces
     * @return Annonce
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
     * @return Annonce
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
     * Set nbParking
     *
     * @param string $nbParking
     * @return Annonce
     */
    public function setNbParking($nbParking)
    {
        $this->nbParking = $nbParking;

        return $this;
    }

    /**
     * Get nbParking
     *
     * @return string 
     */
    public function getNbParking()
    {
        return $this->nbParking;
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
    
    /**
     * Add mesImages
     *
     * @param \Coach\AnnonceBundle\Entity\MesImages $mesImages
     * @return Annonce
     */
    public function addMesImage(\Coach\AnnonceBundle\Entity\MesImages $mesImages)
    {   
        $this->mesImages[] = $mesImages;
        $mesImages->setAnnonce($this);
        
        return $this;
    }

    /**
     * Remove mesImages
     *
     * @param \Coach\AnnonceBundle\Entity\Images $mesImages
     */
    public function removeMesImage(\Coach\AnnonceBundle\Entity\MesImages $mesImages)
    {
        $this->mesImages->removeElement($mesImages);
    }

    /**
     * Get mesImages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMesImages()
    {
        return $this->mesImages;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Annonce
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
     * Set nom
     *
     * @param string $nom
     * @return Annonce
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
     * Set email
     *
     * @param string $email
     * @return Annonce
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
     * Set civilite
     *
     * @param string $civilite
     * @return Annonce
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
     * Set annonceur
     *
     * @param \Application\Sonata\UserBundle\Entity\ContactPerson $annonceur
     * @return Annonce
     */
    public function setAnnonceur(\Application\Sonata\UserBundle\Entity\ContactPerson $annonceur = null)
    {
        $this->annonceur = $annonceur;

        return $this;
    }

    /**
     * Get annonceur
     *
     * @return \Application\Sonata\UserBundle\Entity\ContactPerson 
     */
    public function getAnnonceur()
    {
        return $this->annonceur;
    }

    /**
     * Set expiredAt
     *
     * @param \DateTime $expiredAt
     * @return Annonce
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;

        return $this;
    }

    /**
     * Get expiredAt
     *
     * @return \DateTime 
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * Set tel1
     *
     * @param string $tel1
     * @return Annonce
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string 
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     * @return Annonce
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string 
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Annonce
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
     * Set url
     *
     * @param string $url
     * @return Annonce
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Annonce
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set nb_vue
     *
     * @param integer $nbVue
     * @return Annonce
     */
    public function setNbVue($nbVue)
    {
        $this->nb_vue = $nbVue;

        return $this;
    }

    /**
     * Get nb_vue
     *
     * @return integer 
     */
    public function getNbVue()
    {
        return $this->nb_vue;
    }

    /**
     * Set date_validation
     *
     * @param \DateTime $dateValidation
     * @return Annonce
     */
    public function setDateValidation($dateValidation)
    {
        $this->date_validation = $dateValidation;

        return $this;
    }

    /**
     * Get date_validation
     *
     * @return \DateTime 
     */
    public function getDateValidation()
    {
        return $this->date_validation;
    }

    

    /**
     * Set vendu
     *
     * @param boolean $vendu
     * @return Annonce
     */
    public function setVendu($vendu)
    {
        $this->vendu = $vendu;

        return $this;
    }

    /**
     * Get vendu
     *
     * @return boolean 
     */
    public function getVendu()
    {
        return $this->vendu;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Annonce
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Annonce
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
     * @return Annonce
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
     * Add proximite
     *
     * @param \Coach\AnnonceBundle\Entity\Proximite $proximite
     * @return Annonce
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
     * @return Annonce
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
     * Set region
     *
     * @param \Coach\AnnonceBundle\Entity\region $region
     * @return Annonce
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
     * Set departement
     *
     * @param \Coach\AnnonceBundle\Entity\departement $departement
     * @return Annonce
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
     * Set pack
     *
     * @param $pack
     * @return Annonce
     */
    public function setPack($pack)
    {
        $this->pack = $pack;

        return $this;
    }

    /**
     * Get pack
     *
     * @return integer 
     */
    public function getPack()
    {
        return $this->pack;
    }

    /**
     * Set etatBien
     *
     * @param string $etatBien
     * @return Annonce
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
     * @return Annonce
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
     * Set ville_id
     *
     * @param \Coach\AnnonceBundle\Entity\ville $villeId
     * @return Annonce
     */
    public function setVilleId(\Coach\AnnonceBundle\Entity\ville $villeId = null)
    {
        $this->ville_id = $villeId;

        return $this;
    }

    /**
     * Get ville_id
     *
     * @return \Coach\AnnonceBundle\Entity\ville 
     */
    public function getVilleId()
    {
        return $this->ville_id;
    }

    /**
     * Set commande
     *
     * @param \Coach\AnnonceBundle\Entity\Commande $commande
     * @return Annonce
     */
    public function setCommande(\Coach\AnnonceBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \Coach\AnnonceBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set optionAnnonce
     *
     * @param integer $optionAnnonce
     * @return Annonce
     */
    public function setOptionAnnonce($optionAnnonce)
    {
        $this->optionAnnonce = $optionAnnonce;

        return $this;
    }

    /**
     * Get optionAnnonce
     *
     * @return integer 
     */
    public function getOptionAnnonce()
    {
        return $this->optionAnnonce;
    }

    /**
     * Set classAnnonce
     *
     * @param integer $classAnnonce
     * @return Annonce
     */
    public function setClassAnnonce($classAnnonce)
    {
        $this->classAnnonce = $classAnnonce;

        return $this;
    }

    /**
     * Get classAnnonce
     *
     * @return integer 
     */
    public function getClassAnnonce()
    {
        return $this->classAnnonce;
    }

    /**
     * Set typeAnnonce
     *
     * @param integer $typeAnnonce
     * @return Annonce
     */
    public function setTypeAnnonce($typeAnnonce)
    {
        $this->typeAnnonce = $typeAnnonce;

        return $this;
    }

    /**
     * Get typeAnnonce
     *
     * @return integer 
     */
    public function getTypeAnnonce()
    {
        return $this->typeAnnonce;
    }

    /**
     * Set valider
     *
     * @param boolean $valider
     * @return Annonce
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return boolean 
     */
    public function getValider()
    {
        return $this->valider;
    }
    
    /**
     * Get activer
     *
     * @return boolean 
     */
    public function getActiver()
    {
        return $this->activer;
    }
    
    /**
     * Set activer
     *
     * @param boolean $activer
     * @return Annonce
     */
    public function setActiver($activer)
    {
        $this->activer = $activer;

        return $this;
    }    
}
