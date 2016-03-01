<?php

namespace Ibrows\Bundle\NewsletterBundle\Service;

use Ibrows\Bundle\NewsletterBundle\Block\Provider\ProviderInterface;

class BlockProviderManager
{
    protected $blockProviders = array();

    /**
     * @param  string               $name
     * @param  ProviderInterface    $provider
     * @return BlockProviderManager
     */
    public function addBlockProvider($name, ProviderInterface $provider)
    {
        $this->blockProviders[$name] = $provider;

        return $this;
    }

    /**
     * @return array
     */
    public function getBlockProviders()
    {
        return $this->blockProviders;
    }

    /**
     * @param  string                    $name
     * @return ProviderInterface
     * @throws \InvalidArgumentException
     */
    public function get($name)
    {
        if (!array_key_exists($name, $this->blockProviders)) {
            throw new \InvalidArgumentException("The block-provider service '$name' can not be found.");
        }

        return $this->blockProviders[$name];
    }
}
