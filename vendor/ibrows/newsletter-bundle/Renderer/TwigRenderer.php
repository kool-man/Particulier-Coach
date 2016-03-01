<?php

namespace Ibrows\Bundle\NewsletterBundle\Renderer;

class TwigRenderer implements RendererInterface
{
    protected $engine;

    public function __construct(array $twigOptions = array())
    {
        $engine = new \Twig_Environment(
            new \Twig_Loader_String(),
            $twigOptions
        );

        $this->engine = $engine;
    }

    public function render(RenderableInterface $element, array $parameters = array())
    {
        try {
            $rendered = $this->engine->render($element->getContent(), $parameters);
        } catch (\Exception $e) {
            $rendered = $e->getMessage();
        }

        return $rendered;
    }

}
