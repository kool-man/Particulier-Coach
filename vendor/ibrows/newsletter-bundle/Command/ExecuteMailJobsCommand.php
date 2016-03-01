<?php

namespace Ibrows\Bundle\NewsletterBundle\Command;

use Ibrows\Bundle\NewsletterBundle\Model\Mandant\MandantManager;
use Ibrows\Bundle\NewsletterBundle\Model\Job\MailJob;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Serializer\Exception\UnsupportedException;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;

use Doctrine\ORM\EntityManager;

class ExecuteMailJobsCommand extends ContainerAwareCommand
{
    const OPTION_LIMIT = 'limit';

    protected $jobClass;
    /**
     * @var MandantManager
     */
    protected $mm;
    protected $now;
    protected $successCount;
    protected $errorCount;

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('ibrows:newsletter:job:mail:send')
            ->setDescription('Executes (sends) a certain amount of ready mailjobs.')
            ->addOption(
                'mandant',
                null,
                InputOption::VALUE_OPTIONAL,
                'The mandant to use'
            )
            ->addOption(
                self::OPTION_LIMIT,
                null,
                InputOption::VALUE_OPTIONAL,
                'The maximal amount of mailjobs to execute',
                25
            )
        ;
    }

    /**
     * @param  InputInterface  $input
     * @param  OutputInterface $output
     * @throws \LogicException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->jobClass = $this->getContainer()->getParameter('ibrows_newsletter.classes.model.mailjob');
        $this->mm = $this->getContainer()->get('ibrows_newsletter.mandant_manager');
        $this->now = new \DateTime();
        $this->successCount = 0;
        $this->errorCount = 0;

        $mandantName = $input->getOption('mandant');
        if ($mandantName === null) {
            $mandantNames = $this->mm->getMandants();
            foreach ($mandantNames as $name => $description) {
                $this->sendMailJobs($input, $output, $name);
            }
        } else {
            $this->sendMailJobs($input, $output, $mandantName);
        }

        if ($output->getVerbosity() > 1) {
            $output->writeln(sprintf('Mails successfully sent: <info>%s</info>', $this->successCount));
            $output->writeln(sprintf('Mails unsuccessfully sent: <error>%s</error>', $this->errorCount));
        }
    }

    protected function sendMailJobs(InputInterface $input, OutputInterface $output, $mandantName)
    {
        $limit = $input->getOption(self::OPTION_LIMIT);

        $manager = $this->mm->getObjectManager($mandantName);
        if ($manager instanceof EntityManager) {
                $jobs = $this->getReadyJobsORM($limit, $input, $output, $manager);
        } else {
            throw new UnsupportedException('currently only Doctrine2 ORM is supported');
        }

        $this->sendMails($jobs, $input, $output, $mandantName);
    }

    protected function getReadyJobsORM($limit, InputInterface $input, OutputInterface $output, EntityManager $manager)
    {
        $manager->getConnection()->beginTransaction();

        $alias = 'j';
        $qb = $manager->getRepository($this->jobClass)->createQueryBuilder($alias);
        $qb
            ->select("$alias")
            ->where("$alias.status = :status")->setParameter('status', MailJob::STATUS_READY)
            ->andWhere("$alias.scheduled <= :now")->setParameter('now', $this->now)
            ->setMaxResults($limit)
        ;

        $jobs = array();
        $iterableResult = $qb->getQuery()->iterate();
        foreach ($iterableResult as $row) {
            $job = $row[0];
            $jobs[] = $job;

            $job->setStatus(MailJob::STATUS_WORKING);
        }

        $manager->flush();
        $manager->clear();

        $manager->getConnection()->commit();

        return $jobs;
    }

    protected function sendMails($jobs, InputInterface $input, OutputInterface $output, $mandantName)
    {
        $manager = $this->mm->getObjectManager($mandantName);

        if ($output->getVerbosity() > 1) {
            $output->writeln(sprintf('Sending mails for mandant <info>%s</info>', $mandantName));
        }

        // send jobs
        foreach ($jobs as $job) {
            try {
                if ($output->getVerbosity() > 1) {
                    $output->writeln('    Sending mail to <info>'.$job->getToMail().'</info>');
                }
                $this->getContainer()->get('ibrows_newsletter.mailer')->send($job);
                $job->setStatus(MailJob::STATUS_COMPLETED);
                ++$this->successCount;
            } catch (\Swift_SwiftException $e) {
                if ($output->getVerbosity() > 1) {
                    $output->writeln('        <info>something went wrong.</info>');
                    $output->writeln(sprintf('        <error>%s</error>', $e->getMessage()));
                }
                $job->setStatus(MailJob::STATUS_ERROR);
                $job->setError($e->getMessage().'||'.$e->getTraceAsString());
                ++$this->errorCount;
            }

            $job->setCompleted(new \DateTime());
            $manager->merge($job);
            $manager->flush();
        }

        if ($output->getVerbosity() > 1) {
            $output->writeln(sprintf('Finished sending mails for mandant <info>%s</info>', $mandantName));
            $output->writeln('');
        }
        $manager->clear();
    }
}
