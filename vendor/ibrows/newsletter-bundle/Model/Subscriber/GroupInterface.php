<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Subscriber;

interface GroupInterface
{
    public function getId();
    public function getName();
    public function __toString();

    public function getSubscribers();
    public function addSubscriber(SubscriberInterface $subscriber);
    public function removeSubscriber(SubscriberInterface $subscriber);
}
