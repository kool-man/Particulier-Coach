<?php

namespace Ibrows\Bundle\NewsletterBundle\Renderer\GenderTitleStrategy;

use Ibrows\Bundle\NewsletterBundle\Model\Subscriber\SubscriberGenderTitleInterface;

interface GenderTitleStrategyInterface
{
    /**
     * @param  SubscriberGenderTitleInterface $subscriber
     * @return string
     */
    public function getGenderTitle(SubscriberGenderTitleInterface $subscriber);
}
