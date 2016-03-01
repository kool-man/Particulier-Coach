<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coach\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Coach\ReservationBundle\Entity\Reservation;
use Coach\AnnonceBundle\Entity\Commande;
use Coach\ReservationBundle\Form\ReservationType;
use Application\Sonata\UserBundle\Entity\ContactPerson;
use Coach\ReservationBundle\Form\ContactReservationType;
use Application\Sonata\UserBundle\Form\ContactPaiementType;
use Symfony\Component\HttpFoundation\Request;
/**
 * Controller managing the registration
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class ReservationController extends Controller
{
    public function paiementAction(Request $request,$pack)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new ContactPerson();        
        $commande = new Commande();
        $editForm = $this->createForm(new ContactPaiementType(), $entity);
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
                    }else{                                        
                        $contactPerson = new ContactPerson();
                        $contactPerson->setCp($cp);
                        $contactPerson->setVille($ville);
                        $contactPerson->setEmail($email);
                        $contactPerson->setNom($nom);
                        $contactPerson->setPrenom($prenom);
                        $contactPerson->setAdresse($adresse);
                        $contactPerson->setTelephone($telephone);
                        $em->persist($contactPerson);
                        $em->flush();                          
                    }
                    $commande->setClient($contactPerson);
                    $em->persist($commande);
                    $em->flush();
                    return $this->render('CoachReservationBundle:Reservation:paiement_post.html.twig',
                                array('person'=>$entity,'commande'=>$commande));
                }
        }
        return $this->render('CoachReservationBundle:Reservation:paiement.html.twig',
                array('form'=>$editForm->createView()));
    }
    ///// search mail
    public function findExistEmail($email){
        $result = $this->getDoctrine()
        ->getRepository('ApplicationSonataUserBundle:ContactPerson')
        ->findOneBy(array('email'=>$email));
        return $result;
    }
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
        $contact = $commande->getClient()->getId();
        return $this->redirect($this->generateUrl('coach_reservation_reservation',array('pack'=>3,'contact'=>$contact,'commande'=>$cmd)));
        
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
    public function reservationAction($pack,$contact,$commande)
    {
        $em = $this->getDoctrine()->getManager();        
        $entity = new Reservation();
        $form   = $this->createForm(new ReservationType(), $entity);
        $request = $this->get('request');	
        if ($request->getMethod() == 'POST') {     
		$form->handleRequest($request);
		if ($form->isValid()) {
                    $reservation = $form->getData();
                    $date_reservation = $reservation->getDateReservation();
                    $time_reservation = $reservation->getTimeReservation();
                    // date sous format jj/mm/yyyy
                    $date = new \DateTime($date_reservation);
                    // date sous format HH:MM:SS
                    $time = new \DateTime($time_reservation);
                    $reservation->setDateReservation($date);
                    $reservation->setTimeReservation($time);
                    //// get information client
                    $client = $this->getDoctrine()
                    ->getRepository('ApplicationSonataUserBundle:ContactPerson')
                    ->findOneBy(array('id'=>$contact));
                    $email = $client->getEmail();
                    $nom = $client->getNom();
                    $prenom = $client->getPrenom();
                    $telephone = $client->getTelephone();
                    $reservation->setClient($client);
                    $reservation_ok = $this->verifDateReservation($date,$time);
                    $date_reserve_time = strtotime($date_reservation);
                    $date_plus_jour = strtotime(date('Y-m-d', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))));
                    $date_plus_jour_affiche =  date('Y-m-d', mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y')));                   
                    if($date_reserve_time < $date_plus_jour){
                        $this->container->get('session')->getFlashBag()->set('error',"Merci de choisir une bonne date de réservation. La date de réservation doît être supérieur à $date_plus_jour_affiche. Nous sommes disponible 7j/7j de 8h à 18h.");
                        return $this->container->get('templating')->renderResponse('CoachReservationBundle:Reservation:reservation.html.twig',array('pack'=>$pack,'contact'=>$contact,'commande'=>$commande,'form' => $form->createView()));
                    }
                    if(!$reservation_ok){
                        $this->container->get('session')->getFlashBag()->set('error','la date prise est reservé par un autre client. Merci de choisir une autre date');
                        return $this->container->get('templating')->renderResponse('CoachReservationBundle:Reservation:reservation.html.twig',array('pack'=>$pack,'contact'=>$contact,'commande'=>$commande,'form' => $form->createView()));
                    }
                    $com = $this->getDoctrine()
                    ->getRepository('CoachAnnonceBundle:Commande')
                    ->findOneBy(array('id'=>$commande));
                    $com->setReservation($reservation);
                    $em->persist($reservation);
                    $em->flush();
                    $ok = $this->EnvoiMailAdmin("M. $prenom $nom a pris un rendez-vous le $date_reservation à $time_reservation\n E-mail : $email\n Téléphone : $telephone","Demande Coaching le $date_reservation à $time_reservation","Reda","Demande Coaching");
                    $ok = $this->EnvoiMailClient("M. $prenom $nom, Nous allons vous confirmer le rendez-vous dans 2h. Merci.","Demande Coaching","$prenom $nom","Demande Coaching",$email);
                    return $this->redirect($this->generateUrl('coach_reservation_validation',array('pack'=>$pack)));
		}	   
	   }	 
           return $this->container->get('templating')->renderResponse('CoachReservationBundle:Reservation:reservation.html.twig',array('pack'=>$pack,'contact'=>$contact,'commande'=>$commande,'form' => $form->createView()));
    }
    public function validationAction($pack)
    {
        return $this->container->get('templating')->renderResponse('CoachReservationBundle:Reservation:validation.html.twig',array('pack'=>$pack));
    }
    public function inscriptionAction($pack)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new ContactPerson();
        $form   = $this->createForm(new ContactReservationType(), $entity);
        $request = $this->get('request');	
        if ($request->getMethod() == 'POST') {     
		$form->handleRequest($request);
		if ($form->isValid()) {
                    $contactP = $form->getData();
                    $email = $contactP->getEmail();
                    $contactPerson = $this->findExistEmail($email);
                    if(!$contactPerson){
                        $em->persist($contactP);
                        $em->flush();
                        $contact = $contactP->getId();
                    } else{
                        $contact = $contactPerson->getId();                        
                    }                   
                                        
                    return $this->redirect($this->generateUrl('coach_reservation_paiement',array('pack'=>1,'contact'=>$contact)));
                }
        }
        return $this->container->get('templating')->renderResponse('CoachReservationBundle:Reservation:inscription.html.twig',array('pack'=>$pack,'form'=>$form->createView()));
    }
    public function EnvoiMailAdmin($body,$sujet="",$nom="",$titre="")
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
                'ApplicationSonataUserBundle:Contact:message.html.twig',array('nom'=>$nom,'description'=>$body,'titre'=>$titre)),'text/html');
               $this->get('mailer')->send($message);
               $ok = true;
        }
        return $ok;
    }
    public function EnvoiMailClient($body,$sujet="",$nom="",$titre="",$email)
    {        
        $message = \Swift_Message::newInstance()
       ->setSubject($sujet)
       ->setFrom(array('webmaster@particulier-coach.com'=>'Equipe Particulier & Coach'))
       ->setTo($email)
       ->setBody($this->renderView(
        'ApplicationSonataUserBundle:Contact:message.html.twig',array('nom'=>$nom,'description'=>$body,'titre'=>$titre)),'text/html');
       $this->get('mailer')->send($message);
       return true;
    }
    
    public function verifDateReservation($date,$time)
    {
        $ok = true;
        $em = $this->getDoctrine()->getManager();
        $result = $em->createQueryBuilder();
        $array_result = $result->select('c')
                      ->from('CoachReservationBundle:Reservation', 'c')
                      ->where('c.dateReservation = :dateName')
                      ->setParameter('dateName', $date)
                      ->andWhere('c.timeReservation = :timeName')
                      ->setParameter('timeName', $time)
                      ->getQuery()
                      ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        if(count($array_result) > 0) { $ok = false; }
        return $ok;
    }
    public function findEmail($email){
        $ok = false;
        $result = $this->getDoctrine()
        ->getRepository('ApplicationSonataUserBundle:User')
        ->findOneBy(array('email'=>$email));
        if($result) $ok = true;
        return $ok;
    }
    public function findUsername($username){
        $ok = false;
        $result = $this->getDoctrine()
        ->getRepository('ApplicationSonataUserBundle:User')
        ->findOneBy(array('username'=>$username));
        if($result) $ok = true;
        return $ok;
    }
    
    /**
     * add the new contact person
    **/
    public function addContactPerson($user){
        $contactPerson  = $this->getDoctrine()
        ->getRepository('ApplicationSonataUserBundle:ContactPerson')
        ->findOneBy(array('email' => $user->getEmail()));
        /// add the new email to table ContactPerson
        if(!$contactPerson){
            $contactPerson = new ContactPerson();
            $contactPerson->setEmail($user->getEmail());
            $contactPerson->setNom($user->getFirstname());
            $contactPerson->setPrenom($user->getLastname());
            $contactPerson->setTelephone($user->getPhone());
            //$contactPerson->setVille($user->getEmail());
            $contactPerson->setCp($user->getCp());
            $contactPerson->setAdresse($user->getAdressePostale());
            $em = $this->getDoctrine()->getManager();
            $em->persist($contactPerson);
            $em->flush();
        } 
        return $contactPerson;        
    }
}
