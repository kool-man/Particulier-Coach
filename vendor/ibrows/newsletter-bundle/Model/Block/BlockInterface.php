<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Block;

use Ibrows\Bundle\NewsletterBundle\Model\Newsletter\NewsletterInterface;
use Ibrows\Bundle\NewsletterBundle\Renderer\RenderableInterface;

interface BlockInterface extends RenderableInterface
{
    public function getId();

    public function getPosition();
    public function setPosition($position);

    public function getProviderName();
    public function setProviderName($providerName);

    public function getProviderOptions();
    public function getProviderOption($key, $default = null);

    public function setProviderOptions(array $options);
    public function setProviderOption($key, $value);

    /**
     * @param  BlockInterface $block
     * @return BlockInterface
     */
    public function setParentBlock(BlockInterface $block = null);

    /**
     * @return BlockInterface
     */
    public function getParentBlock();

    /**
     * @return boolean
     */
    public function isCompound();

    /**
     * @param  BlockInterface $block
     * @return BlockInterface
     */
    public function addBlock(BlockInterface $block);

    /**
     * @param  BlockInterface $block
     * @return BlockInterface
     */
    public function removeBlock(BlockInterface $block);

    /**
     * @return BlockInterface[]
     */
    public function getBlocks();

    /**
     * @param  BlockInterface[] $blocks
     * @return BlockInterface
     */
    public function setBlocks(array $blocks);

    public function addBlocks(array $blocks);

    public function setContent($content);
    public function getContent();

    public function getNewsletter();
    public function setNewsletter(NewsletterInterface $newsletter = null);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param  string         $name
     * @return BlockInterface
     */
    public function setName($name);
}
