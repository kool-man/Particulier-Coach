<?php

namespace Ibrows\Bundle\NewsletterBundle\DBAL\Types;

use Doctrine\DBAL\Types\BlobType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class NoStreamBlobType extends BlobType
{
    /**
     * @param  mixed            $value
     * @param  AbstractPlatform $platform
     * @return mixed
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nostreamblob';
    }
}
