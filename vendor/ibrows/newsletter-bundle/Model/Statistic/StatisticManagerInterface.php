<?php

namespace Ibrows\Bundle\NewsletterBundle\Model\Statistic;

use Ibrows\Bundle\NewsletterBundle\Model\Subscriber\SubscriberInterface;
use Ibrows\Bundle\NewsletterBundle\Model\Newsletter\NewsletterInterface;

interface StatisticManagerInterface
{
    public function getUnsubscribeLogs(array $criteria = null, array $orderBy = array(), $limit = null, $offset = null);
    public function getReadLogs(array $criteria = null, array $orderBy = array(), $limit = null, $offset = null);
    public function getSendLogs(array $criteria = null, array $orderBy = array(), $limit = null, $offset = null);

    public function addNewsletterReadLog(NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message);
    public function addNewsletterSendLog(NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message);
    public function addNewsletterUnsubscribeLog(NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message);
}
