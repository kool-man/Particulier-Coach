<?php
namespace Ibrows\Bundle\NewsletterBundle\Service\orm;

use Ibrows\Bundle\NewsletterBundle\Service\ClassManager;

use Ibrows\Bundle\NewsletterBundle\Model\Design\DesignInterface;
use Ibrows\Bundle\NewsletterBundle\Model\Newsletter\NewsletterInterface;

use Ibrows\Bundle\NewsletterBundle\Model\Mandant\Mandant;
use Ibrows\Bundle\NewsletterBundle\Model\Mandant\MandantManager as BaseMandantManager;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\Common\Persistence\ObjectManager;

class MandantManager extends BaseMandantManager
{
    protected $doctrine;
    protected $mandants;
    protected $mandantClass;
    protected $newsletterClass;
    protected $subscriberClass;
    protected $designClass;
    protected $userClass;
    protected $readLogClass;
    protected $sendLogClass;
    protected $unsubscribeLogClass;

    protected $newsletterManager;
    protected $designManager;
    protected $subscriberManager;
    protected $statisticManager;
    protected $userProvider;

    public function __construct(
        Registry $doctrine,
        ClassManager $classManager,
        $mandants
    ) {
        $this->doctrine = $doctrine;
        $this->mandants = $mandants;

        $this->mandantClass = $classManager->getModel('mandant');
        $this->newsletterClass = $classManager->getModel('newsletter');
        $this->subscriberClass = $classManager->getModel('subscriber');
        $this->designClass = $classManager->getModel('design');
        $this->userClass = $classManager->getModel('user');
        $this->readLogClass = $classManager->getModel('readlog');
        $this->sendLogClass = $classManager->getModel('sendlog');
        $this->unsubscribeLogClass = $classManager->getModel('unsubscribelog');
    }

    public function get($name)
    {
        $manager = $this->getObjectManager($name);
        $repository = $manager->getRepository($this->mandantClass);

        return $repository->findOneBy(array('name' => $name));
    }

    public function getMandants()
    {
        return $this->mandants;
    }

    /**
     * (non-PHPdoc)
     * @see Ibrows\Bundle\NewsletterBundle\Model\Mandant.MandantManagerInterface::getUserProvider()
     */
    public function getUserProvider($name)
    {
        if ($this->userProvider === null) {
            $manager = $this->getObjectManager($name);
            $repository = $manager->getRepository($this->userClass);
            $this->userProvider = new MandantUserProvider($repository);
        }

        return $this->userProvider;
    }

    public function getSubscriberManager($name)
    {
        if ($this->subscriberManager === null) {
            $manager = $this->getObjectManager($name);
            $repository = $manager->getRepository($this->subscriberClass);
            $this->subscriberManager = new SubscriberManager($repository);
        }

        return $this->subscriberManager;
    }

    public function getNewsletterManager($name)
    {
        if ($this->newsletterManager === null) {
            $manager = $this->getObjectManager($name);
            $repository = $manager->getRepository($this->newsletterClass);
            $this->newsletterManager = new NewsletterManager($repository);
        }

        return $this->newsletterManager;
    }

    public function getDesignManager($name)
    {
        if ($this->designManager === null) {
            $manager = $this->getObjectManager($name);
            $repository = $manager->getRepository($this->designClass);
            $this->designManager = new DesignManager($repository);
        }

        return $this->designManager;
    }

    public function getStatisticManager($name)
    {
        if ($this->statisticManager === null) {
            $manager = $this->getObjectManager($name);
            $this->statisticManager = new StatisticManager(
                    $manager,
                    $name,
                    $this->readLogClass,
                    $this->sendLogClass,
                    $this->unsubscribeLogClass
             );
        }

        return $this->statisticManager;
    }

    public function persistNewsletter($name, NewsletterInterface $newsletter)
    {
        $manager = $this->getObjectManager($name);
        $newsletter->setMandant($this->get($name));
        $manager->persist($newsletter);
        $manager->flush();

        return $newsletter;
    }

    public function persistDesign($name, DesignInterface $design)
    {
        $manager = $this->getObjectManager($name);
        $design->setMandant($this->get($name));
        $manager->persist($design);
        $manager->flush();

        return $design;
    }

    /**
     *
     * @param  string                    $name
     * @return ObjectManager
     * @throws \InvalidArgumentException
     */
    public function getObjectManager($name)
    {
        if (!$name) {
            throw new \InvalidArgumentException("No mandant given. Did you forget to set the mandant on the current authenticated user?");
        }

        if (!array_key_exists($name, $this->mandants)) {
            throw new \InvalidArgumentException('Mandant "'. $name .'" does not exist. Did you forget to enable it in the IbrowsNewsletter config?');
        }

        return $this->doctrine->getManager($name);
    }
}
