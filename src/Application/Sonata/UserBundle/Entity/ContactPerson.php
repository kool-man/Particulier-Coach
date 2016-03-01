<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactPerson
 *
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Application\Sonata\UserBundle\Entity\ContactPersonRepository")
 */
class ContactPerson
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255,nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255,nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255,nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255,nullable=true)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="cp", type="integer",nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="password_clear", type="string", length=255,nullable=true)
     */
    private $password_clear;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255,nullable=true)
     */
    private $adresse;
    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255,nullable=true)
     */
    private $profession;
    /**
     *
     * @ORM\OneToMany(targetEntity="Coach\PanneauBundle\Entity\Panneau",mappedBy="client",cascade={"persist"}))
     */
    private $panneaux;
    /**
     *
     * @ORM\OneToMany(targetEntity="Coach\EstimationBundle\Entity\estimation",mappedBy="client",cascade={"persist"}))
     */
    private $estimation;
    /**
     *
     * @ORM\OneToMany(targetEntity="Coach\ReservationBundle\Entity\Reservation",mappedBy="client",cascade={"persist"})
     */
    private $reservations;
    /**
     *
     * @ORM\OneToMany(targetEntity="Coach\AnnonceBundle\Entity\Commande",mappedBy="client",cascade={"persist"})
     */
    private $commandes;
    /**
     *
     * @ORM\OneToMany(targetEntity="Coach\AnnonceBundle\Entity\Annonce",mappedBy="annonceur")
     */
    private $annonces;
    /**
    * @ORM\OneToMany(targetEntity="Application\Sonata\UserBundle\Entity\Message",mappedBy="sender")
    */
    private $messages_envoyes;
    /**
    * @ORM\OneToMany(targetEntity="Application\Sonata\UserBundle\Entity\Message",mappedBy="receiver")
    */
    private $messages_recus;
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
     *
     * @param \DateTime $createdAt
     * @return ContactPerson
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
     * @return ContactPerson
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
     * Set nom
     *
     * @param string $nom
     * @return ContactPerson
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
     * @return ContactPerson
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
     * Set telephone
     *
     * @param string $telephone
     * @return ContactPerson
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return ContactPerson
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
     * @param integer $cp
     * @return ContactPerson
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
     * Set email
     *
     * @param string $email
     * @return ContactPerson
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
    public function __toString(){
        return $this->getEmail();
    }
    /**
     * Set adresse
     *
     * @param string $adresse
     * @return ContactPerson
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
    
    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
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
     * Add panneaux
     *
     * @param \Coach\PanneauBundle\Entity\Panneau $panneaux
     * @return ContactPerson
     */
    public function addPanneaux(\Coach\PanneauBundle\Entity\Panneau $panneaux)
    {
        $this->panneaux[] = $panneaux;

        return $this;
    }

    /**
     * Remove panneaux
     *
     * @param \Coach\PanneauBundle\Entity\Panneau $panneaux
     */
    public function removePanneaux(\Coach\PanneauBundle\Entity\Panneau $panneaux)
    {
        $this->panneaux->removeElement($panneaux);
    }

    /**
     * Get panneaux
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPanneaux()
    {
        return $this->panneaux;
    }
    
    /**
     * Add reservations
     *
     * @param \Coach\ReservationBundle\Entity\Reservation $reservations
     * @return User
     */
    public function addReservation(\Coach\ReservationBundle\Entity\Reservation $reservations)
    {
        $this->reservations[] = $reservations;

        return $this;
    }

    /**
     * Remove reservations
     *
     * @param \Coach\ReservationBundle\Entity\Reservation $reservations
     */
    public function removeReservation(\Coach\ReservationBundle\Entity\Reservation $reservations)
    {
        $this->reservations->removeElement($reservations);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Add estimation
     *
     * @param \Coach\EstimationBundle\Entity\estimation $estimation
     * @return ContactPerson
     */
    public function addEstimation(\Coach\EstimationBundle\Entity\estimation $estimation)
    {
        $this->estimation[] = $estimation;

        return $this;
    }

    /**
     * Remove estimation
     *
     * @param \Coach\EstimationBundle\Entity\estimation $estimation
     */
    public function removeEstimation(\Coach\EstimationBundle\Entity\estimation $estimation)
    {
        $this->estimation->removeElement($estimation);
    }

    /**
     * Get estimation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstimation()
    {
        return $this->estimation;
    }

    /**
     * Set profession
     *
     * @param string $profession
     * @return ContactPerson
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string 
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Add annonces
     *
     * @param \Coach\AnnonceBundle\Entity\Annonce $annonces
     * @return ContactPerson
     */
    public function addAnnonce(\Coach\AnnonceBundle\Entity\Annonce $annonces)
    {
        $this->annonces[] = $annonces;

        return $this;
    }

    /**
     * Remove annonces
     *
     * @param \Coach\AnnonceBundle\Entity\Annonce $annonces
     */
    public function removeAnnonce(\Coach\AnnonceBundle\Entity\Annonce $annonces)
    {
        $this->annonces->removeElement($annonces);
    }

    /**
     * Get annonces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }

    /**
     * Set password_clear
     *
     * @param string $passwordClear
     * @return ContactPerson
     */
    public function setPasswordClear($passwordClear)
    {
        $this->password_clear = $passwordClear;

        return $this;
    }

    /**
     * Get password_clear
     *
     * @return string 
     */
    public function getPasswordClear()
    {
        return $this->password_clear;
    }


    /**
     * Add messages_envoyes
     *
     * @param \Application\Sonata\UserBundle\Entity\Message $messagesEnvoyes
     * @return ContactPerson
     */
    public function addMessagesEnvoye(\Application\Sonata\UserBundle\Entity\Message $messagesEnvoyes)
    {
        $this->messages_envoyes[] = $messagesEnvoyes;

        return $this;
    }

    /**
     * Remove messages_envoyes
     *
     * @param \Application\Sonata\UserBundle\Entity\Message $messagesEnvoyes
     */
    public function removeMessagesEnvoye(\Application\Sonata\UserBundle\Entity\Message $messagesEnvoyes)
    {
        $this->messages_envoyes->removeElement($messagesEnvoyes);
    }

    /**
     * Get messages_envoyes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessagesEnvoyes()
    {
        return $this->messages_envoyes;
    }

    /**
     * Add messages_recus
     *
     * @param \Application\Sonata\UserBundle\Entity\Message $messagesRecus
     * @return ContactPerson
     */
    public function addMessagesRecus(\Application\Sonata\UserBundle\Entity\Message $messagesRecus)
    {
        $this->messages_recus[] = $messagesRecus;

        return $this;
    }

    /**
     * Remove messages_recus
     *
     * @param \Application\Sonata\UserBundle\Entity\Message $messagesRecus
     */
    public function removeMessagesRecus(\Application\Sonata\UserBundle\Entity\Message $messagesRecus)
    {
        $this->messages_recus->removeElement($messagesRecus);
    }

    /**
     * Get messages_recus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessagesRecus()
    {
        return $this->messages_recus;
    }

    /**
     * Add commandes
     *
     * @param \Coach\AnnonceBundle\Entity\Commande $commandes
     * @return ContactPerson
     */
    public function addCommande(\Coach\AnnonceBundle\Entity\Commande $commandes)
    {
        $this->commandes[] = $commandes;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \Coach\AnnonceBundle\Entity\Commande $commandes
     */
    public function removeCommande(\Coach\AnnonceBundle\Entity\Commande $commandes)
    {
        $this->commandes->removeElement($commandes);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommandes()
    {
        return $this->commandes;
    }
}
