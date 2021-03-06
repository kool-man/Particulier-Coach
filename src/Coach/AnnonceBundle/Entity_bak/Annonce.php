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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\Length(max=100)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="surface", type="string",length=255)
     */
    private $surface;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;
    /**
     * @var integer
     *
     * @ORM\Column(name="proximite", type="string",length=255)
     */
    private $proximite;
    /**
     * @var integer
     *
     * @ORM\Column(name="cp", type="string",length=255)
     */
    private $cp;
    /**
     * @var integer
     *
     * @ORM\Column(name="ville", type="string",length=255)
     */
    private $ville;
    /**
     * @var integer
     *
     * @ORM\Column(name="nom", type="string",length=255)
     */
    private $nom;
    /**
     * @var integer
     *
     * @ORM\Column(name="email", type="string",length=255)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string",length=255)
     */
    private $tel1;
    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string",length=255)
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
     * @var boolean
     *
     * @ORM\Column(name="vendu", type="boolean")
     */
    private $vendu = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_parking", type="string",length=255)
     */
    private $nbParking;

     /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Coach\AnnonceBundle\Entity\OptionAnnonce", inversedBy="annonce",cascade={"persist"})
     */
    private $optionAnnonce;
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Coach\AnnonceBundle\Entity\ClassAnnonce", inversedBy="annonce",cascade={"persist"})
     */
    private $classAnnonce;
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Coach\AnnonceBundle\Entity\TypeAnnonce", inversedBy="annonce",cascade={"persist"})
     */
    private $typeAnnonce;
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Coach\AnnonceBundle\Entity\MesImages", mappedBy="annonce")
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
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled=0;
	/**
     * @Assert\File(
     *     maxSize = "500M",
     *     mimeTypes = {"image/jpeg", "image/png", "image/gif"},
     *     mimeTypesMessage = "ce format d'image est inconnu",
     *     uploadIniSizeErrorMessage = "uploaded file is larger than the upload_max_filesize PHP.ini setting",
     *     uploadFormSizeErrorMessage = "uploaded file is larger than allowed by the HTML file input field",
     *     uploadErrorMessage = "uploaded file could not be uploaded for some unknown reason",
     *     maxSizeMessage = "fichier trop volumineux"
     * )
     */
    public $file;
 
   
    /**
     * @var string $path
     *
     * @ORM\Column(name="path", type="string", length=255)
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
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User",inversedBy="annonces",cascade={"persist"})
     */
    private $annonceur;
    
    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
	$this->setExpiredAt(new \DateTime());
		
    }

	  
    //les 4 fonctions suivantes sont pour le upload
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }
     
    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }
     
    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../web/bundles/coachannonce/'.$this->getUploadDir();
    }
     
    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'images/uploads/'.$this->getId();
    }
     
    // **** les 3 fonctions suivantes servent à gérer le callback et l'upload de file
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
	//mkdir(__DIR__."/../../../../web/bundles/coachannonce/images/uploads/".$this->getId());
        var_dump($this->file);
         
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->path = uniqid().'.'.$this->file->guessExtension();
        }
    }
     
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }
          
        // ** on peut mettre ça si on veut faire que le nom corresponde au nom de l'image original
        //$this->setName($this->file->getClientOriginalName());
     
        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        //$this->file->move($this->getUploadRootDir(), $this->path);
     $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
     $this->path = $this->file->getClientOriginalName(); 
     $this->file = null;
    }
     
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
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
    public function getDescription()
    {
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
     * Set optionAnnonce
     *
     * @param \Coach\AnnonceBundle\Entity\optionAnnonce $optionAnnonce
     * @return Annonce
     */
    public function setOptionAnnonce(\Coach\AnnonceBundle\Entity\OptionAnnonce $optionAnnonce = null)
    {
        $this->optionAnnonce = $optionAnnonce;

        return $this;
    }

    /**
     * Get optionAnnonce
     *
     * @return \Coach\AnnonceBundle\Entity\optionAnnonce 
     */
    public function getOptionAnnonce()
    {
        return $this->optionAnnonce;
    }

    /**
     * Set classAnnonce
     *
     * @param \Coach\AnnonceBundle\Entity\classAnnonce $classAnnonce
     * @return Annonce
     */
    public function setClassAnnonce(\Coach\AnnonceBundle\Entity\ClassAnnonce $classAnnonce = null)
    {
        $this->classAnnonce = $classAnnonce;

        return $this;
    }

    /**
     * Get classAnnonce
     *
     * @return \Coach\AnnonceBundle\Entity\classAnnonce 
     */
    public function getClassAnnonce()
    {
        return $this->classAnnonce;
    }

    /**
     * Set typeAnnonce
     *
     * @param \Coach\AnnonceBundle\Entity\typeAnnonce $typeAnnonce
     * @return Annonce
     */
    public function setTypeAnnonce(\Coach\AnnonceBundle\Entity\TypeAnnonce $typeAnnonce = null)
    {
        $this->typeAnnonce = $typeAnnonce;

        return $this;
    }

    /**
     * Get typeAnnonce
     *
     * @return \Coach\AnnonceBundle\Entity\typeAnnonce 
     */
    public function getTypeAnnonce()
    {
        return $this->typeAnnonce;
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
     * Set proximite
     *
     * @param string $proximite
     * @return Annonce
     */
    public function setProximite($proximite)
    {
        $this->proximite = $proximite;

        return $this;
    }

    /**
     * Get proximite
     *
     * @return string 
     */
    public function getProximite()
    {
        return $this->proximite;
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
     * @param \Application\Sonata\UserBundle\Entity\User $annonceur
     * @return Annonce
     */
    public function setAnnonceur(\Application\Sonata\UserBundle\Entity\User $annonceur = null)
    {
        $this->annonceur = $annonceur;

        return $this;
    }

    /**
     * Get annonceur
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
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
}
