<?php
namespace Ibrows\Bundle\NewsletterBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/design")
 */
class DesignController extends AbstractController
{
    /**
     * @Route("/", name="ibrows_newsletter_design_index")
     */
    public function indexAction()
    {
        return $this->render($this->getTemplateManager()->getDesign('index'));
    }

    /**
     * @Route("/list", name="ibrows_newsletter_design_list")
     */
    public function listAction()
    {
        return $this->render($this->getTemplateManager()->getDesign('list'), array(
            'designs' => $this->getMandant()->getDesigns(),
        ));
    }

    /**
     * @Route("/create", name="ibrows_newsletter_design_create")
     */
    public function createAction()
    {
        $design = $this->getDesignManager()->create();

        $formtype = $this->getClassManager()->getForm('design');
        $form = $this->createForm(new $formtype(), $design);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $this->getMandantManager()->persistDesign($this->getMandantName(), $design);

                return $this->redirect($this->generateUrl('ibrows_newsletter_design_edit', array('id' => $design->getId())));
            }
        }

        return $this->render($this->getTemplateManager()->getDesign('create'), array(
            'design' => $design,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/edit/{id}", name="ibrows_newsletter_design_edit")
     */
    public function editAction($id)
    {
        $design = $this->getDesignManager()->get($id);

        $formtype = $this->getClassManager()->getForm('design');
        $form = $this->createForm(new $formtype(), $design);
        $renderer = $this->getRendererManager()->get($this->getMandant()->getRendererName());

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $this->getMandantManager()->persistDesign($this->getMandantName(), $design);
            }
        }

        return $this->render($this->getTemplateManager()->getDesign('edit'), array(
            'design' => $design,
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/show/{id}", name="ibrows_newsletter_design_show")
     */
    public function showAction($id)
    {
        return $this->render($this->getTemplateManager()->getDesign('show'));
    }
}
