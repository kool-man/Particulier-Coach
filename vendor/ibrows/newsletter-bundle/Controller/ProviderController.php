<?php

namespace Ibrows\Bundle\NewsletterBundle\Controller;

use Ibrows\Bundle\NewsletterBundle\Entity\Block;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;

use Ibrows\Bundle\NewsletterBundle\Model\Block\BlockInterface;

/**
 * @Route("/provider")
 */
class ProviderController extends AbstractController
{
    /**
     * @Route("/view/add", name="ibrows_newsletter_provider_view_add")
     */
    public function editViewAction()
    {
        $request = $this->getRequest();

        if (!$request->isXmlHttpRequest()) {
            throw $this->createNotFoundException();
        }

        $data = $request->request->all();

        if (!isset($data['provider'])) {
            throw $this->createNotFoundException("No provider set");
        }

        if (!isset($data['name'])) {
            throw $this->createNotFoundException("No name set");
        }

        if (!isset($data['position'])) {
            throw $this->createNotFoundException("No position set");
        }

        if (!isset($data['option']) OR !is_array($data['option'])) {
            $data['option'] = array();
        }

        $provider = $this->getBlockProviderManager()->get($data['provider']);
        $newsletter = $this->getNewsletter();

        $blockClassName = $this->getClassManager()->getModel('block');

        /** @var BlockInterface $block */
        $block = new $blockClassName();
        $block->setName($data['name']);
        $block->setProviderOptions($data['option']);
        $block->setProviderName($data['provider']);
        $block->setPosition($data['position']);

        $provider->initialize($block, $blockClassName);
        $newsletter->addBlock($block);

        $this->getMandantManager()->persistNewsletter($this->getMandant()->getName(), $newsletter);

        $html = '<li data-element="block" data-element-id="'. $block->getId() .'" class="block">' .
            $provider->getBlockEditContent($block) .
        '</li>';

        $json = array(
            'html' => $html,
        );

        $response = new Response(json_encode($json));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/blockposition/update", name="ibrows_newsletter_provider_block_position_update")
     */
    public function blockPositionUpdateAction()
    {
        $request = $this->getRequest();

        if (!$request->isXmlHttpRequest()) {
            throw $this->createNotFoundException();
        }

        $data = $request->request->all();

        if (!isset($data['positions']) || !is_array($data['positions'])) {
            throw $this->createNotFoundException("invalid positions");
        }

        $newsletter = $this->getNewsletter();

        $positions = $data['positions'];
        foreach ($newsletter->getBlocks() as $block) {
            if (isset($positions[$block->getId()])) {
                $block->setPosition($positions[$block->getId()]);
            }
        }

        $this->getMandantManager()->persistNewsletter($this->getMandant()->getName(), $newsletter);

        $response = new Response(json_encode(array('success' => true)));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/block/remove", name="ibrows_newsletter_provider_block_remove")
     */
    public function blockRemoveAction()
    {
        $request = $this->getRequest();

        if (!$request->isXmlHttpRequest()) {
            throw $this->createNotFoundException();
        }

        $blockId = $request->request->get('id');
        if (!$blockId) {
            throw $this->createNotFoundException("invalid id");
        }

        $newsletter = $this->getNewsletter();

        foreach ($newsletter->getBlocks() as $block) {
            if ($block->getId() == $blockId) {
                $newsletter->removeBlock($block);
            }
        }

        $this->getMandantManager()->persistNewsletter($this->getMandant()->getName(), $newsletter);

        $response = new Response(json_encode(array('success' => true)));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
