<?php

namespace Ibrows\Bundle\NewsletterBundle\Entity;

use Ibrows\Bundle\NewsletterBundle\Model\Subscriber\Group as BaseGroup;

use Doctrine\ORM\Mapping as ORM;

class Group extends BaseGroup
{
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $name;
}
