<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Mandant;

use Ibrows\Bundle\NewsletterBundle\Model\Newsletter\NewsletterInterface;
use Ibrows\Bundle\NewsletterBundle\Model\Subscriber\SubscriberInterface;
use Ibrows\Bundle\NewsletterBundle\Model\Newsletter\SendSettingsInterface;
use Ibrows\Bundle\NewsletterBundle\Model\Design\DesignInterface;
use Ibrows\Bundle\NewsletterBundle\Model\Block\BlockInterface;
use Ibrows\Bundle\NewsletterBundle\Model\Subscriber\GroupInterface;

interface MandantInterface
{
    /**
     * @return NewsletterInterface[]
     */
    public function getNewsletters();

    /**
     * @return BlockInterface[]
     */
    public function getBlocks();

    /**
     * @return DesignInterface[]
     */
    public function getDesigns();

    /**
     * @return string
     */
    public function getRendererName();

    /**
     * @param  string           $rendererName
     * @return MandantInterface
     */
    public function setRendererName($rendererName);

    /**
     * @return SendSettingsInterface
     */
    public function getSendSettings();

    /**
     * @param  SendSettingsInterface $settings
     * @return MandantInterface
     */
    public function setSendSettings(SendSettingsInterface $settings);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param  string           $name
     * @return MandantInterface
     */
    public function setName($name);

    /**
     * @return SubscriberInterface[]
     */
    public function getSubscribers();

    /**
     * @return GroupInterface[]
     */
    public function getSubscriberGroups();

    /**
     * @return string
     */
    public function getHash();

    /**
     * @param  string           $hash
     * @return MandantInterface
     */
    public function setHash($hash);

    /**
     * @return string
     */
    public function getSalt();
}
