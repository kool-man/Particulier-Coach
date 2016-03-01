<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Subscriber;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Constraints as Assert;

abstract class Group implements GroupInterface
{
    protected $id;
    protected $subscribers;

    /**
     * @var string $name
     * @Assert\NotBlank(groups={"group"})
     */
    protected $name;

    public function __construct()
    {
        $this->subscribers = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSubscribers()
    {
        return $this->subscribers;
    }

    public function addSubscriber(SubscriberInterface $subscriber)
    {
        $this->subscribers->add($subscriber);

        return $this;
    }

    public function removeSubscriber(SubscriberInterface $subscriber)
    {
        $this->subscribers->removeElement($subscriber);

        return $this;
    }
}
