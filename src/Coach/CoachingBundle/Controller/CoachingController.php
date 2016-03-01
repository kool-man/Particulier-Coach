<?php

namespace Coach\CoachingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoachingController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
         // Get titles and prices of packs
        $page = $this->getDoctrine()
        ->getRepository('CoachPageBundle:Page')
        ->findOneByOrdre('2');
        $array_titre = array();
        $array_titre[1] = null;
        $array_titre[2] = null;       
        foreach($page->getTitresPage() as $titre){
            $ordre = $titre->getOrdre();
            $array_titre[$ordre] = $titre;
        }
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->setTitle($page->getTitre())
            ->addMeta('name', 'description', $page->getDescription())
            ->addMeta('name', 'keywords',$page->getKeywords())    
            ->addMeta('property', 'og:title', $page->getTitre())
            ->addMeta('property', 'og:type', 'annonce')
            ->addMeta('property', 'og:url',  'http://www.particulier-coach.com/coaching-immobilier/coach-immobilier/chasseur-de-biens')
            ->addMeta('property', 'og:description', $page->getDescription())
        ;
        return $this->render('CoachCoachingBundle:Coaching:index.html.twig',array('page'=>$page,'titres'=>$array_titre));
    }
}
