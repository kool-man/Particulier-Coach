<?php

namespace Coach\PackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;

class PackController extends Controller
{
    /**
     * @Route("/pack")
     * @Template()
     */
    public function packAction()
    {        
        $em = $this->getDoctrine()->getManager();
         // Get titles and prices of packs
        $page = $this->getDoctrine()
        ->getRepository('CoachPageBundle:Page')
        ->findOneByOrdre('4');
        $array_titre = array();
        $array_titre[1] = "";
        foreach($page->getTitresPage() as $titre){
            $ordre = $titre->getOrdre();
            $array_titre[$ordre] = $titre->getTitre();
        }
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->setTitle($page->getTitre())
            ->addMeta('name', 'description', $page->getDescription())
            ->addMeta('name', 'keywords',$page->getKeywords())    
            ->addMeta('property', 'og:title', $page->getTitre())
            ->addMeta('property', 'og:type', 'annonce')
            ->addMeta('property', 'og:url',  $page->getTitre())
            ->addMeta('property', 'og:description', $page->getDescription())
        ;
         // Get titles and prices of packs
	
        $query = $em->createQuery(
                    'SELECT p.title,  
                            p.price,
                            p.ordre
                     FROM CoachPackBundle:Pack p'
                    );
        $packTitle = $query->getResult();         
        
        // Options informations
        $query = $em->createQuery(
                    'SELECT o.label,i.id
                    FROM CoachPackBundle:OptionPack o
                    JOIN o.idOption i'
                    );        
        $label = $query->getResult();
        
        // Options informations
        $query = $em->createQuery(
                    'SELECT o.description,o.id
                    FROM CoachPackBundle:OptionInfo o'
                    );
        $options = $query->getResult();        
        
        $packs = array();
            foreach ($options as $o) {
               foreach ($label as $l) { 
                if ($o['id'] == $l['id']){
                    $packs[$o['description']][] = $l['label'];
                }
            } 
        }
        
        return $this->render('CoachPackBundle:Pack:pack.html.twig',
                            array(
                                'packs' => $packs,
                                'packTitle' => $packTitle,
                                'options' => $options,
                                'page' => $page,
                                'titres' => $array_titre
                                
                            ));
    }	
    
    public function tologinAction()
    {
        $cookie = new Cookie('page', 'paiement', time() + 3600 * 24 * 7);
        // we implement a new response object (be careful! One response object per query!)
        $response = new Response();

        // and we pass it the cookie we have created
        $response->headers->setCookie($cookie);
        return $this->redirect($this->generateUrl('coach_user_security_login'));
    }
}