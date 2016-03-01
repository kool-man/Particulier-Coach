<?php

namespace Coach\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Images
 *
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity
 */
class MesImages
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Coach\AnnonceBundle\Entity\Annonce", inversedBy="mesImages")
     */
    private $annonce;
    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;
    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;
    
    
    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
    }
    
    public function __toString()
    {
      return $this->getName();
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
     *
     * @param \DateTime $createdAt
     * @return Images
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
     * @return Images
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
     * Set name
     *
     * @param string $name
     * @return Images
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
     * Set path
     *
     * @param string $path
     * @return Images
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
    
     
    protected function getUploadDir($repertoire)
{
        return $repertoire;
}
  
public function getUploadRootDir($repertoire)
{
    return __DIR__.'/../../../../web/bundles/hamdiblog/images/'.$this->getUploadDir($repertoire);
}
  
public function getWebPath($repertoire)
{
    return null === $this->path ? null : $this->getUploadDir($repertoire).'/'.$this->path;
}
  
public function getAbsolutePath($repertoire)
{
    return null === $this->path ? null : $this->getUploadRootDir($repertoire).'/'.$this->path;
}
    
 
public function upload($repertoire)
{
  // the file property can be empty if the field is not required
    if (null === $this->file) {
        return;
    }
 
    // we use the original file name here but you should
    // sanitize it at least to avoid any security issues
 
    // move takes the target directory and then the target filename to move to
    $this->file->move($this->getUploadRootDir($repertoire), $this->file->getClientOriginalName());
 
    // set the path property to the filename where you'ved saved the file
    $this->path = $this->file->getClientOriginalName();
 
    // clean up the file property as you won't need it anymore
    $this->file = null;
}
  
public function redimensionner_image($fichier, $longueur,$largeur) {
 
    //VARIABLE D'ERREUR
    global $error;
 
    //TAILLE DE L'IMAGE ACTUELLE
    $taille = getimagesize($fichier);
     
    //SI LE FICHIER EXISTE
    if ($taille) {
     
        //SI JPG
        if ($taille['mime']=='image/jpeg' ) {
            //OUVERTURE DE L'IMAGE ORIGINALE
            $img_big = imagecreatefromjpeg($fichier);
            $img_new = imagecreate($longueur, $largeur);
             
            //CREATION DE LA MINIATURE
            $img_petite = imagecreatetruecolor($longueur, $largeur) or $img_petite = imagecreate($longueur, $largeur);
 
            //COPIE DE L'IMAGE REDIMENSIONNEE
            imagecopyresized($img_petite,$img_big,0,0,0,0,$longueur,$largeur,$taille[0],$taille[1]);
            imagejpeg($img_petite,$fichier);
 
        }
         
        //SI PNG
        else if ($taille['mime']=='image/png' ) {
            //OUVERTURE DE L'IMAGE ORIGINALE
            $img_big = imagecreatefrompng($fichier); // On ouvre l'image d'origine
            $img_new = imagecreate($longueur, $largeur);
             
            //CREATION DE LA MINIATURE
            $img_petite = imagecreatetruecolor($longueur, $largeur) OR $img_petite = imagecreate($longueur, $largeur);
 
            //COPIE DE L'IMAGE REDIMENSIONNEE
            imagecopyresized($img_petite,$img_big,0,0,0,0,$longueur,$largeur,$taille[0],$taille[1]);
            imagepng($img_petite,$fichier);
  
        }
        // GIF
        else if ($taille['mime']=='image/gif' ) {
            //OUVERTURE DE L'IMAGE ORIGINALE
            $img_big = imagecreatefromgif($fichier);
            $img_new = imagecreate($longueur, $largeur);
             
            //CREATION DE LA MINIATURE
            $img_petite = imagecreatetruecolor($longueur, $largeur) or $img_petite = imagecreate($longueur, $largeur);
 
            //COPIE DE L'IMAGE REDIMENSIONNEE
            imagecopyresized($img_petite,$img_big,0,0,0,0,$longueur,$largeur,$taille[0],$taille[1]);
            imagegif($img_petite,$fichier);
 
        }
         
    }
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
     * Add annonce
     *
     * @param \Coach\AnnonceBundle\Entity\Annonce $annonce
     * @return Images
     */
    public function addAnnonce(\Coach\AnnonceBundle\Entity\Annonce $annonce)
    {
        $this->annonce[] = $annonce;

        return $this;
    }

    /**
     * Remove annonce
     *
     * @param \Coach\AnnonceBundle\Entity\Annonce $annonce
     */
    public function removeAnnonce(\Coach\AnnonceBundle\Entity\Annonce $annonce)
    {
        $this->annonce->removeElement($annonce);
    }

    /**
     * Get annonce
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * Set annonce
     *
     * @param \Coach\AnnonceBundle\Entity\Annonce $annonce
     * @return MesImages
     */
    public function setAnnonce(\Coach\AnnonceBundle\Entity\Annonce $annonce = null)
    {
        $this->annonce = $annonce;

        return $this;
    }
}
