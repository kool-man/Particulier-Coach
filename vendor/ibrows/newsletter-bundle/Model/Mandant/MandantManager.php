<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Mandant;

abstract class MandantManager implements MandantManagerInterface
{
    protected function canonicalizeName($name = null)
    {
        if ($name === null) {
            return self::DEFAULT_NAME;
        }

        return $name;
    }
}
