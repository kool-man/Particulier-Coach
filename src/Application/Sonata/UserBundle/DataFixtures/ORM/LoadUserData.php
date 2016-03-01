<?php
namespace Application\Sonata\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Application\Sonata\UserBundle\Entity\User;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
     /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        //$user->setSalt(md5(uniqid()));
        $encoder = $this->container
            ->get('security.encoder_factory')
            ->getEncoder($user)
        ;
        $user->setPassword($encoder->encodePassword('admin', $user->getSalt()));
        $user->setEmail('lellahemhamdi@gmail.com');
        $user->setRoles(array('ROLE_SUPER_ADMIN'));
        $user->setAdressePostale('France');
        $user->setCp(50000);
        $user->setEnabled(true);
        $manager->persist($user);
        $manager->flush();
        
        $user1 = new User();
        $user1->setUsername('test');
        //$user1->setSalt(md5(uniqid()));
        $encoder1 = $this->container
            ->get('security.encoder_factory')
            ->getEncoder($user1)
        ;
        $user1->setPassword($encoder1->encodePassword('test', $user1->getSalt()));
        $user1->setEmail('test@gmail.com');
        $user1->setRoles(array('ROLE_USER'));
        $user1->setAdressePostale('Tunisie');
        $user1->setCp(20000);
        $user1->setEnabled(true);
        $manager->persist($user1);
        $manager->flush();
    }
}