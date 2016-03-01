<?php
namespace Coach\PageBundle\Controller;
use Application\Sonata\UserBundle\Entity\Contact;
use Application\Sonata\UserBundle\Entity\ContactPerson;
use Application\Sonata\UserBundle\Form\ContactAccueilType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class PageController extends Controller
{
    
    public function indexAction()
    {
        $seoPage = $this->container->get('sonata.seo.page');        
        $em = $this->getDoctrine()->getManager();
        $entity = new Contact();
        $form   = $this->createForm(new ContactAccueilType(), $entity);
        $request=$this->get('request');	
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
                    	$sujet = $contact->getNom().' - '.$contact->getProfession();
                    	$ok = $this->listeMail($contact,$sujet);
                    	if($ok){
                        	$this->container->get('session')->getFlashBag()->set('sent', 'Message envoyé !');
                    	}
		    }else{
			$this->container->get('session')->getFlashBag()->set('sent', utf8_encode('Merci de remplir tout les champs !'));
                    }
                    	return $this->redirect($this->generateUrl('coach_annonce_homepage'));
		}
	   
	}
        
         // Get titles and prices of packs
        /*$query = $em->createQuery(
                    "SELECT p.titre,p.description,p.keywords
                     FROM CoachPageBundle:Page p where p.ordre = 1"
                    );
        $page = $query->getResult();*/
        $page = $this->getDoctrine()
        ->getRepository('CoachPageBundle:Page')
        ->findOneByOrdre('1');
        $array_titre = array();
        $array_titre[1] = null;
        $array_titre[2] = null;
        $array_titre[3] = null;
        foreach($page->getTitresPage() as $titre){
            $ordre = $titre->getOrdre();
            $array_titre[$ordre] = $titre;
        }
        $seoPage
            ->setTitle($page->getTitre())
            ->addMeta('name', 'description', $page->getDescription())
            ->addMeta('name', 'keywords',$page->getKeywords())    
            ->addMeta('property', 'og:title', $page->getTitre())
            ->addMeta('property', 'og:type', 'annonce')
            ->addMeta('property', 'og:url',  'http://www.particulier-coach.com')
            ->addMeta('property', 'og:description', html_entity_decode($page->getDescription()));
        return $this->render('CoachPageBundle:Page:index.html.twig',array('form' => $form->createView(),'page'=>$page,'titres'=>$array_titre));
    }
    public function listMenuAction()
    {
        $menus  = $this->getDoctrine()
        ->getRepository('CoachPageBundle:Menu')
        ->findBy(array('enabled'=>true));

        return $this->render('CoachPageBundle:Menu:menu.html.twig',array('menus' => $menus));
    }
    
    public function mentionsAction()
    {
        return $this->render('CoachPageBundle:Page:mentions.html.twig');
    }
    
    public function conditionsAction()
    {
        return $this->render('CoachPageBundle:Page:conditions.html.twig');
    }
    public function navigationAction()
    {
        $navigations  = $this->getDoctrine()
        ->getRepository('CoachPageBundle:Menu')
        ->findAll();

        return $this->render('CoachPageBundle:Page:navigation.html.twig',array('navigations' => $navigations));
    }
    public function socialAction()
    {
        $socials  = $this->getDoctrine()
        ->getRepository('CoachPageBundle:BlockSocial')
        ->findAll();

        return $this->render('CoachPageBundle:Page:social.html.twig',array('socials' => $socials));
    }
    
    public function blockTextAction()
    {
        $texts  = $this->getDoctrine()
        ->getRepository('CoachPageBundle:BlockText')
        ->findAll();

        return $this->render('CoachPageBundle:Page:acheter-et-vendre.html.twig',array('texts' => $texts));
    }
    
    public function blockMiddleAction()
    {
        $categories  = $this->getDoctrine()
        ->getRepository('CoachPageBundle:BlockLienMiddle')
        ->findAll();

        return $this->render('CoachPageBundle:Page:categories.html.twig',array('categories' => $categories));
    }
    public function blockTopAction()
    {        
        return $this->render('CoachPageBundle:Page:video-and-form.html.twig');
    }
    public function blockBiensAction()
    {
        $annonces  = $this->getLastAnnonceByDate();
        return $this->render('CoachPageBundle:Page:owl-slider-biens.html.twig',array('annonces' => $annonces));
    }
    public function blockAnnoncesAction()
    {
        $annonces  = $this->getLastAnnonceByDate();
        return $this->render('CoachPageBundle:Page:owl-slider-annonces.html.twig',array('annonces' => $annonces));
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
               ->setFrom(array('webmaster@particulier-coach.com'=>'Particulier & Coach'))
               ->setTo($email->getEmail())
               ->setBody($this->renderView(
                'CoachPageBundle:Mailing:mail.html.twig',array('email'=>$contact->getEmail(),'nom'=>$contact->getNom(),'profession'=>$contact->getProfession())),'text/html');
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
    public function getLastAnnonceByDate()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT a FROM CoachAnnonceBundle:Annonce a WHERE a.vendu = \'N\' and a.enabled = \'1\' ORDER BY a.createdAt DESC')
                           ->setMaxResults(8);
        return $query->getResult();
    }
}
