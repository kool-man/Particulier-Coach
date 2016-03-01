<?php

namespace Coach\ConseilsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConseilController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
         // Get titles and prices of packs
        $query = $em->createQuery(
                    "SELECT p.titre,p.description,p.keywords
                     FROM CoachPageBundle:Page p where p.ordre = 7"
                    );
        $page = $query->getResult();
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->setTitle($page[0]['titre'])
            ->addMeta('name', 'description', $page[0]['description'])
            ->addMeta('name', 'keywords',$page[0]['keywords'])    
            ->addMeta('property', 'og:title', $page[0]['titre'])
            ->addMeta('property', 'og:type', 'annonce')
            ->addMeta('property', 'og:url',  $page[0]['titre'])
            ->addMeta('property', 'og:description', $page[0]['description'])
        ;
        $conseils = $em->getRepository("CoachConseilsBundle:Conseil")->findAll();
        return $this->render('CoachConseilsBundle:Conseil:index.html.twig',array('conseils'=>$conseils));
    }
}
