<?php

namespace Coach\PanneauBundle\Controller;

use Coach\PanneauBundle\Entity\Panneau;
use Coach\AnnonceBundle\Entity\Commande;
use Coach\PanneauBundle\Form\PanneauType;
use Application\Sonata\UserBundle\Form\ContactPaiementType;
use Application\Sonata\UserBundle\Entity\ContactPerson;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class PanneauController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
         // Get titles and prices of packs
        $page = $this->getDoctrine()
        ->getRepository('CoachPageBundle:Page')
        ->findOneByOrdre('6');
        $array_titre = array();
        $array_titre[1] = null;
        $array_titre[2] = null;
        $array_titre[3] = null;
        $array_titre[4] = null;
        $array_titre[5] = null;
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
            ->addMeta('property', 'og:url',  $page->getTitre())
            ->addMeta('property', 'og:description', $page->getDescription())
        ;
        $form1 = $this->createForm(new PanneauType(), new Panneau()); 
        $form2 = $this->createForm(new PanneauType(), new Panneau());
        $form3 = $this->createForm(new PanneauType(), new Panneau());
        $request = $this->get('request');
        if ($request->isMethod('POST')) {
                $form1->handleRequest($request);
                $form2->handleRequest($request);
		$form3->handleRequest($request);
                $commande = new Commande();
                if ($form1->isValid() or $form2->isValid() or $form3->isValid()) {
                    $panneau = $form1->getData();
                    $taille = $panneau->getTaille();
                    $quantite = $panneau->getQuantite();
                    if($taille == 'size-1'){
                        $prix = 40 * $quantite;
                    }else{
                        $prix = 60 * $quantite;
                    }
                    $panneau->setPrix($prix);
                    $email = $panneau->getEmail();
                    $telephone = $panneau->getTelephone();
                    //// add new contact
                    $client = $this->findEmail($email);
                    if(!$client){
                        $client = new ContactPerson();
                        $client->setEmail($email);
                        $client->setTelephone($telephone);
                    }
                    $panneau->setClient($client);
                    $commande->setPanneau($panneau);
                    $em->persist($commande);
                    $em->persist($panneau);
                    $em->flush();                    
                }
                    
            return $this->redirect($this->generateUrl('coach_panneau_paiement',array('id'=>$panneau->getId())));
        }
        return $this->render('CoachPanneauBundle:Panneau:panneau.html.twig', array(
            'form1' => $form1->createView(),
            'form2' => $form2->createView(),
            'form3' => $form3->createView(),
            'page' => $page,'titres' => $array_titre
        ));
    }
    public function findEmail($email){
        $result = $this->getDoctrine()
        ->getRepository('ApplicationSonataUserBundle:ContactPerson')
        ->findOneBy(array('email'=>$email));
        
        return $result;
    }

    public function showPanneauAction()
    {
        $panneaux  = $this->getDoctrine()
        ->getRepository('CoachPanneauBundle:Panneau')
        ->findAll();
        
        return $this->render('CoachPanneauBundle:Panneau:content_panneau.html.twig', array('panneaux' => $panneaux));
    }
    public function validationAction()
    {
       return $this->render('CoachPanneauBundle:Panneau:validation.html.twig');
    }
    public function showPubliciteAction()
    {
        /*$panneaux  = $this->getDoctrine()
        ->getRepository('CoachPanneauBundle:Panneau')
        ->findAll();
        */
        return $this->render('CoachPanneauBundle:Panneau:pub-animated.html.twig');
    }
    ///// go to paiement page
    public function paiementAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository("CoachPanneauBundle:Panneau")->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find this panneau.');
        } 
        
        $contact = $entity->getClient();
        if (!$contact) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        }
        
        $commande = $entity->getCommande();
        if (!$commande) {
            throw $this->createNotFoundException('Unable to find Commande entity.');
        }
        $editForm = $this->createForm(new ContactPaiementType(), $contact);
	if ($request->isMethod('POST')) {
            $editForm->handleRequest($request);
                if($editForm->isValid()) {
                    $datas = $this->getRequest()->request->all();
                    $data = $datas["application_sonata_userbundle_contactpaiement"];
                    $email = $data['email'];
                    $nom = $data['nom'];
                    $prenom = $data['prenom'];
                    $ville = $data['ville'];
                    $cp = $data['cp'];
                    $adresse = $data['adresse'];
                    $telephone = $data['telephone'];
                    ///// add to ContactPerson
                    $contactPerson = $this->findExistEmail($email);
                    if($contactPerson){
                        $contactPerson->setCp($cp);
                        $contactPerson->setVille($ville);      
                        $contactPerson->setNom($nom);
                        $contactPerson->setPrenom($prenom);
                        $contactPerson->setAdresse($adresse);
                        $contactPerson->setTelephone($telephone);
                        $entity->setClient($contactPerson);
                    }else{                                        
                        $person = new ContactPerson();
                        $person->setCp($cp);
                        $person->setVille($ville);
                        $person->setEmail($email);
                        $person->setNom($nom);
                        $person->setPrenom($prenom);
                        $person->setAdresse($adresse);
                        $person->setTelephone($telephone);
                        $entity->setClient($person);
                        $em->persist($person);
                        $em->flush();                           
                    }
                    return $this->render('CoachPanneauBundle:Panneau:paiement_post.html.twig',
                                array('panneau'=>$entity
                            ,'person'=>$contact,'commande'=>$commande));
                }
        }
        return $this->render('CoachPanneauBundle:Panneau:paiement.html.twig',
                array('panneau'=>$entity,
                    'form'=>$editForm->createView()));
    }
    /// chercher un bundle
    public function findExistEmail($email){
        $result = $this->getDoctrine()
        ->getRepository('ApplicationSonataUserBundle:ContactPerson')
        ->findOneBy(array('email'=>$email));
        return $result;
    }
    
    public function EnvoiMailAdmin($body,$sujet="",$nom="",$titre="",$id,$panneau)
    {
        $ok = false;
        $emails  = $this->getDoctrine()
        ->getRepository('CoachPageBundle:Email')
        ->findAll();
        foreach($emails as $email){
                $message = \Swift_Message::newInstance()
               ->setSubject($sujet)
               ->setFrom(array('webmaster@particulier-coach.com'=>'Equipe Particulier & Coach'))
               ->setTo($email->getEmail())
               ->setBody($this->renderView(
                'CoachPanneauBundle:Mailing:mail_admin.html.twig',array('nom'=>$nom,'description'=>$body,'titre'=>$titre,'id'=>$id,'panneau'=>$panneau)),'text/html');
               $this->get('mailer')->send($message);
               $ok = true;
        }
        return $ok;
    }
    public function EnvoiMailClient($body,$sujet="",$nom="",$titre="",$email,$id,$panneau)
    {        
        $message = \Swift_Message::newInstance()
       ->setSubject($sujet)
       ->setFrom(array('webmaster@particulier-coach.com'=>'Equipe Particulier & Coach'))
       ->setTo($email)
       ->setBody($this->renderView(
        'CoachPanneauBundle:Mailing:mail.html.twig',array('nom'=>$nom,'description'=>$body,'titre'=>$titre,'id'=>$id,'panneau'=>$panneau)),'text/html');
       $this->get('mailer')->send($message);
       return true;
    }
    
    public function successAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cmd = $request->query->get('commande');
        $reference = $request->query->get('NUMXKP');
        $type = $request->query->get('PAIEMENT');
        $montant = $request->query->get('MONTANTXKP');
        $commande = $em->getRepository("CoachAnnonceBundle:Commande")->find($cmd);
        if (!$commande) {
            throw $this->createNotFoundException('Unable to find this commande.');
        }
        $commande->setReference($reference);
        $commande->setTypePaiement($type);
        $commande->setMontant($montant);
        $commande->setAccepte(true);
        $em->persist($commande);
        $em->flush();
        $panneau = $commande->getPanneau();
        $body = "Votre panneau est bien enregistré , merci de confirmer la reçu de ce mail pour confirmer votre achat";
        $sujet = "Achat d'un nouveau panneau immobilière";
        $nom = $panneau->getClient()->getNom();
        $titre = "Achat Panneaux";
        $email = $panneau->getClient()->getEmail();
        $this->EnvoiMailClient($body,$sujet,$nom,$titre,$email,$id,$panneau) ;
        $body = "Une nouvelle panneau a été acheté.";
        $sujet = "Achat d'un nouveau panneau immobilière";
        $titre = "Achat Panneaux";
        $nom = "Reda";
        $this->EnvoiMailAdmin($body,$sujet,$nom,$titre,$id,$panneau);
        return $this->redirect($this->generateUrl('coach_panneau_validation'));
        
    }
    public function failedAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cmd = $request->query->get('commande');
        if (!$cmd) {
            throw $this->createNotFoundException('Unable to find this commande.');
        }
        $commande = $em->getRepository("CoachAnnonceBundle:Commande")->find($cmd);
        if (!$commande) {
            throw $this->createNotFoundException('Unable to find this commande.');
        }
        $commande->setAccepte(false);
        $em->persist($commande);
        $em->flush();
        return $this->render('CoachPanneauBundle:Panneau:failed.html.twig');
    }
        
    
}
