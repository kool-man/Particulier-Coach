<?php

namespace Ibrows\Bundle\NewsletterBundle\Block;

use Ibrows\Bundle\NewsletterBundle\Renderer\RenderableInterface;
use Ibrows\Bundle\NewsletterBundle\Service\BlockProviderManager;

use Doctrine\Common\Collections\Collection;

class BlockComposition implements RenderableInterface
{
    /**
     * @var type
     */
    protected $blockProvider;

    /**
     * @var Collection
     */
    protected $blocks;

    public function __construct(BlockProviderManager $blockProvider, Collection $blocks)
    {
        $this->blockProvider = $blockProvider;
        $this->blocks = $blocks;
    }

    public function getContent()
    {
        $content = '';

        foreach ($this->blocks as $block) {
            $content .= $this->blockProvider->get($block->getProviderName())
                ->getBlockDisplayContent($block);
        }

        return $content;
    }
}
