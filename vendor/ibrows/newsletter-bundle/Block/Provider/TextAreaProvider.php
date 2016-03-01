<?php

namespace Ibrows\Bundle\NewsletterBundle\Block\Provider;

use Ibrows\Bundle\NewsletterBundle\Model\Block\BlockInterface;

class TextAreaProvider extends AbstractProvider
{
    public function getBlockEditContent(BlockInterface $block)
    {
        return '<textarea name="block['. $block->getId() .']" class="tinymce" id="block_'. $block->getId() .'" data-block-id="'. $block->getId() .'">'. $block->getContent() .'</textarea>';
    }

    public function getBlockDisplayContent(BlockInterface $block)
    {
        return $block->getContent();
    }

    public function updateBlock(BlockInterface $block, $update)
    {
        if (!is_string($update)) {
            return;
        }

        $block->setContent($update);
    }
}
