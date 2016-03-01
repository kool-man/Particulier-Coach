<?php

namespace Coach\EstimationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Coach\EstimationBundle\Entity\estimation;
use Coach\EstimationBundle\Form\EstimationType;
use Symfony\Component\HttpFoundation\Request;

class EstimationController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
         // Get titles and prices of packs
        $page = $this->getDoctrine()
        ->getRepository('CoachPageBundle:Page')
        ->findOneByOrdre('3');
        $array_titre = array();
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
        
        $departements = $em->getRepository("CoachAnnonceBundle:departement")->findAll();
        $departement = $em->getRepository("CoachAnnonceBundle:departement")->find(1);
        return $this->render('CoachEstimationBundle:Estimation:prix_estimation.html.twig',array('departements'=>$departements,'depart'=>$departement,'page'=>$page,'titres'=>$array_titre));
    }
    public function chequeAction($cheque)
    {
        $em = $this->getDoctrine()->getManager();
        $estimation = $em->getRepository("CoachEstimationBundle:estimation")->find($cheque);
        $types = array(''=>'Type de bien','1'=>'Maison','2'=>'Appartement');
        $etat_bien = array(''=>'Etat du bien','1'=>'Sans travaux','2'=>'Avec Travaux');
        $annee_construction = array(''=>'Année de construction','1'=>'Avant 1850','2'=>'De 1850 à 1913',
            '3'=>'De 1914 à 1947','4'=>'De 1948 à 1969','5'=>'De 1970 à 1980','6'=>'De 1981 à 1991',
            '7'=>'De 1992 à 2004','8'=>"De 2005 à aujourd'hui",'9'=>'Neuf(première vente)');
        $bien = $types[$estimation->getTypeAnnonce()];
        $etat = $etat_bien[$estimation->getEtatBien()];
        $annee = $annee_construction[$estimation->getAnneeConstruction()];
        return $this->render('CoachEstimationBundle:Estimation:cheque.html.twig',array('estimation'=>$estimation,'bien'=>$bien,'etat'=>$etat,'annee'=>$annee));
    }
    public function afficheAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $departements = $em->getRepository("CoachAnnonceBundle:departement")->findAll();
        $departement = $em->getRepository("CoachAnnonceBundle:departement")->find($id);
        $page = $this->getDoctrine()
        ->getRepository('CoachPageBundle:Page')
        ->findOneByOrdre('3');
        $array_titre = array();
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
        return $this->render('CoachEstimationBundle:Estimation:prix_estimation.html.twig',array('departements'=>$departements,'depart'=>$departement,'page'=>$page));
    }
    public function estimerAction(Request $request)
    {
            $em = $this->getDoctrine()->getManager();
            $form = $this->createForm( new EstimationType(), new estimation());
            
            $proximites = $em->getRepository("CoachAnnonceBundle:Proximite")->findAll();
            $loisirAnnonces = $em->getRepository("CoachEstimationBundle:loisirAnnonce")->findAll();
            
            if ($request->isMethod('POST')) {
                    $form->handleRequest($request);
                    if ($form->isValid()) {
                        $estimation = $form->getData();
                        $contactP = $estimation->getClient();
                        $email = $contactP->getEmail();
                        $contactPerson = $this->findExistEmail($email);
                        if($contactPerson){
                            $contactPerson->setCp($estimation->getCp());
                            $contactPerson->setVille($estimation->getVille());       
                            $estimation->setClient($contactPerson);
                        }else{
                            $contactP->setCp($estimation->getCp());
                            $contactP->setVille($estimation->getVille());
                            $estimation->setClient($contactP);                            
                        }
                        $total = $this->calculPrix($estimation);
                        $estimation->setTotal($total);
                        $em->persist($estimation);
                        $em->flush();                        
                        if($total == 0){                            
                            $this->EnvoiMailAdmin($estimation,$total);   
                            return $this->render('CoachEstimationBundle:Estimation:message_manuelle.html.twig');
                        }else {
                            //// envoi mail vers l'admin
                            $this->EnvoiMailAdmin($estimation,$total);
                            //// envoi mail vers le client
                            $this->EnvoiMailClient($estimation,$total);
                            return $this->render('CoachEstimationBundle:Estimation:message_automatique.html.twig',array('email'=>$email));
                        }    
                            
                        }
            return $this->redirect($this->generateUrl('coach_estimation_form'));
        }		
		
        return $this->render('CoachEstimationBundle:Estimation:form_estimation.html.twig', array(
            'proximites' =>$proximites,'loisirAnnonces'=>$loisirAnnonces,'form' => $form->createView()));
    }
    public function envoieAction()
    {
        return $this->render('CoachEstimationBundle:Estimation:form_estimation.html.twig');
    }
    public function updateAction()
    {
        $em = $this->getDoctrine()->getManager();
        $id= 1;
        $ville = $em->getRepository("CoachAnnonceBundle:ville")->findOneById($id);
        
        while($ville){
            $maj = $this->removeAccents($ville->getName());
            $ville->setMaj($maj);            
            $em->persist($ville);
            $em->flush();
            $id++;
            $ville = $em->getRepository("CoachAnnonceBundle:ville")->findOneById($id);
        }
        return 'ok';
    }
    
    function removeAccents($str) {
        $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή',"'",'-');
        $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η',' ',' ');
        return strtoupper(str_replace($a, $b, $str));
    }
    
    /// chercher un bundle
    public function findExistEmail($email){
        $result = $this->getDoctrine()
        ->getRepository('ApplicationSonataUserBundle:ContactPerson')
        ->findOneBy(array('email'=>$email));
        return $result;
    }
    public function calculPrix($estimation){
        $type_bien = $estimation->getTypeAnnonce();
        $surface = $estimation->getSurface();
        $etat_bien = $estimation->getEtatBien();
        $annee = $estimation->getAnneeConstruction();
        $loisirs = $estimation->getLoisirAnnonce();
        $ville = $this->getDoctrine()
        ->getRepository('CoachAnnonceBundle:ville')
        ->findOneBy(array('code_postal'=>$estimation->getCp()));
         
        $loisirs_name = array();
        foreach($loisirs as $loisir){
            $loisirs_name[] =  $loisir->getName();
        }
        //traiter les donnes
        switch($type_bien)
        {
            case 1:
                  $cof =1.2;
                  $row_rs_prix94 = $ville->getVenteMaison();
            break;

            case 2:
                if( $surface <= 40){$cof =1.2;}
                else{$cof =1;}
                $row_rs_prix94 = $ville->getVenteAppartement();
            break;
            default:
                $cof = 1;
                $row_rs_prix94 = 0;
            break;    
        }
        
            //pour le parking
            if(in_array('Parking',$loisirs_name))
            {
                    $cofparking = 10000; 
            }
            else
            {
                    $cofparking = 0; 
            }
            //pour le piscine
            if(in_array('Piscine',$loisirs_name))
            {
                $cofpiscine = 20000; 
            }
            else
            {
                $cofpiscine = 0;
            }

            //pour l'etat de bien
            $cofetat_bien =1;
            if($etat_bien==1)
            {
                $cofetat_bien =1;
            }
            if($etat_bien==2){
                $cofetat_bien =0.95;
            }

            //pour etat de bien 
            switch($annee)
            {
                    case 8 :  $cofanne=1.15;
                    break;
                    case 9 :  $cofanne=1.2;
                    break;
                    default:  $cofanne=1;
                    break;    
            }
            
            if( $row_rs_prix94 == 0 ){
		$totale=0;
            }	
            else{
		$totale=($row_rs_prix94 * $cof * $surface + $cofparking + $cofpiscine)* $cofetat_bien * $cofanne;
            }
            return $totale;

    }
    
    public function EnvoiMailAdmin($estimation,$total)
    {
        $ok = false;
        $types = array(''=>'Type de bien','1'=>'Maison','2'=>'Appartement');
        $etat_bien = array(''=>'Etat du bien','1'=>'Sans travaux','2'=>'Avec Travaux');
        $annee_construction = array(''=>'Année de construction','1'=>'Avant 1850','2'=>'De 1850 à 1913',
            '3'=>'De 1914 à 1947','4'=>'De 1948 à 1969','5'=>'De 1970 à 1980','6'=>'De 1981 à 1991',
            '7'=>'De 1992 à 2004','8'=>"De 2005 à aujourd'hui",'9'=>'Neuf(première vente)');
        $surface = $estimation->getSurface();
        $bien = $types[$estimation->getTypeAnnonce()];
        $etat = $etat_bien[$estimation->getEtatBien()];
        $nb_piece = $estimation->getNbPieces();
        $nb_chambre = $estimation->getNbChambre();
        $annee = $annee_construction[$estimation->getAnneeConstruction()];
        $nom = $estimation->getClient()->getNom();
        $prenom = $estimation->getClient()->getPrenom();
        $mail = $estimation->getClient()->getEmail();
        $telephone = $estimation->getClient()->getTelephone();
        $loisirs = $estimation->getLoisirAnnonce();
        $loisirs_name = array();
        foreach($loisirs as $loisir){
            $loisirs_name[] =  $loisir->getName();
        }
        $parking = (in_array('Parking',$loisirs_name)) ? 'Oui' : 'Non'; 
        $piscine = (in_array('Piscine',$loisirs_name)) ? 'Oui' : 'Non';
                
        $sujet = "Demande Estimation - ".$bien."\n"."Surface = ".$surface." m²";
        $titre = "Demande Estimation";
        $emails  = $this->getDoctrine()
        ->getRepository('CoachPageBundle:Email')
        ->findAll();
        
        foreach($emails as $email){
                if($total>0){  
                    $message = \Swift_Message::newInstance()
                   ->setSubject($sujet)
                   ->setFrom(array('webmaster@particulier-coach.com'=>'Equipe Particulier & Coach'))
                   ->setTo($email->getEmail())
                   ->setBody($this->renderView('CoachEstimationBundle:Estimation:message_admin.html.twig',
                           array('nom'=>'Reda','prix'=>$total,'nomClient'=>$nom,'prenom'=>$prenom,'type'=>$bien,
                               'surface'=>$surface,'titre'=>$titre,'email'=>$mail,'etat'=>$etat,
                               'telephone'=>$telephone,'parking'=>$parking,'piscine'=>$piscine,
                               'nbChambres'=>$nb_chambre,'nbPieces'=>$nb_piece,'annee'=>$annee)),
                           'text/html');
                   $this->get('mailer')->send($message);
                }else{
                     $message = \Swift_Message::newInstance()
                   ->setSubject($sujet)
                   ->setFrom(array('webmaster@particulier-coach.com'=>'Equipe Particulier & Coach'))
                   ->setTo($email->getEmail())
                   ->setBody($this->renderView('CoachEstimationBundle:Estimation:estiamtion_message.html.twig',
                           array('nom'=>'Reda','nomClient'=>$nom,'prenom'=>$prenom,'type'=>$bien,
                               'surface'=>$surface,'titre'=>$titre,'email'=>$email,'etat'=>$etat,
                               'telephone'=>$telephone,'parking'=>$parking,'piscine'=>$piscine,
                               'nbChambres'=>$nb_chambre,'nbPieces'=>$nb_piece,'annee'=>$annee)),
                           'text/html');
                   $this->get('mailer')->send($message);   
                    
                }
               $ok = true;
        }
        return $ok;
    }
    public function EnvoiMailClient($estimation,$total)
    {    
        $types = array(''=>'Type de bien','1'=>'Maison','2'=>'Appartement');
        $etat_bien = array(''=>'Etat du bien','1'=>'Sans travaux','2'=>'Avec Travaux');
        $annee_construction = array(''=>'Année de construction','1'=>'Avant 1850','2'=>'De 1850 à 1913',
            '3'=>'De 1914 à 1947','4'=>'De 1948 à 1969','5'=>'De 1970 à 1980','6'=>'De 1981 à 1991',
            '7'=>'De 1992 à 2004','8'=>"De 2005 à aujourd'hui",'9'=>'Neuf(première vente)');
        $surface = $estimation->getSurface();
        $cheque = $estimation->getId();
        $bien = $types[$estimation->getTypeAnnonce()];
        $etat = $etat_bien[$estimation->getEtatBien()];
        $nb_piece = $estimation->getNbPieces();
        $nb_chambre = $estimation->getNbChambre();
        $annee = $annee_construction[$estimation->getAnneeConstruction()];
        $nom = $estimation->getClient()->getNom();
        $prenom = $estimation->getClient()->getPrenom();
        $email = $estimation->getClient()->getEmail();
        $telephone = $estimation->getClient()->getTelephone();
        $loisirs = $estimation->getLoisirAnnonce();
        $loisirs_name = array();
        foreach($loisirs as $loisir){
            $loisirs_name[] =  $loisir->getName();
        }
        $parking = (in_array('Parking',$loisirs_name)) ? 'Oui' : 'Non'; 
        $piscine = (in_array('Piscine',$loisirs_name)) ? 'Oui' : 'Non';
                
        $sujet = "Demande Estimation - ".$bien."\n"."Surface = ".$surface." m²";
        $titre = "Demande Estimation";
        $message = \Swift_Message::newInstance()
       ->setSubject($sujet)
       ->setFrom(array('webmaster@particulier-coach.com'=>'Equipe Particulier & Coach'))
       ->setTo($email)
       ->setBody($this->renderView(
                'CoachEstimationBundle:Estimation:message_client.html.twig',
               array('nom'=>'Reda','prix'=>$total,'nomClient'=>$nom,'prenom'=>$prenom,'type'=>$bien,
                           'surface'=>$surface,'titre'=>$titre,'email'=>$email,'etat'=>$etat,
                           'telephone'=>$telephone,'parking'=>$parking,'piscine'=>$piscine,
                           'nbChambres'=>$nb_chambre,'nbPieces'=>$nb_piece,'annee'=>$annee,'cheque'=>$cheque)),
                       'text/html');
        $this->get('mailer')->send($message);
       return true;
    }
}
