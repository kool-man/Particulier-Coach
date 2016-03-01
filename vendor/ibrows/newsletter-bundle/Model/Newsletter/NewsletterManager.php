<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Newsletter;

abstract class NewsletterManager implements NewsletterManagerInterface
{
    protected $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function create()
    {
        return new $this->class();
    }
}
