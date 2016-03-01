<?php

namespace Ibrows\Bundle\NewsletterBundle\Block\Provider;

use Ibrows\Bundle\NewsletterBundle\Model\Block\BlockInterface;

class TextAreaAndImageProvider extends AbstractProvider
{
    public function getOptionKeys()
    {
        return array(
            'textWidth' => array(
                'required' => true
            ),
            'imageWidth' => array(
                'required' => true
            )
        );
    }

    public function initialize(BlockInterface $block, $blockClassName)
    {
        $textAreaBlock = new $blockClassName();
        $textAreaBlock->setName($block->getProviderOption('textarea.name'));
        $textAreaBlock->setProviderName('ibrows_newsletter.block.provider.textarea');
        $textAreaBlock->setPosition(1);

        $imageBlock = new $blockClassName();
        $imageBlock->setName($block->getProviderOption('image.name'));
        $imageBlock->setProviderName('ibrows_newsletter.block.provider.image');
        $imageBlock->setPosition(2);

        $block->addBlocks(array($textAreaBlock, $imageBlock));
    }

    protected function getStartBlockDisplayContent(BlockInterface $block)
    {
        return '<table class="provider"><tr class="provider">';
    }

    protected function getEndBlockDisplayContent(BlockInterface $block)
    {
        return '</tr></table>';
    }

    protected function getPreBlockDisplayContent(BlockInterface $block)
    {
        $widthKey = $block->getProviderName() == 'ibrows_newsletter.block.provider.textarea' ?
            'textWidth' : 'imageWidth';

        $width = $block->getParentBlock()->getProviderOption($widthKey, '50%');

        return '<td class="provider" width="'. $width .'" style="width:'. $width .'">';
    }

    protected function getPostBlockDisplayContent(BlockInterface $block)
    {
        return '</td>';
    }

    protected function getStartBlockEditContent(BlockInterface $block)
    {
        return '<table class="provider"><tr class="provider">';
    }

    protected function getEndBlockEditContent(BlockInterface $block)
    {
        return '</tr></table>';
    }

    protected function getPreBlockEditContent(BlockInterface $block)
    {
        $widthKey = $block->getProviderName() == 'ibrows_newsletter.block.provider.textarea' ?
            'textWidth' : 'imageWidth';

        $width = $block->getParentBlock()->getProviderOption($widthKey, '50%');

        return '<td class="provider" width="'. $width .'" style="width:'. $width .'">';
    }

    protected function getPostBlockEditContent(BlockInterface $block)
    {
        return '</td>';
    }
}
