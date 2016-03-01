<?php
namespace Ibrows\Bundle\NewsletterBundle\Service\orm;

use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

use Doctrine\Common\Persistence\ObjectRepository;

class MandantUserProvider implements UserProviderInterface
{
    protected $repository;
    protected $class;

    public function __construct(ObjectRepository $repository)
    {
        $this->repository = $repository;
        $this->class = $repository->getClassName();
    }

    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Security\Core\User.UserProviderInterface::loadUserByUsername()
     */
    public function loadUserByUsername($username)
    {
        $user = $this->repository->findOneBy(array('username' => $username));
        if ($user === null)
            throw new UsernameNotFoundException("The user with username $username does not exist.");

        return $user;
    }

    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Security\Core\User.UserProviderInterface::refreshUser()
     */
    public function refreshUser(UserInterface $user)
    {
        // TODO: Auto-generated method stub

    }

    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Security\Core\User.UserProviderInterface::supportsClass()
     */
    public function supportsClass($class)
    {
        return $class === $this->class;
    }

}
