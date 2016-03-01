<?php

namespace Ibrows\Bundle\NewsletterBundle\Entity;

use Ibrows\Bundle\NewsletterBundle\Model\Block\Block as BaseBlock;

use Doctrine\ORM\Mapping as ORM;

class Block extends BaseBlock
{
    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    protected $content;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    protected $position;

    /**
     * @var string
     *
     * @ORM\Column(type="text", name="provider_name")
     */
    protected $providerName;

    /**
     * @var array
     *
     * @ORM\Column(type="array", name="provider_options")
     */
    protected $providerOptions = array();
}
