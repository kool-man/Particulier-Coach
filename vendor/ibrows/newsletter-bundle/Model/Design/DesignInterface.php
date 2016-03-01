<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Design;

use Ibrows\Bundle\NewsletterBundle\Renderer\RenderableInterface;

interface DesignInterface extends RenderableInterface
{
    public function getId();
    public function getCreatedAt();
    public function getMandant();
    public function __toString();
}
