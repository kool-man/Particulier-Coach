<?php

namespace Application\Sonata\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Application\Sonata\UserBundle\Entity\Contact;
use Application\Sonata\UserBundle\Entity\ContactPerson;
use Application\Sonata\UserBundle\Form\ContactType;
class ContactController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Contact();
        $form   = $this->createForm(new ContactType(), $entity);
        $request = $this->get('request');	
        if ($request->getMethod() == 'POST') {     
		$form->handleRequest($request);
		if ($form->isValid()) {
                    $contact = $form->getData();
                    $email = $contact->getEmail(); 
                    $nom = $contact->getNom();
                    if(trim($email) != '' && trim($nom) != ''){
                        // add to ContactPerson
                        $contactPerson = $this->findExistEmail($email);
                        if(!$contactPerson){
                            $person = new ContactPerson();
                            $person->setEmail($email);
                            $person->setNom($nom);
                            $em->persist($person);
                            $em->flush();                          
                        }
                    	$em->persist($contact);
                    	$em->flush();
                    	$ok = $this->listeMail($contact,'Particulier & Coach - Nouvelle Message');
                    	if($ok){
                        	$this->container->get('session')->getFlashBag()->set('sent', 'Message envoyé !');
                    	}
                    }else{
                           $this->container->get('session')->getFlashBag()->set('sent', 'Merci de remplir tout les champs !');
                    }
                    return $this->redirect($this->generateUrl('coach_user_contact'));
		}
	   
	   }
	  return $this->render('ApplicationSonataUserBundle:Contact:contact.html.twig', array('form' => $form->createView()));
    }   
   
    public function sendAction()
    {
 
        $request=$this->get('request');	  

        $name=$request->request->get('nomprenom');    
        $email=$request->request->get('email');
        $content=$request->request->get('content');
        $entity=new Contact();
		
        $entity->setNom($name);
        $entity->setEmail($email);
        $entity->setTxtMail($content);		

        $em = $this->getDoctrine()->getManager();        
        $em->persist($entity);        
        $em->flush();
        $ok = $this->listeMail($content,'ContactTest');

        if($ok){
            $this->container->get('session')->getFlashBag()->set('sent',utf8_encode('Message envoyé!'));
        }    
	return $this->render('ApplicationSonataUserBundle:Contact:contact.html.twig');
    }
    
    public function listeMail($contact,$sujet="")
    {
        $ok = false;
        $emails  = $this->getDoctrine()
        ->getRepository('CoachPageBundle:Email')
        ->findAll();
        foreach($emails as $email){
                $message = \Swift_Message::newInstance()
               ->setSubject($sujet)
               ->setFrom(array('webmaster@particulier-coach.com'=>'Contactez nous'))
               ->setTo($email->getEmail())
               ->setBody($this->renderView(
                'ApplicationSonataUserBundle:Mailing:mail.html.twig',array('email'=>$contact->getEmail(),'nom'=>$contact->getNom(),'message'=>$contact->getTxtMail())),'text/html');
               $this->get('mailer')->send($message);
               $ok = true;
        }
        return $ok;
    }
    
    ///// search mail
    public function findExistEmail($email){
        $result = $this->getDoctrine()
        ->getRepository('ApplicationSonataUserBundle:ContactPerson')
        ->findOneBy(array('email'=>$email));
        return $result;
    }
    
}
