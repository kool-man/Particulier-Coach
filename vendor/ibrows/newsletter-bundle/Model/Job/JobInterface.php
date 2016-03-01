<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Job;

interface JobInterface
{
    const STATUS_ONHOLD = 'onhold';
    const STATUS_READY = 'ready';
    const STATUS_WORKING = 'working';
    const STATUS_COMPLETED = 'completed';
    const STATUS_ERROR = 'error';

    public function getNewsletterId();
    public function setNewsletterId($id);

    public function getStatus();
    public function setStatus($status);
    public function getError();
    public function setError($error);

    public function getCreated();
    public function getScheduled();
    public function setScheduled(\DateTime $scheduled);
    public function getCompleted();
    public function setCompleted(\DateTime $completed);
}
