<?php
namespace Ibrows\Bundle\NewsletterBundle\Model\Design;

interface DesignManagerInterface
{
    public function get($id);
    public function findOneBy(array $criteria);
    public function findBy(array $criteria, array $orderBy = array(), $limit = null, $offset = null);
    public function create();
}
