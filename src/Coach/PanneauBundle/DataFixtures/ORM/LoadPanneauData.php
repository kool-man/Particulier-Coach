<?php
namespace Coach\PageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Coach\PanneauBundle\Entity\Panneau;
class LoadPanneauData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        ////// panneau
        /*$panneau1 = new Panneau();
        $panneau1->setTitre('Panneau A Vendre immobilier Akilux');
        $panneau1->setTaille('60 x 40 cm ou 80 x 60 cm');
        $panneau1->setOreillets('sans oreillets ou avec oreillets');
        $panneau1->setPrix('');
        $panneau1->setQuantite('');

        $manager->persist($panneau1);
        $manager->flush();
        */
    }
}