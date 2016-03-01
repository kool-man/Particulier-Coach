<?php
namespace Coach\PageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Coach\PageBundle\Entity\Page;
use Coach\PageBundle\Entity\Menu;
use Coach\PageBundle\Entity\BlockVideo;
use Coach\PageBundle\Entity\BlockLienMiddle;
use Coach\PageBundle\Entity\BlockText;
use Coach\PageBundle\Entity\BlockSocial;
class LoadPageData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        ////// blocks menu
        $menu = new Menu();
        $menu->setTitre('Accueil');
        $menu->setLien('');
        $manager->persist($menu);
        $manager->flush();
        
        $menu1 = new Menu();
        $menu1->setTitre('Coaching immobilier');
        $menu1->setLien('');
        $manager->persist($menu1);
        $manager->flush();
        
        $menu2 = new Menu();
        $menu2->setTitre('Prix immobilier M2');
        $menu2->setLien('');
        $manager->persist($menu2);
        $manager->flush();
        
        $menu3 = new Menu();
        $menu3->setTitre('Déposez une annonce');
        $menu3->setLien('pack');
        $manager->persist($menu3);
        $manager->flush();
        
        $menu4 = new Menu();
        $menu4->setTitre('Annonces Immobilières');
        $menu4->setLien('');
        $manager->persist($menu4);
        $manager->flush();
        
        $menu5 = new Menu();
        $menu5->setTitre('Panneaux Immobilier');
        $menu5->setLien('panneau');
        $manager->persist($menu5);
        $manager->flush();
        
        $menu6 = new Menu();
        $menu6->setTitre('Conseils immo');
        $menu6->setLien('');
        $manager->persist($menu6);
        $manager->flush();
        
        ////// blocks page
        $page = new Page();
        $page->setMenu($menu);
        $page->setTitre('Coach & particulier');
        $page->setDescription('coach & particulier');
        $page->setKeywords('coach,particulier,annonce');
        //$page1->setUrl('');
        $manager->persist($page);
        $manager->flush();
        
        $page1 = new Page();
        $page1->setMenu($menu1);
        $page1->setTitre('Coaching immobilier');
        $page1->setDescription('coach & particulier');
        $page1->setKeywords('coach,particulier,annonce');
        //$page1->setUrl('');
        $manager->persist($page1);
        $manager->flush(); 
               
        
        $page2 = new Page();
        $page2->setMenu($menu2);
        $page2->setTitre('Prix Immobilier M2');
        $page2->setDescription('coach & particulier');
        $page2->setKeywords('coach,particulier,annonce');
        //$page1->setUrl('');
        $manager->persist($page2);
        $manager->flush();        
        
        $page3 = new Page();
        $page3->setMenu($menu3);
        $page3->setTitre('Coaching immobilier');
        $page3->setDescription('coach & particulier');
        $page3->setKeywords('coach,particulier,annonce');
        //$page1->setUrl('');
        $manager->persist($page3);
        $manager->flush(); 
        
        
        $page4 = new Page();
        $page4->setMenu($menu4);
        $page4->setTitre('Coaching immobilier');
        $page4->setDescription('coach & particulier');
        $page4->setKeywords('coach,particulier,annonce');
        //$page1->setUrl('');
        $manager->persist($page4);
        $manager->flush(); 
        
        $page5 = new Page();
        $page5->setMenu($menu5);
        $page5->setTitre('Coaching immobilier');
        $page5->setDescription('coach & particulier');
        $page5->setKeywords('coach,particulier,annonce');
        //$page1->setUrl('');
        $manager->persist($page5);
        $manager->flush(); 
        
        ////// blocks video page d'accueil
        $block1 = new BlockVideo();
        $block1->setTitre('Annonce immobilière particulier');
        $block1->setLien('UemA5HPkjs8');
        $block1->setPage($page);
        $manager->persist($block1);
        $manager->flush();
        
        ////// blocks text page d'accueil
        $block2 = new BlockText();
        $block2->setTitre('JE SUIS VENDEUR');
        $block2->setDescription('Après une longue période d\'euphorie, le marché immobilier s\'est tendu une première fois en 2008 puis plus sérieusement en 2012. Vendre un bien immobilier est devenu plus compliqué. Dans ce contexte, chaque vendeur se doit de construire une stratégie efficace en adéquation avec son projet. Vous souhaitez vendre au meilleur prix dans un délai raisonnable ? Découvrez ce que notre équipe va vous apporter. ');
        $block2->setPage($page);
        $manager->persist($block2);
        $manager->flush();
        
        $block3 = new BlockText();
        $block3->setTitre('JE SUIS ACQUEREUR');
        $block3->setDescription('Dans vos recherches de biens immobiliers, vous cumulez les heures passées sur les sites d’annonces à essayer de trouver la perle rare. Malheureusement, les annonces immobilières manquent de précision. Vos visites sont souvent décevantes et ne correspondent pas à ce que vous aviez imaginé. Vous voulez gagner du temps en étant plus efficace ? Découvrez ce que notre équipe va vous apporter. ');
        $block3->setPage($page);
        $manager->persist($block3);
        $manager->flush();
        
        
        ////// blocks liens middle page d'accueil
        $lienmiddle1 = new BlockLienMiddle();
        $lienmiddle1->setTitre('Titre ici');
        $lienmiddle1->setDescription('Maximum de client avec multi-diffision de votre annonce immobilier particulier ');
        $lienmiddle1->setType('fa-line-chart');
        $lienmiddle1->setPage($page);
        $manager->persist($lienmiddle1);
        $manager->flush();
        
        $lienmiddle2 = new BlockLienMiddle();
        $lienmiddle2->setTitre('Titre ici');
        $lienmiddle2->setDescription('Maximum de client avec multi-diffision de votre annonce immobilier particulier ');
        $lienmiddle2->setType('fa-group');
        $lienmiddle2->setPage($page);
        $manager->persist($lienmiddle2);
        $manager->flush();
        
        $lienmiddle3 = new BlockLienMiddle();
        $lienmiddle3->setTitre('Titre ici');
        $lienmiddle3->setDescription('Maximum de client avec multi-diffision de votre annonce immobilier particulier ');
        $lienmiddle3->setType('fa-cogs');
        $lienmiddle3->setPage($page);
        $manager->persist($lienmiddle3);
        $manager->flush();
        
        $lienmiddle4 = new BlockLienMiddle();
        $lienmiddle4->setTitre('Titre ici');
        $lienmiddle4->setDescription('Maximum de client avec multi-diffision de votre annonce immobilier particulier ');
        $lienmiddle4->setType('fa-comments');
        $lienmiddle4->setPage($page);
        $manager->persist($lienmiddle4);
        $manager->flush();
        
        $lienmiddle5 = new BlockLienMiddle();
        $lienmiddle5->setTitre('Titre ici');
        $lienmiddle5->setDescription('Maximum de client avec multi-diffision de votre annonce immobilier particulier ');
        $lienmiddle5->setType('fa-bar-chart');
        $lienmiddle5->setPage($page);
        $manager->persist($lienmiddle5);
        $manager->flush();
        
        $lienmiddle6 = new BlockLienMiddle();
        $lienmiddle6->setTitre('Titre ici');
        $lienmiddle6->setDescription('Maximum de client avec multi-diffision de votre annonce immobilier particulier ');
        $lienmiddle6->setType('fa-university');
        $lienmiddle6->setPage($page);
        $manager->persist($lienmiddle6);
        $manager->flush();
        
        $lienmiddle7 = new BlockLienMiddle();
        $lienmiddle7->setTitre('Titre ici');
        $lienmiddle7->setDescription('Maximum de client avec multi-diffision de votre annonce immobilier particulier ');
        $lienmiddle7->setType('fa-area-chart');
        $lienmiddle7->setPage($page);
        $manager->persist($lienmiddle7);
        $manager->flush();
        
        $lienmiddle8 = new BlockLienMiddle();
        $lienmiddle8->setTitre('Titre ici');
        $lienmiddle8->setDescription('Maximum de client avec multi-diffision de votre annonce immobilier particulier ');
        $lienmiddle8->setType('fa-group');
        $lienmiddle8->setPage($page);
        $manager->persist($lienmiddle8);
        $manager->flush();
        
        ///// Réseau Social
        $social1 = new BlockSocial();
        $social1->setLinkFacebook('Lien Facebook');
        $social1->setLinkTwitter('Lien Twitter');
        $social1->setLinkGoogle('Lien Google');
        $social1->setLinkLinkedin('Lien Linkedin');
        $social1->setLinkYoutube('Lien Youtube');
        $social1->setLinkRss('Lien RSS');
        $social1->setPage($page);
        $manager->persist($social1);
        $manager->flush();
    }
}