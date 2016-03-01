<?php

namespace Ibrows\Bundle\NewsletterBundle\Renderer;

class NullRenderer implements RendererInterface
{
    public function render(RenderableInterface $element, array $parameters = array())
    {
        return $block->getContent();
    }
}
