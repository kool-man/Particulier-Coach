<?php

namespace Ibrows\Bundle\NewsletterBundle\Block\Provider;

use Ibrows\Bundle\NewsletterBundle\Service\BlockProviderManager;
use Ibrows\Bundle\NewsletterBundle\Model\Block\BlockInterface;

abstract class AbstractProvider implements ProviderInterface
{
    protected $blockProviderManager;

    public function initialize(BlockInterface $block, $blockClassName)
    {
        return $this;
    }

    public function updateBlock(BlockInterface $block, $update)
    {
        return $this;
    }

    public function updateClonedBlock(BlockInterface $block)
    {
        return $this;
    }

    public function getOptionKeys()
    {
        return array();
    }

    public function setBlockProviderManager(BlockProviderManager $blockProviderManager)
    {
        $this->blockProviderManager = $blockProviderManager;
    }

    public function getBlockDisplayContent(BlockInterface $block)
    {
        $content = $this->getStartBlockDisplayContent($block);

        foreach ($block->getBlocks() as $childBlock) {
            $content .= $this->getPreBlockDisplayContent($childBlock);

            $childProvider = $this->blockProviderManager->get($childBlock->getProviderName());
            $content .= $childProvider->getBlockDisplayContent($childBlock);

            $content .= $this->getPostBlockDisplayContent($childBlock);
        }

        $content .= $block->getContent();

        return $content.$this->getEndBlockDisplayContent($block);
    }

    public function getBlockEditContent(BlockInterface $block)
    {
        $content = $this->getStartBlockEditContent($block);

        foreach ($block->getBlocks() as $childBlock) {
            $content .= $this->getPreBlockEditContent($childBlock);

            $childProvider = $this->blockProviderManager->get($childBlock->getProviderName());
            $content .= $childProvider->getBlockEditContent($childBlock);

            $content .= $this->getPostBlockEditContent($childBlock);
        }

        $content .= $block->getContent();

        return $content.$this->getEndBlockEditContent($block);
    }

    protected function getStartBlockDisplayContent(BlockInterface $block)
    {
        return '';
    }

    protected function getEndBlockDisplayContent(BlockInterface $block)
    {
        return '';
    }

    protected function getPreBlockDisplayContent(BlockInterface $block)
    {
        return '';
    }

    protected function getPostBlockDisplayContent(BlockInterface $block)
    {
        return '';
    }

    protected function getStartBlockEditContent(BlockInterface $block)
    {
        return '';
    }

    protected function getEndBlockEditContent(BlockInterface $block)
    {
        return '';
    }

    protected function getPreBlockEditContent(BlockInterface $block)
    {
        return '';
    }

    protected function getPostBlockEditContent(BlockInterface $block)
    {
        return '';
    }
}
