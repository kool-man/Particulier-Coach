<?php

namespace Coach\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Coach\AnnonceBundle\Entity\Commande;
use Symfony\Component\HttpFoundation\Request;
class CommandeController extends Controller
{    
    public function successAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cmd = $request->query->get('commande');
        $reference = $request->query->get('NUMXKP');
        $type = $request->query->get('PAIEMENT');
        $montant = $request->query->get('MONTANTXKP');
        $commande = $em->getRepository("CoachAnnonceBundle:Commande")->find($cmd);
        $commande->setReference($reference);
        $commande->setTypePaiement($type);
        $commande->setMontant($montant);
        $commande->setAccepte(true);
        $em->persist($commande);
        $em->flush();
        $id = $commande->getAnnonce()->getId();
        return $this->redirect($this->generateUrl('coach_annonce_verification',array('id'=>$id)));
        
    }
    public function failedAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cmd = $request->query->get('commande');
        $commande = $em->getRepository("CoachAnnonceBundle:Commande")->find($cmd);
        $commande->setAccepte(false);
        $em->persist($commande);
        $em->flush();
        return $this->render('CoachAnnonceBundle:Annonce:failed.html.twig');
    }    
        
}
