<?php

namespace Ibrows\Bundle\NewsletterBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/unsubscribe")
 */
class UnsubscribeController extends AbstractHashMandantController
{
    /**
     * @Route("/do/{mandantHash}/{newsletterHash}/{subscriberHash}", name="ibrows_newsletter_unsubscribe")
     */
    public function unsubscribeAction($mandantHash, $newsletterHash, $subscriberHash)
    {
        $this->setMandantNameByHash($mandantHash);

        $newsletter = $this->getNewsletterByHash($newsletterHash);
        $subscriber = $this->getSubscriberByHash($newsletter, $subscriberHash);

        $request = $this->getRequest();
        if (!$request->query->get('context')) {
            $this->addNewsletterReadLog($newsletter, $subscriber, "Newsletter read: logged by ".__METHOD__);
        }

        $groupClass = $this->getClassManager()->getModel('group');

        $formtype = $this->getClassManager()->getForm('unsubscribe');
        $form = $this->createForm(new $formtype($this->getMandantName(), $groupClass), $subscriber);

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $this->setNewsletter($newsletter);
            }
        }

        return $this->render($this->getTemplateManager()->getNewsletter('unsubscribe'), array(
            'form' => $form->createView(),
            'subscriber' => $subscriber,
            'newsletter' => $newsletter
        ));
    }
}
