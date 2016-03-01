<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Subscriber;

interface SubscriberLocaleInterface extends SubscriberInterface
{
    /**
     * @return string
     */
    public function getLocale();
}
