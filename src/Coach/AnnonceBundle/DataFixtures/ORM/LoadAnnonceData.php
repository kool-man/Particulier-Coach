<?php
namespace Coach\AnnonceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Coach\AnnonceBundle\Entity\TypeAnnonce;
use Coach\AnnonceBundle\Entity\Proximite;
use Coach\AnnonceBundle\Entity\OptionAnnonce;
use Coach\AnnonceBundle\Entity\ClassAnnonce;
use Coach\EstimationBundle\Entity\loisirAnnonce;

class LoadAnnonceData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $type1 = new TypeAnnonce();
        $type1->setDescription('Appartement');
        $manager->persist($type1);
        $manager->flush();       
        
        
        $type2 = new TypeAnnonce();
        $type2->setDescription('Maison');
        $manager->persist($type2);
        $manager->flush();
        
        $type3 = new TypeAnnonce();
        $type3->setDescription('Bureau');
        $manager->persist($type3);
        $manager->flush();
        
        $type4 = new TypeAnnonce();
        $type4->setDescription('Commerce');
        $manager->persist($type4);
        $manager->flush();        
        
        $class1 = new ClassAnnonce();
        $class1->setName('A (moins de 50)');
        $manager->persist($class1);
        $manager->flush();       
        
        
        $class2 = new ClassAnnonce();
        $class2->setName('B (de 51 à 90)');
        $manager->persist($class2);
        $manager->flush();
        
        $class3 = new ClassAnnonce();
        $class3->setName('C (de 91 à 150)');
        $manager->persist($class3);
        $manager->flush();
        
        $class4 = new ClassAnnonce();
        $class4->setName('D (de 151 à 230)');
        $manager->persist($class4);
        $manager->flush();
        
        $class5 = new ClassAnnonce();
        $class5->setName('E (de 231 à 330)');
        $manager->persist($class5);
        $manager->flush();
        
        $class6 = new ClassAnnonce();
        $class6->setName('F (de 331 à 450)');
        $manager->persist($class6);
        $manager->flush();
        
        $class7 = new ClassAnnonce();
        $class7->setName('G (451 et plus)');
        $manager->persist($class7);
        $manager->flush();
        
        
        $ges1 = new OptionAnnonce();
        $ges1->setDescription('A (moins de 5)');
        $manager->persist($ges1);
        $manager->flush();       
        
        
        $ges2 = new OptionAnnonce();
        $ges2->setDescription('B (de 6 à 10)');
        $manager->persist($ges2);
        $manager->flush();
        
        $ges3 = new OptionAnnonce();
        $ges3->setDescription('C (de 11 à 20)');
        $manager->persist($ges3);
        $manager->flush();
        
        $ges4 = new OptionAnnonce();
        $ges4->setDescription('D (de 21 à 35)');
        $manager->persist($ges4);
        $manager->flush();
        
        $ges5 = new OptionAnnonce();
        $ges5->setDescription('E (de 36 à 55)');
        $manager->persist($ges5);
        $manager->flush();
        
        $ges6 = new OptionAnnonce();
        $ges6->setDescription('F (de 56 à 80)');
        $manager->persist($ges6);
        $manager->flush();
        
        $ges7 = new OptionAnnonce();
        $ges7->setDescription('G (plus de 80)');
        $manager->persist($ges7);
        $manager->flush();
        
        $proximite1 = new Proximite();
        $proximite1->setName('Bus');
        $manager->persist($proximite1);
        $manager->flush();
       
        $proximite2 = new Proximite();
        $proximite2->setName('Metro');
        $manager->persist($proximite2);
        $manager->flush();
        
        $proximite3 = new Proximite();
        $proximite3->setName('Tramway');
        $manager->persist($proximite3);
        $manager->flush();
        
        $proximite4 = new Proximite();
        $proximite4->setName('Train');
        $manager->persist($proximite4);
        $manager->flush();
		
		$loisirAnnonce1 = new loisirAnnonce();
        $loisirAnnonce1->setName('Piscine');
        $manager->persist($loisirAnnonce1);
        $manager->flush();
        
		$loisirAnnonce2 = new loisirAnnonce();
        $loisirAnnonce2->setName('Garage');
        $manager->persist($loisirAnnonce2);
        $manager->flush();
      
		$loisirAnnonce3 = new loisirAnnonce();
        $loisirAnnonce3->setName('Jardin');
        $manager->persist($loisirAnnonce3);
        $manager->flush();
		
		$loisirAnnonce4 = new loisirAnnonce();
        $loisirAnnonce4->setName('Terrasse');
        $manager->persist($loisirAnnonce4);
        $manager->flush();
        
        
    }
}