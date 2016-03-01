<?php
namespace Coach\PackBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Coach\PackBundle\Entity\Pack;
use Coach\PackBundle\Entity\OptionInfo;
use Coach\PackBundle\Entity\OptionPack;

class LoadPackData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        
        ////// les packs
        $pack1 = new Pack();
        $pack1->setTitle('Offre Gratuite');
        $pack1->setPrice(0);
        $pack1->setOrdre(0);
        $manager->persist($pack1);
        $manager->flush();
        
        $pack2 = new Pack();
        $pack2->setTitle('Pack star');
        $pack2->setPrice(19.99);
        $pack2->setOrdre(1);
        $manager->persist($pack2);
        $manager->flush();
        
        $pack3 = new Pack();
        $pack3->setTitle('Pack Gold');
        $pack3->setPrice(29.99);
        $pack3->setOrdre(2);
        $manager->persist($pack3);
        $manager->flush();
        
        $pack4 = new Pack();
        $pack4->setTitle('Coaching');
        $pack4->setPrice(499);
        $pack4->setOrdre(3);
        $manager->persist($pack4);
        $manager->flush();
        
        // Option Info
        $info1 = new OptionInfo();
        $info1->setDescription('Annonce immobilière - Description, DPE, contact, carte');
        $manager->persist($info1);
        $manager->flush();
        
        $info2 = new OptionInfo();
        $info2->setDescription('Photos - Quantité par annonce');
        $manager->persist($info2);
        $manager->flush();
        
        $info3 = new OptionInfo();
        $info3->setDescription('Annonce à la une - Pôle position');
        $manager->persist($info3);
        $manager->flush();
        
        $info4 = new OptionInfo();
        $info4->setDescription('Multi-diffusion - Maximum de clients');
        $manager->persist($info4);
        $manager->flush();
        
        $info5 = new OptionInfo();
        $info5->setDescription('Dossier de présentation imprimable');
        $manager->persist($info5);
        $manager->flush();
        
        $info6 = new OptionInfo();
        $info6->setDescription('Mini site personnalisé - Valorisation de votre bien');
        $manager->persist($info6);
        $manager->flush();
        
        $info7 = new OptionInfo();
        $info7->setDescription('Référencement Google');
        $manager->persist($info7);
        $manager->flush();
        
        $info8 = new OptionInfo();
        $info8->setDescription('Guide de vente immobilière');
        $manager->persist($info8);
        $manager->flush();
        
        $info9 = new OptionInfo();
        $info9->setDescription('Compte client - Suivi d\'activité');
        $manager->persist($info9);
        $manager->flush();
        
        $info10 = new OptionInfo();
        $info10->setDescription('Validité de votre annonce Durée – mois');
        $manager->persist($info10);
        $manager->flush();
        
        $info11 = new OptionInfo();
        $info11->setDescription('Sans commission - Sans intermédiaire');
        $manager->persist($info11);
        $manager->flush();
        
        
        // Option Pack
         //////////// liée au pack 1
        $option1 = new OptionPack();
        $option1->setLabel('1');
        $option1->setIdPack($pack1);
        $option1->setIdOption($info1);
        $manager->persist($option1);
        $manager->flush();
        
        $option2 = new OptionPack();
        $option2->setLabel('4');
        $option2->setIdPack($pack1);
        $option2->setIdOption($info2);
        $manager->persist($option2);
        $manager->flush();
        
        $option3 = new OptionPack();
        $option3->setLabel('0');
        $option3->setIdPack($pack1);
        $option3->setIdOption($info3);
        $manager->persist($option3);
        $manager->flush();
        
        $option4 = new OptionPack();
        $option4->setLabel('0');
        $option4->setIdPack($pack1);
        $option4->setIdOption($info4);
        $manager->persist($option4);
        $manager->flush();
        
        $option5 = new OptionPack();
        $option5->setLabel('1');
        $option5->setIdPack($pack1);
        $option5->setIdOption($info5);
        $manager->persist($option5);
        $manager->flush();
        
        $option6 = new OptionPack();
        $option6->setLabel('0');
        $option6->setIdPack($pack1);
        $option6->setIdOption($info6);
        $manager->persist($option6);
        $manager->flush();
        
        $option7 = new OptionPack();
        $option7->setLabel('0');
        $option7->setIdPack($pack1);
        $option7->setIdOption($info7);
        $manager->persist($option7);
        $manager->flush();
        
        $option8 = new OptionPack();
        $option8->setLabel('0');
        $option8->setIdPack($pack1);
        $option8->setIdOption($info8);
        $manager->persist($option8);
        $manager->flush();
        
        $option9 = new OptionPack();
        $option9->setLabel('1');
        $option9->setIdPack($pack1);
        $option9->setIdOption($info9);
        $manager->persist($option9);
        $manager->flush();
        
        $option10 = new OptionPack();
        $option10->setLabel('2');
        $option10->setIdPack($pack1);
        $option10->setIdOption($info10);
        $manager->persist($option10);
        $manager->flush();
        
        $option11 = new OptionPack();
        $option11->setLabel('-1');
        $option11->setIdPack($pack1);
        $option11->setIdOption($info11);
        $manager->persist($option11);
        $manager->flush();
        
        //////////// liée au pack 2
        $option12 = new OptionPack();
        $option12->setLabel('1');
        $option12->setIdPack($pack2);
        $option12->setIdOption($info1);
        $manager->persist($option12);
        $manager->flush();
        
        $option13 = new OptionPack();
        $option13->setLabel('6');
        $option13->setIdPack($pack2);
        $option13->setIdOption($info2);
        $manager->persist($option13);
        $manager->flush();
        
        $option14 = new OptionPack();
        $option14->setLabel('0');
        $option14->setIdPack($pack2);
        $option14->setIdOption($info3);
        $manager->persist($option14);
        $manager->flush();
        
        $option15 = new OptionPack();
        $option15->setLabel('1');
        $option15->setIdPack($pack2);
        $option15->setIdOption($info4);
        $manager->persist($option15);
        $manager->flush();
        
        $option16 = new OptionPack();
        $option16->setLabel('1');
        $option16->setIdPack($pack2);
        $option16->setIdOption($info5);
        $manager->persist($option16);
        $manager->flush();
        
        $option17 = new OptionPack();
        $option17->setLabel('0');
        $option17->setIdPack($pack2);
        $option17->setIdOption($info6);
        $manager->persist($option17);
        $manager->flush();
        
        $option18 = new OptionPack();
        $option18->setLabel('0');
        $option18->setIdPack($pack2);
        $option18->setIdOption($info7);
        $manager->persist($option18);
        $manager->flush();
        
        $option19 = new OptionPack();
        $option19->setLabel('1');
        $option19->setIdPack($pack2);
        $option19->setIdOption($info8);
        $manager->persist($option19);
        $manager->flush();
        
        $option20 = new OptionPack();
        $option20->setLabel('1');
        $option20->setIdPack($pack2);
        $option20->setIdOption($info9);
        $manager->persist($option20);
        $manager->flush();
        
        $option21 = new OptionPack();
        $option21->setLabel('3');
        $option21->setIdPack($pack3);
        $option21->setIdOption($info10);
        $manager->persist($option21);
        $manager->flush();
        
        $option22 = new OptionPack();
        $option22->setLabel('-1');
        $option22->setIdPack($pack3);
        $option22->setIdOption($info11);
        $manager->persist($option22);
        $manager->flush();
        
        //////////// liée au pack 3
        $option23 = new OptionPack();
        $option23->setLabel('1');
        $option23->setIdPack($pack3);
        $option23->setIdOption($info1);
        $manager->persist($option23);
        $manager->flush();
        
        $option24 = new OptionPack();
        $option24->setLabel('9');
        $option24->setIdPack($pack3);
        $option24->setIdOption($info2);
        $manager->persist($option24);
        $manager->flush();
        
        $option25 = new OptionPack();
        $option25->setLabel('1');
        $option25->setIdPack($pack3);
        $option25->setIdOption($info3);
        $manager->persist($option25);
        $manager->flush();
        
        $option26 = new OptionPack();
        $option26->setLabel('1');
        $option26->setIdPack($pack3);
        $option26->setIdOption($info4);
        $manager->persist($option26);
        $manager->flush();
        
        $option27 = new OptionPack();
        $option27->setLabel('1');
        $option27->setIdPack($pack3);
        $option27->setIdOption($info5);
        $manager->persist($option27);
        $manager->flush();
        
        $option28 = new OptionPack();
        $option28->setLabel('1');
        $option28->setIdPack($pack3);
        $option28->setIdOption($info6);
        $manager->persist($option28);
        $manager->flush();
        
        $option29 = new OptionPack();
        $option29->setLabel('1');
        $option29->setIdPack($pack3);
        $option29->setIdOption($info7);
        $manager->persist($option29);
        $manager->flush();
        
        $option30 = new OptionPack();
        $option30->setLabel('1');
        $option30->setIdPack($pack3);
        $option30->setIdOption($info8);
        $manager->persist($option30);
        $manager->flush();
        
        $option31 = new OptionPack();
        $option31->setLabel('1');
        $option31->setIdPack($pack3);
        $option31->setIdOption($info9);
        $manager->persist($option31);
        $manager->flush();
        
        $option32 = new OptionPack();
        $option32->setLabel('6');
        $option32->setIdPack($pack3);
        $option32->setIdOption($info10);
        $manager->persist($option32);
        $manager->flush();
        
        $option33 = new OptionPack();
        $option33->setLabel('-1');
        $option33->setIdPack($pack3);
        $option33->setIdOption($info11);
        $manager->persist($option33);
        $manager->flush();
        
        //////////// liée au pack coaching
        $option34 = new OptionPack();
        $option34->setLabel('Nos Coachs vous révèleront les secrets les mieux gardés');
        $option34->setIdPack($pack4);
        $option34->setIdOption($info1);
        $manager->persist($option34);
        $manager->flush();
        
        $option35 = new OptionPack();
        $option35->setLabel('Vendre dans les meilleures conditions avec notre formation');
        $option35->setIdPack($pack4);
        $option35->setIdOption($info2);
        $manager->persist($option35);
        $manager->flush();
        
        $option36 = new OptionPack();
        $option36->setLabel('Elaboration de stratégie de mise en vente');
        $option36->setIdPack($pack4);
        $option36->setIdOption($info3);
        $manager->persist($option36);
        $manager->flush();
        
        $option37 = new OptionPack();
        $option37->setLabel('Rendez-vous avec un coach en Ile de France');
        $option37->setIdPack($pack4);
        $option37->setIdOption($info4);
        $manager->persist($option37);
        $manager->flush();
        
        $option38 = new OptionPack();
        $option38->setLabel('Etat des lieux et analyse de votre vente');
        $option38->setIdPack($pack4);
        $option38->setIdOption($info5);
        $manager->persist($option38);
        $manager->flush();
        
        $option39 = new OptionPack();
        $option39->setLabel('Outils de vente forts');
        $option39->setIdPack($pack4);
        $option39->setIdOption($info6);
        $manager->persist($option39);
        $manager->flush();
        
        $option40 = new OptionPack();
        $option40->setLabel('Conseils de home staging');
        $option40->setIdPack($pack4);
        $option40->setIdOption($info7);
        $manager->persist($option40);
        $manager->flush();
        
        $option41 = new OptionPack();
        $option41->setLabel('Aide à la rédaction de votre annonce');
        $option41->setIdPack($pack4);
        $option41->setIdOption($info8);
        $manager->persist($option41);
        $manager->flush();
        
        $option42 = new OptionPack();
        $option42->setLabel('Conseils en communication');
        $option42->setIdPack($pack4);
        $option42->setIdOption($info9);
        $manager->persist($option42);
        $manager->flush();
        
        $option43 = new OptionPack();
        $option43->setLabel('Conseils en gestion des visites'
                . ' + Conseils de négociation');
        $option43->setIdPack($pack4);
        $option43->setIdOption($info10);
        $manager->persist($option43);
        $manager->flush();
        
        $option44 = new OptionPack();
        $option44->setLabel('Service optimisé pour un coût minimum'
                . ' + Hotline gratuite');
        $option44->setIdPack($pack4);
        $option44->setIdOption($info11);
        $manager->persist($option44);
        $manager->flush();
        
        
    }
}