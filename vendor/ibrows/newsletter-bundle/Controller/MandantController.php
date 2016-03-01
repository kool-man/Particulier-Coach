<?php

namespace Ibrows\Bundle\NewsletterBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/mandant")
 */
class MandantController extends AbstractController
{
    /**
     * @Route("/edit", name="ibrows_newsletter_mandant_edit")
     */
    public function editAction()
    {
            $mandant = $this->getMandant();
            $mandantType = $this->getClassManager()->getForm('mandant');
            $mandantForm = $this->createForm(new $mandantType(), $mandant);

            $sendSettings = $mandant->getSendSettings();
            if ($sendSettings === null) {
                $sendSettingsClass = $this->getClassManager()->getModel('sendsettings');
                $sendSettings = new $sendSettingsClass();
            }
            $sendSettingsType = $this->getClassManager()->getForm('sendsettings');
            $sendSettingsForm = $this->createForm(new $sendSettingsType(true, false), $sendSettings);

            $request = $this->getRequest();
            if ($request->getMethod() == 'POST') {
                $mandantForm->bind($request);
                $sendSettingsForm->bind($request);

                if ($mandantForm->isValid() && $sendSettingsForm->isValid()) {
                    $om = $this->getObjectManager();
                    $sendSettings->setPassword($this->encryptPassword($sendSettings->getPassword()));

                    $mandant->setSendSettings($sendSettings);
                    $om->persist($sendSettings);
                    $om->persist($mandant);
                    $om->flush();
                }
            }

            return $this->render($this->getTemplateManager()->getMandant('edit'), array(
                    'mandant' => $mandant,
                    'mandantForm' => $mandantForm->createView(),
                    'settingsForm' => $sendSettingsForm->createView(),
            ));
    }

}
