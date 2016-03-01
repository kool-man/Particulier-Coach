<?php

namespace Coach\PackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionInfo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class OptionInfo
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
     * @ORM\Column(name="description", type="string")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="Coach\PackBundle\Entity\OptionPack", mappedBy="idOption")
     */
    private $packs;

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
     * Set description
     *
     * @param $description
     * @return OptionInfo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set coachingPack
     *
     * @param \string $coachingPack
     * @return OptionInfo
     */
    public function setCoachingPack($coachingPack)
    {
        $this->coachingPack = $coachingPack;

        return $this;
    }

    /**
     * Get coachingPack
     *
     * @return \string 
     */
    public function getCoachingPack()
    {
        return $this->coachingPack;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->packs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add packs
     *
     * @param \Coach\PackBundle\Entity\OptionPack $packs
     * @return OptionInfo
     */
    public function addPack(\Coach\PackBundle\Entity\OptionPack $packs)
    {
        $this->packs[] = $packs;

        return $this;
    }

    /**
     * Remove packs
     *
     * @param \Coach\PackBundle\Entity\OptionPack $packs
     */
    public function removePack(\Coach\PackBundle\Entity\OptionPack $packs)
    {
        $this->packs->removeElement($packs);
    }

    /**
     * Get packs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPacks()
    {
        return $this->packs;
    }
}
