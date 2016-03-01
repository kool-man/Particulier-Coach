<?php

namespace Ibrows\Bundle\NewsletterBundle\Encryption;

interface EncryptionInterface
{

    /**
     * @param sring  $data
     * @param string $key
     */
    public function encrypt($data, $key);

    /**
     * @param sring  $data
     * @param string $key
     */
    public function decrypt($data, $key);

}
