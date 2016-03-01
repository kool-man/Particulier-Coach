<?php

namespace Coach\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Commande
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
     * @ORM\Column(name="reference", type="string", length=25,nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="typePaiement", type="string", length=40,nullable=true)
     */
    private $typePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="string", length=20,nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbProducts", type="integer",nullable=true)
     */
    private $nbProducts;

    /**
     * @var float
     *
     * @ORM\Column(name="prixProducts", type="float",nullable=true)
     */
    private $prixProducts;
    /**
     * @var boolean
     *
     * @ORM\Column(name="accepte", type="boolean",nullable=true)
     */
    private $accepte;
    /**
     * @ORM\OneToOne(targetEntity="Coach\AnnonceBundle\Entity\Annonce", inversedBy="commande")
     * @ORM\JoinColumn(name="annonce_id", referencedColumnName="id")
     **/
    private $annonce;
    
    /**
     * @ORM\OneToOne(targetEntity="Coach\ReservationBundle\Entity\Reservation", inversedBy="commande")
     * @ORM\JoinColumn(name="reservation_id", referencedColumnName="id")
     **/
    private $reservation;
    /**
     * @ORM\OneToOne(targetEntity="Coach\PanneauBundle\Entity\Panneau", inversedBy="commande")
     * @ORM\JoinColumn(name="panneau_id", referencedColumnName="id")
     **/
    private $panneau;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\ContactPerson",inversedBy="reservations",cascade={"persist"})
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
     * Set reference
     *
     * @param string $reference
     * @return Commande
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set typePaiement
     *
     * @param string $typePaiement
     * @return Commande
     */
    public function setTypePaiement($typePaiement)
    {
        $this->typePaiement = $typePaiement;

        return $this;
    }

    /**
     * Get typePaiement
     *
     * @return string 
     */
    public function getTypePaiement()
    {
        return $this->typePaiement;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Commande
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set nbProducts
     *
     * @param integer $nbProducts
     * @return Commande
     */
    public function setNbProducts($nbProducts)
    {
        $this->nbProducts = $nbProducts;

        return $this;
    }

    /**
     * Get nbProducts
     *
     * @return integer 
     */
    public function getNbProducts()
    {
        return $this->nbProducts;
    }

    /**
     * Set prixProducts
     *
     * @param float $prixProducts
     * @return Commande
     */
    public function setPrixProducts($prixProducts)
    {
        $this->prixProducts = $prixProducts;

        return $this;
    }

    /**
     * Get prixProducts
     *
     * @return float 
     */
    public function getPrixProducts()
    {
        return $this->prixProducts;
    }
    

    /**
     * Set accepte
     *
     * @param boolean $accepte
     * @return Commande
     */
    public function setAccepte($accepte)
    {
        $this->accepte = $accepte;

        return $this;
    }

    /**
     * Get accepte
     *
     * @return boolean 
     */
    public function getAccepte()
    {
        return $this->accepte;
    }

    /**
     * Set annonce
     *
     * @param \Coach\AnnonceBundle\Entity\Annonce $annonce
     * @return Commande
     */
    public function setAnnonce(\Coach\AnnonceBundle\Entity\Annonce $annonce = null)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get annonce
     *
     * @return \Coach\AnnonceBundle\Entity\Annonce 
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * Set reservation
     *
     * @param \Coach\ReservationBundle\Entity\Reservation $reservation
     * @return Commande
     */
    public function setReservation(\Coach\ReservationBundle\Entity\Reservation $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \Coach\ReservationBundle\Entity\Reservation 
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Set panneau
     *
     * @param \Coach\PanneauBundle\Entity\Panneau $panneau
     * @return Commande
     */
    public function setPanneau(\Coach\PanneauBundle\Entity\Panneau $panneau = null)
    {
        $this->panneau = $panneau;

        return $this;
    }

    /**
     * Get panneau
     *
     * @return \Coach\PanneauBundle\Entity\Panneau 
     */
    public function getPanneau()
    {
        return $this->panneau;
    }

    /**
     * Set client
     *
     * @param \Application\Sonata\UserBundle\Entity\ContactPerson $client
     * @return Commande
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
}
