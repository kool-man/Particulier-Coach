<?php

namespace Coach\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * region
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class region
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
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Coach\AnnonceBundle\Entity\departement", mappedBy="region",cascade={"persist"})
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
	public function __toString(){
		return null;
	}
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departement = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return region
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
     * Add departement
     *
     * @param \Coach\AnnonceBundle\Entity\departement $departement
     * @return region
     */
    public function addDepartement(\Coach\AnnonceBundle\Entity\departement $departement)
    {
        $this->departement[] = $departement;

        return $this;
    }

    /**
     * Remove departement
     *
     * @param \Coach\AnnonceBundle\Entity\departement $departement
     */
    public function removeDepartement(\Coach\AnnonceBundle\Entity\departement $departement)
    {
        $this->departement->removeElement($departement);
    }

    /**
     * Get departement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartement()
    {
        return $this->departement;
    }
}
