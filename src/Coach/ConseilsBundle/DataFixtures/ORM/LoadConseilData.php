<?php
namespace Coach\PackBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Coach\ConseilsBundle\Entity\Conseil;

class LoadConseilData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {        
        ////// les packs
        $conseil1 = new Conseil();
        $conseil1->setTitre('Titre à mettre ici');
        $conseil1->setDescription('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words');
        $conseil1->setIcone('fa-line-chart');
        $manager->persist($conseil1);
        $manager->flush();
        
        $conseil2 = new Conseil();
        $conseil2->setTitre('Titre à mettre ici');
        $conseil2->setDescription('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words');
        $conseil2->setIcone('fa-group');
        $manager->persist($conseil2);
        $manager->flush();
        
        $conseil3 = new Conseil();
        $conseil3->setTitre('Titre à mettre ici');
        $conseil3->setDescription('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words');
        $conseil3->setIcone('fa-cogs');
        $manager->persist($conseil3);
        $manager->flush();
        
        $conseil4 = new Conseil();
        $conseil4->setTitre('Titre à mettre ici');
        $conseil4->setDescription('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words');
        $conseil4->setIcone('fa-comments');
        $manager->persist($conseil4);
        $manager->flush();
        
        $conseil5 = new Conseil();
        $conseil5->setTitre('Titre à mettre ici');
        $conseil5->setDescription('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words');
        $conseil5->setIcone('fa-bar-chart');
        $manager->persist($conseil5);
        $manager->flush();
        
        $conseil6 = new Conseil();
        $conseil6->setTitre('Titre à mettre ici');
        $conseil6->setDescription('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words');
        $conseil6->setIcone('fa-university');
        $manager->persist($conseil6);
        $manager->flush();
        
        $conseil7 = new Conseil();
        $conseil7->setTitre('Titre à mettre ici');
        $conseil7->setDescription('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words');
        $conseil7->setIcone('fa-group');
        $manager->persist($conseil7);
        $manager->flush();
        
        $conseil8 = new Conseil();
        $conseil8->setTitre('Titre à mettre ici');
        $conseil8->setDescription('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words');
        $conseil8->setIcone('fa-area-chart');
        $manager->persist($conseil8);
        $manager->flush();       
        
    }
}