<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Subscriber;

interface SubscriberGroupsInterface extends SubscriberInterface
{
    /**
     * @return GroupInterface[]
     */
    public function getGroups();

    /**
     * @param  GroupInterface            $group
     * @return SubscriberGroupsInterface
     */
    public function addGroup(GroupInterface $group);

    /**
     * @param  GroupInterface            $group
     * @return SubscriberGroupsInterface
     */
    public function removeGroup(GroupInterface $group);
}
