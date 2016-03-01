<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Design;

abstract class Design implements DesignInterface
{
    protected $id;
    protected $name;
    protected $content;
    protected $createdAt;
    protected $mandant;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    public function getMandant()
    {
        return $this->mandant;
    }

    public function setMandant($mandant)
    {
        $this->mandant = $mandant;

        return $this;
    }
}
