<?php

namespace Ibrows\Bundle\NewsletterBundle\Service;

use Ibrows\Bundle\NewsletterBundle\Block\BlockComposition;

use Ibrows\Bundle\NewsletterBundle\Renderer\RendererInterface;

class RendererManager
{
    protected $renderers = array();
    protected $blockProvider;

    public function __construct(BlockProviderManager $blockProvider)
    {
        $this->blockProvider = $blockProvider;
    }

    /**
     * @param  string            $name
     * @param  RendererInterface $renderer
     * @return RendererManager
     */
    public function addRenderer($name, RendererInterface $renderer)
    {
        $this->renderers[$name] = $renderer;

        return $this;
    }

    /**
     * @param  string                    $name
     * @return RendererInterface
     * @throws \InvalidArgumentException
     */
    public function get($name)
    {
        if (!array_key_exists($name, $this->renderers)) {
            throw new \InvalidArgumentException("The renderer service '$name' can not be found.");
        }

        return $this->renderers[$name];
    }

    public function renderNewsletter($renderername, $bridge, $newsletter, $mandant, $subscriber, $context = null)
    {
        $renderer = $this->get($renderername);

        $blockVariables = array(
                'context' => $context,
                'mandant' => $mandant,
                'newsletter' => $newsletter,
                'subscriber' => $subscriber,
                'bridge' => $bridge,
        );

        $blockContent = $renderer->render(
                new BlockComposition($this->blockProvider, $newsletter->getBlocks()),
                $blockVariables
        );

        $overview = $renderer->render($newsletter->getDesign(), array_merge($blockVariables, array(
                'content' => $blockContent
        )));

        return $overview;
    }
}
