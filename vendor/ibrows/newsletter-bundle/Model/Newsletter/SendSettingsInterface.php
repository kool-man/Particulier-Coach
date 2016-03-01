<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Newsletter;

interface SendSettingsInterface
{
    public function getUsername();
    public function setUsername($username);

    public function getPassword();
    public function setPassword($password);

    public function getHost();
    public function setHost($host);

    public function getPort();
    public function setPort($port);

    public function getInterval();
    public function setInterval($interval);

    public function getStarttime();
    public function setStarttime($starttime);

    public function getEncryption();
    public function setEncryption($encryption);

    public function getAuthMode();
    public function setAuthMode($authMode);
}
