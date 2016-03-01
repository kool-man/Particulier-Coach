<?php

namespace Ibrows\Bundle\NewsletterBundle\Service;

use Ibrows\Bundle\NewsletterBundle\Encryption\EncryptionInterface;
use Ibrows\Bundle\NewsletterBundle\Model\Job\MailJob;

class MailerService
{
    /**
     * @var EncryptionInterface
     */
    protected $encryption;

    /**
     * @param EncryptionInterface $encryption
     */
    public function __construct(EncryptionInterface $encryption)
    {
        $this->encryption = $encryption;
    }

    /**
     * @param  MailJob $job
     * @return array   $failedRecipients
     */
    public function send(MailJob $job)
    {
        $to = $job->getToName() ? array($job->getToMail() => $job->getToName()) : $job->getToMail();

        $message = \Swift_Message::newInstance($job->getSubject(), $job->getBody(), 'text/html', 'utf8')
            ->setFrom(array($job->getSenderMail() => $job->getSenderName()))
            ->setReturnPath($job->getReturnMail())
            ->setTo($to)
        ;

        $transport = \Swift_SmtpTransport::newInstance($job->getHost(), $job->getPort())
            ->setUsername($job->getUsername())
            ->setPassword($this->encryption->decrypt($job->getPassword(), $job->getSalt()))
            ->setEncryption($job->getEncryption())
        ;

        //$transport->setAuthMode($job->getAuthMode());

        $mailer = \Swift_Mailer::newInstance($transport);

        $failedRecipients = array();
        $mailer->send($message, $failedRecipients);

        return $failedRecipients;
    }

}
