<?php

namespace Ibrows\Bundle\NewsletterBundle\Renderer;

interface RendererInterface
{
    public function render(RenderableInterface $element, array $parameters = array());
}
