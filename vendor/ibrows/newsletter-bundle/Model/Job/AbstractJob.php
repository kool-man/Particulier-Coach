<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Job;

abstract class AbstractJob implements JobInterface
{
    protected $newsletterId;

    protected $error;
    protected $status;

    protected $created;
    protected $scheduled;
    protected $completed;

    public function __construct()
    {
        $this->created = new \DateTime();
        $this->status = self::STATUS_ONHOLD;
    }

    public function getNewsletterId()
    {
        return $this->newsletterId;
    }

    public function setNewsletterId($id)
    {
        $this->newsletterId = $id;

        return $this;
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function getScheduled()
    {
        return $this->scheduled;
    }

    public function setScheduled(\DateTime $scheduled)
    {
        $this->scheduled = $scheduled;

        return $this;
    }

    public function getCompleted()
    {
        return $this->completed;
    }

    public function setCompleted(\DateTime $completed)
    {
        $this->completed = $completed;

        return $this;
    }

}
