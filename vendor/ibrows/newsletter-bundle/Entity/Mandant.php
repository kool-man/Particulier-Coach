<?php

namespace Ibrows\Bundle\NewsletterBundle\Entity;

use Ibrows\Bundle\NewsletterBundle\Model\Mandant\Mandant as AbstractMandant;

use Doctrine\ORM\Mapping as ORM;

class Mandant extends AbstractMandant
{
    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $hash;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $salt;

    /**
     * @var string
     *
     * @ORM\Column(type="string", name="renderer_name")
     */
    protected $rendererName;

    /**
     * @var unknown_type
     *
     * @ORM\OneToOne(targetEntity="SendSettings")
     * @ORM\JoinColumn(name="send_settings_id", referencedColumnName="id")
     */
    protected $sendSettings;
}
