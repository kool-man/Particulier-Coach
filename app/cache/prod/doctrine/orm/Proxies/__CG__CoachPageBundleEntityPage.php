<?php

namespace Proxies\__CG__\Coach\PageBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Page extends \Coach\PageBundle\Entity\Page implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'id', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'nom', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'titre', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'keywords', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'description', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'titre_page', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'ordre', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'menu', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'createdAt', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'updatedAt', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'videos', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'blocktext', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'blocklienmiddle', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'blocksocial', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'titrespage', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'coaching');
        }

        return array('__isInitialized__', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'id', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'nom', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'titre', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'keywords', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'description', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'titre_page', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'ordre', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'menu', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'createdAt', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'updatedAt', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'videos', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'blocktext', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'blocklienmiddle', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'blocksocial', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'titrespage', '' . "\0" . 'Coach\\PageBundle\\Entity\\Page' . "\0" . 'coaching');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Page $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', array($titre));

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', array());

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeywords($keywords)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeywords', array($keywords));

        return parent::setKeywords($keywords);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeywords', array());

        return parent::getKeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenu($menu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenu', array($menu));

        return parent::setMenu($menu);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenu', array());

        return parent::getMenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', array());

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', array());

        return parent::preUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addVideo(\Coach\PageBundle\Entity\BlockVideo $videos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVideo', array($videos));

        return parent::addVideo($videos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVideo(\Coach\PageBundle\Entity\BlockVideo $videos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVideo', array($videos));

        return parent::removeVideo($videos);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideos', array());

        return parent::getVideos();
    }

    /**
     * {@inheritDoc}
     */
    public function addBlocktext(\Coach\PageBundle\Entity\BlockText $blocktext)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBlocktext', array($blocktext));

        return parent::addBlocktext($blocktext);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBlocktext(\Coach\PageBundle\Entity\BlockText $blocktext)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBlocktext', array($blocktext));

        return parent::removeBlocktext($blocktext);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlocktext()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlocktext', array());

        return parent::getBlocktext();
    }

    /**
     * {@inheritDoc}
     */
    public function addBlocklienmiddle(\Coach\PageBundle\Entity\BlockLienMiddle $blocklienmiddle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBlocklienmiddle', array($blocklienmiddle));

        return parent::addBlocklienmiddle($blocklienmiddle);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBlocklienmiddle(\Coach\PageBundle\Entity\BlockLienMiddle $blocklienmiddle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBlocklienmiddle', array($blocklienmiddle));

        return parent::removeBlocklienmiddle($blocklienmiddle);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlocklienmiddle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlocklienmiddle', array());

        return parent::getBlocklienmiddle();
    }

    /**
     * {@inheritDoc}
     */
    public function addBlocksocial(\Coach\PageBundle\Entity\BlockSocial $blocksocial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBlocksocial', array($blocksocial));

        return parent::addBlocksocial($blocksocial);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBlocksocial(\Coach\PageBundle\Entity\BlockSocial $blocksocial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBlocksocial', array($blocksocial));

        return parent::removeBlocksocial($blocksocial);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlocksocial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlocksocial', array());

        return parent::getBlocksocial();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitrePage($titrePage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitrePage', array($titrePage));

        return parent::setTitrePage($titrePage);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitrePage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitrePage', array());

        return parent::getTitrePage();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdre($ordre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdre', array($ordre));

        return parent::setOrdre($ordre);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdre', array());

        return parent::getOrdre();
    }

    /**
     * {@inheritDoc}
     */
    public function addTitrespage(\Coach\PageBundle\Entity\TitrePage $titrespage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTitrespage', array($titrespage));

        return parent::addTitrespage($titrespage);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTitrespage(\Coach\PageBundle\Entity\TitrePage $titrespage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTitrespage', array($titrespage));

        return parent::removeTitrespage($titrespage);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitrespage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitrespage', array());

        return parent::getTitrespage();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function addCoaching(\Coach\CoachingBundle\Entity\Coaching $coaching)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCoaching', array($coaching));

        return parent::addCoaching($coaching);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCoaching(\Coach\CoachingBundle\Entity\Coaching $coaching)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCoaching', array($coaching));

        return parent::removeCoaching($coaching);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoaching()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoaching', array());

        return parent::getCoaching();
    }

}