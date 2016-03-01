<?php

namespace Ibrows\Bundle\NewsletterBundle\Controller;

abstract class AbstractHashMandantController extends AbstractController
{
    protected $mandantName = null;

    protected function getMandantName()
    {
        if (!$this->mandantName) {
            return parent::getMandantName();
        }

        return $this->mandantName;
    }

    protected function setMandantNameByHash($hash)
    {
        $this->mandantName = $this->getMandantNameByHash($hash);
    }
}
