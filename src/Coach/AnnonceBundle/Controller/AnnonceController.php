<?php

namespace Coach\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Coach\AnnonceBundle\Entity\Annonce;
use Application\Sonata\UserBundle\Entity\ContactPerson;
use Application\Sonata\UserBundle\Entity\User;
use Application\Sonata\UserBundle\Entity\Message;
use Application\Sonata\UserBundle\Form\ContactPaiementType;
use Application\Sonata\UserBundle\Form\MessageType;
use Coach\AnnonceBundle\Entity\MesImages;
use Coach\AnnonceBundle\Form\AnnonceType;
use Coach\AnnonceBundle\Form\MesImagesType;
use Coach\AnnonceBundle\Form\MesImagesType1;
use Coach\AnnonceBundle\Form\MesImagesType2;
use Coach\AnnonceBundle\Form\MesImagesType3;
use Coach\AnnonceBundle\Form\MesImagesType4;
use Coach\AnnonceBundle\Form\MesImagesType5;
use Coach\AnnonceBundle\Form\MesImagesType6;
use Coach\AnnonceBundle\Form\MesImagesType7;
use Coach\AnnonceBundle\Form\MesImagesType8;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\Session\Session;

use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter as PagerAdapter;

class AnnonceController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoachAnnonceBundle:Annonce:index.html.twig');
    }
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form1 = $this->createForm(new AnnonceType(), new Annonce());
        
            if ($request->isMethod('POST')) {
                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    $annonce = $form1->getData();
                    $em->persist($annonce);
                    $em->flush();                    
                }
            
        }
        return $this->render('CoachAnnonceBundle:Annonce:post_annonce.html.twig', array(
            'form_annonce' => $form1->createView()
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository("CoachAnnonceBundle:Annonce")->findOneById($id);
        $annonce->setVendu(true);
        $em->persist($annonce);
        $em->flush();
        return $this->redirect($this->generateUrl('coach_user_security_profile'));    }

    
    ///// go to search page
    public function searchAction()
    {
	    $form = $this->createFormBuilder()
                    ->add('ville','text')
					->add('surfaceMin','integer')
					->add('surfaceMax','integer')
					->add('prixMin', 'money')
					->add('prixMax', 'money')
                    ->add('nbPiecesMin','choice',array(
						  'choices'  => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10 et plus'),
						  'expanded' => false,
						)) 
                                        ->add('nbPiecesMax','choice',array(						   
						   'choices'  => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10 et plus'),
						  'expanded' => false,
						))
					->add('save', 'submit')
					->getForm();
        return $this->render('CoachAnnonceBundle:Annonce:search.html.twig',array('form' => $form->createView() )); 
	
    }
    ///// go to form page
    public function deposerAction($ordre)
    {
	$em = $this->getDoctrine()->getManager();
        $form1 = $this->createForm(new AnnonceType(), new Annonce());
        $form2 = $this->createForm(new MesImagesType(), new MesImages());
        $form3 = $this->createForm(new MesImagesType1(), new MesImages());
        $form4 = $this->createForm(new MesImagesType2(), new MesImages());
        $form5 = $this->createForm(new MesImagesType3(), new MesImages());
        $form6 = $this->createForm(new MesImagesType4(), new MesImages());
        $form7 = $this->createForm(new MesImagesType5(), new MesImages());
        $form8 = $this->createForm(new MesImagesType6(), new MesImages());
        $form9 = $this->createForm(new MesImagesType7(), new MesImages());
        $form10 = $this->createForm(new MesImagesType8(), new MesImages());
        $proximites = $em->getRepository("CoachAnnonceBundle:Proximite")->findAll();
	$loisirAnnonces = $em->getRepository("CoachEstimationBundle:loisirAnnonce")->findAll();   
        return $this->render('CoachAnnonceBundle:Annonce:deposer.html.twig', array(
            'proximites' =>$proximites,'loisirAnnonces'=>$loisirAnnonces,'form' => $form1->createView(),
            'image0' => $form2->createView(),'image1' => $form3->createView(),'image2' => $form4->createView(),'ordre'=>$ordre,
            'image3' => $form5->createView(),'image4' => $form6->createView(),'image5' => $form7->createView(),
            'image6' => $form8->createView(),'image7' => $form9->createView(),'image8' => $form10->createView()
        ));
    }
    ///// go to form page
    public function editAnnonceAction($id)
    {
	$em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository("CoachAnnonceBundle:Annonce")->findOneById($id); 
        if (!$annonce) {
            throw $this->createNotFoundException('Unable to find this annonce.');
        }
        $array_loisirs = $annonce->getLoisirAnnonce();
        $array_loisirs_id = array();
        $array_proximites = $annonce->getProximite();
        $array_proximites_id = array();
        foreach($array_proximites as $prox){   
            $array_proximites_id[] = $prox->getId();
        }
        
        foreach($array_loisirs as $loisir){   
            $array_loisirs_id[] = $loisir->getId();
        }
        $ordre = $annonce->getPack();
        $form1 = $this->createForm(new AnnonceType(), $annonce);
        $form2 = $this->createForm(new MesImagesType(), new MesImages());
        $form3 = $this->createForm(new MesImagesType1(), new MesImages());
        $form4 = $this->createForm(new MesImagesType2(), new MesImages());
        $form5 = $this->createForm(new MesImagesType3(), new MesImages());
        $form6 = $this->createForm(new MesImagesType4(), new MesImages());
        $form7 = $this->createForm(new MesImagesType5(), new MesImages());
        $form8 = $this->createForm(new MesImagesType6(), new MesImages());
        $form9 = $this->createForm(new MesImagesType7(), new MesImages());
        $form10 = $this->createForm(new MesImagesType8(), new MesImages());
        $proximites = $em->getRepository("CoachAnnonceBundle:Proximite")->findAll();
	$loisirAnnonces = $em->getRepository("CoachEstimationBundle:loisirAnnonce")->findAll();   
        return $this->render('CoachAnnonceBundle:Annonce:edit_annonce.html.twig', array(
            'proximites' =>$proximites,'loisirAnnonces'=>$loisirAnnonces,'form' => $form1->createView(),
            'image0' => $form2->createView(),'image1' => $form3->createView(),'image2' => $form4->createView(),
            'image3' => $form5->createView(),'image4' => $form6->createView(),'image5' => $form7->createView(),
            'image6' => $form8->createView(),'image7' => $form9->createView(),'image8' => $form10->createView(),
            'ordre'=>$ordre,'annonce'=>$annonce,'array_loisirs_selected'=>$array_loisirs_id,'array_proximites_selected'=>$array_proximites_id
        ));
    }
    
    
    public function modifierAnnonceAction($id,Request $request){
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository("CoachAnnonceBundle:Annonce")->findOneById($id);        
        if (!$annonce) {
            throw $this->createNotFoundException('Unable to find this annonce.');
        }
        
        $array_loisirs = $annonce->getLoisirAnnonce();
        $array_loisirs_id = array();
        $array_proximites = $annonce->getProximite();
        $array_proximites_id = array();
        foreach($array_proximites as $prox){   
            $array_proximites_id[] = $prox->getId();
        }
        
        foreach($array_loisirs as $loisir){   
            $array_loisirs_id[] = $loisir->getId();
        }
        if ($request->isMethod('POST')) {   
            $datas = $this->getRequest()->request->all();
            $files = $request->files;                         
            $data = $datas["coach_annoncebundle_annonce"];               
            $annonce->setPack($data["pack"]);
            $typeAnnonce = $data["typeAnnonce"];   
            $annonce->setTypeAnnonce($typeAnnonce);
            $annonce->setNbPieces($data["nbPieces"]);
            $optionAnnonce = $data["optionAnnonce"]; 
            $annonce->setOptionAnnonce($optionAnnonce);
            $annonce->setNbChambre($data["nbChambre"]);
            $classAnnonce = $data["classAnnonce"];
            $annonce->setClassAnnonce($classAnnonce);
            /////// proximite
            if($data["proximite"]){
                if(count($data["proximite"]) > 0){
                    $qb = $em->createQueryBuilder();
                    $qb->select('m');
                    $qb->from('CoachAnnonceBundle:Proximite', 'm');
                    $qb->where($qb->expr()->in('m.id', $data["proximite"]));
                    $proximites = $qb->getQuery()->getResult();
                    if(count($array_proximites_id) > 0){
                        foreach($proximites as $proximite){   
                            if(!in_array($proximite->getId(),$array_proximites_id)){
                                $annonce->addProximite($proximite);
                            }
                        }
                    }
                }
            }
            ///////
            //////// loisir annonce 
            if($data["loisirAnnonce"]){
                if(count($data["loisirAnnonce"]) > 0){
                    $qb = $em->createQueryBuilder();
                    $qb->select('m');
                    $qb->from('CoachEstimationBundle:loisirAnnonce', 'm');
                    $qb->where($qb->expr()->in('m.id', $data["loisirAnnonce"]));
                    $loisirs = $qb->getQuery()->getResult();
                    if(count($array_loisirs_id) > 0){
                        foreach($loisirs as $loisir){ 
                            if(!in_array($loisir->getId(),$array_loisirs_id)){
                                $annonce->addLoisirAnnonce($loisir);
                            }
                        }
                    }
                }
            }
            ///////
            $annonce->setCp($data["cp"]);
            //// entity ville
            $qb = $em->createQueryBuilder('c');
            $qb ->select('c.id')
            ->from('CoachAnnonceBundle:ville', 'c')        
            ->where($qb->expr()->orx(
                    $qb->expr()->like('c.name', ':term1'),
                    $qb->expr()->like('c.code_postal', ':term2')
                ))
            ->setParameters(array('term1'=>$data["ville"],'term2'=>$data["cp"]))        
            ->orderBy("c.name", 'DESC')        
            ->setMaxResults(1);

            $arrayAss= $qb->getQuery()
            ->getArrayResult();

            foreach ($arrayAss as $row) {
                    $ville_id = $row['id'];
            }
            $ville = $em->getRepository("CoachAnnonceBundle:ville")->findOneById($ville_id);
            $annonce->setVille($data["ville"]);
            $annonce->setVilleId($ville);
            $annonce->setTitre($data["titre"]);
            $annonce->setAdresse($data["adresse"]);
            $annonce->setPrix($data["prix"]);
            $annonce->setSurface($data["surface"]);
            $annonce->setTel1($data["tel1"]);
            $annonce->setDescription($data["description"]);

            //// upload files
            $file0 = $files->get('coach_annoncebundle_mesimages');
            $file1 = $files->get('coach_annoncebundle_mesimages1');
            $file2 = $files->get('coach_annoncebundle_mesimages2');
            $file3 = $files->get('coach_annoncebundle_mesimages3');
            $file4 = $files->get('coach_annoncebundle_mesimages4');
            $file5 = $files->get('coach_annoncebundle_mesimages5');
            $file6 = $files->get('coach_annoncebundle_mesimages6');
            $file7 = $files->get('coach_annoncebundle_mesimages7');
            $file8 = $files->get('coach_annoncebundle_mesimages8');
            
            if($file0){
                foreach($file0 as $im0){
                    if($im0){
                        $image0 = new MesImages();
                        $image0->setFile($im0);
                        $image0->upload();
                        $annonce->addMesImage($image0);
                        $em->persist($image0);
                        $em->persist($annonce);
                    }
                }
            }
            
            if($file1){
                foreach($file1 as $im1){
                    if($im1){
                        $image1 = new MesImages();
                        $image1->setFile($im1);
                        $image1->upload();
                        $annonce->addMesImage($image1);
                        $em->persist($image1);
                        $em->persist($annonce);
                    }
                }
            }
            
            if($file2){
                foreach($file2 as $im2){
                    if($im2){
                        $image2 = new MesImages();
                        $image2->setFile($im2);
                        $image2->upload();
                        $annonce->addMesImage($image2);
                        $em->persist($image2);
                        $em->persist($annonce);
                    }
                }
            }
            
            if($file3){
                foreach($file3 as $im3){
                    if($im3){
                        $image3 = new MesImages();
                        $image3->setFile($im3);
                        $image3->upload();
                        $annonce->addMesImage($image3);
                        $em->persist($image3);
                        $em->persist($annonce);
                    }
                }
            }
            
            if($file4){
                foreach($file4 as $im4){
                    if($im4){
                        $image4 = new MesImages();
                        $image4->setFile($im4);
                        $image4->upload();
                        $annonce->addMesImage($image4);
                        $em->persist($image4);
                        $em->persist($annonce);
                    }
                }
            }
            
            if($file5){
                foreach($file5 as $im5){
                    if($im5){
                        $image5 = new MesImages();
                        $image5->setFile($im5);
                        $image5->upload();
                        $annonce->addMesImage($image5);
                        $em->persist($image5);
                        $em->persist($annonce);
                    }
                }
            }
            
            if($file6){
                foreach($file6 as $im6){
                    if($im6){
                        $image6 = new MesImages();
                        $image6->setFile($im6);
                        $image6->upload();
                        $annonce->addMesImage($image6);
                        $em->persist($image6);
                        $em->persist($annonce);
                    }
                }
            }
            
            if($file7){
                foreach($file7 as $im7){
                    if($im7){
                        $image7 = new MesImages();
                        $image7->setFile($im7);
                        $image7->upload();
                        $annonce->addMesImage($image7);
                        $em->persist($image7);
                        $em->persist($annonce);
                    }
                }
            }
            
            if($file8){
                foreach($file8 as $im8){
                    if($im8){
                        $image8 = new MesImages();
                        $image8->setFile($im8);
                        $image8->upload();
                        $annonce->addMesImage($image8);
                        $em->persist($image8);
                        $em->persist($annonce);
                    }
                }
            }
            
            $em->flush();           
        }          
        $titre = str_replace(' ','-',$annonce->getTitre());
        return $this->redirect($this->generateUrl('coach_annonce_preview',array('id'=>$id,'titre'=>$titre)));
    }
    public function ajouterAnnonceAction(Request $request)
    {
	    $em = $this->getDoctrine()->getManager();
            if ($request->isMethod('POST')) {   
                $datas = $this->getRequest()->request->all();
                $files = $request->files;                                
                $data = $datas["coach_annoncebundle_annonce"];                
                $annonce = new Annonce();
                $annonce->setPack($data["pack"]);
                $typeAnnonce = $data["typeAnnonce"];   
                $annonce->setTypeAnnonce($typeAnnonce);
                $annonce->setNbPieces($data["nbPieces"]);
                $optionAnnonce = $data["optionAnnonce"]; 
                $annonce->setOptionAnnonce($optionAnnonce);
                $annonce->setNbChambre($data["nbChambre"]);
                $classAnnonce = $data["classAnnonce"];
                $annonce->setClassAnnonce($classAnnonce);
                $email = $data["annonceur"]["email"];
                $annonce->setEmail($email);
                ///// add to ContactPerson
                $contactPerson = $this->findExistEmail($email);
                if($contactPerson){
                    $contactPerson->setCp($data["cp"]);
                    $contactPerson->setVille($data["ville"]);      
                    $contactPerson->setPasswordClear($data["annonceur"]["password_clear"]);
                    $contactPerson->setAdresse($data["adresse"]);
                    $contactPerson->setTelephone($data["tel1"]);
                    $annonce->setAnnonceur($contactPerson);
                }else{                                        
                    $contactPerson = new ContactPerson();
                    $contactPerson->setCp($data["cp"]);
                    $contactPerson->setVille($data["ville"]);
                    $contactPerson->setEmail($data["annonceur"]["email"]);
                    $contactPerson->setPasswordClear($data["annonceur"]["password_clear"]);
                    $contactPerson->setAdresse($data["adresse"]);
                    $contactPerson->setTelephone($data["tel1"]);
                    $em->persist($contactPerson);
                    $em->flush();
                    $annonce->setAnnonceur($contactPerson);                            
                }              
                
                /////// proximite
                if(count($data["proximite"])>0){
                    $qb = $em->createQueryBuilder();
                    $qb->select('m');
                    $qb->from('CoachAnnonceBundle:Proximite', 'm');
                    $qb->where($qb->expr()->in('m.id', $data["proximite"]));
                    $proximites = $qb->getQuery()->getResult();
                    foreach( $proximites as $proximite){   
                        $annonce->addProximite($proximite);    
                    }
                }
                ///////
                //////// loisir annonce
                if(count($data["loisirAnnonce"]) > 0){
                    $qb = $em->createQueryBuilder();
                    $qb->select('m');
                    $qb->from('CoachEstimationBundle:loisirAnnonce', 'm');
                    $qb->where($qb->expr()->in('m.id', $data["loisirAnnonce"]));
                    $loisirs = $qb->getQuery()->getResult();
                    foreach( $loisirs as $loisir){   
                        $annonce->addLoisirAnnonce($loisir);    
                    }
                }
                ///////
                $annonce->setCp($data["cp"]);
                //// entity ville
                $qb = $em->createQueryBuilder('c');
                $qb ->select('c.id')
                ->from('CoachAnnonceBundle:ville', 'c')        
                ->where($qb->expr()->orx(
                        $qb->expr()->like('c.name', ':term1'),
                        $qb->expr()->like('c.code_postal', ':term2')
                    ))
                ->setParameters(array('term1'=>$data["ville"],'term2'=>$data["cp"]))        
                ->orderBy("c.name", 'DESC')        
                ->setMaxResults(1);

                $arrayAss= $qb->getQuery()
                ->getArrayResult();
               
                foreach ($arrayAss as $row) {
                        $ville_id = $row['id'];
                }
                $ville = $em->getRepository("CoachAnnonceBundle:ville")->findOneById($ville_id);
                $annonce->setVille($data["ville"]);
                $annonce->setVilleId($ville);
                $annonce->setTitre($data["titre"]);
                $annonce->setAdresse($data["adresse"]);
                $annonce->setPrix($data["prix"]);
                $annonce->setSurface($data["surface"]);
                $annonce->setTel1($data["tel1"]);
                $annonce->setDescription($data["description"]);
                
                //// upload files
                $file0 = $files->get('coach_annoncebundle_mesimages');
                $file1 = $files->get('coach_annoncebundle_mesimages1');
                $file2 = $files->get('coach_annoncebundle_mesimages2');
                $file3 = $files->get('coach_annoncebundle_mesimages3');
                $file4 = $files->get('coach_annoncebundle_mesimages4');
                $file5 = $files->get('coach_annoncebundle_mesimages5');
                $file6 = $files->get('coach_annoncebundle_mesimages6');
                $file7 = $files->get('coach_annoncebundle_mesimages7');
                $file8 = $files->get('coach_annoncebundle_mesimages8'); 
                
                if($file0){
                    foreach($file0 as $im0){
                        if($im0){
                            $image0 = new MesImages();
                            $image0->setFile($im0);
                            $image0->upload();
                            $annonce->addMesImage($image0);
                            $em->persist($image0);
                            $em->persist($annonce);
                        }
                    }
                }

                if($file1){
                    foreach($file1 as $im1){
                        if($im1){
                            $image1 = new MesImages();
                            $image1->setFile($im1);
                            $image1->upload();
                            $annonce->addMesImage($image1);
                            $em->persist($image1);
                            $em->persist($annonce);
                        }
                    }
                }

                if($file2){
                    foreach($file2 as $im2){
                        if($im2){
                            $image2 = new MesImages();
                            $image2->setFile($im2);
                            $image2->upload();
                            $annonce->addMesImage($image2);
                            $em->persist($image2);
                            $em->persist($annonce);
                        }
                    }
                }

                if($file3){
                    foreach($file3 as $im3){
                        if($im3){
                            $image3 = new MesImages();
                            $image3->setFile($im3);
                            $image3->upload();
                            $annonce->addMesImage($image3);
                            $em->persist($image3);
                            $em->persist($annonce);
                        }
                    }
                }

                if($file4){
                    foreach($file4 as $im4){
                        if($im4){
                            $image4 = new MesImages();
                            $image4->setFile($im4);
                            $image4->upload();
                            $annonce->addMesImage($image4);
                            $em->persist($image4);
                            $em->persist($annonce);
                        }
                    }
                }

                if($file5){
                    foreach($file5 as $im5){
                        if($im5){
                            $image5 = new MesImages();
                            $image5->setFile($im5);
                            $image5->upload();
                            $annonce->addMesImage($image5);
                            $em->persist($image5);
                            $em->persist($annonce);
                        }
                    }
                }

                if($file6){
                    foreach($file6 as $im6){
                        if($im6){
                            $image6 = new MesImages();
                            $image6->setFile($im6);
                            $image6->upload();
                            $annonce->addMesImage($image6);
                            $em->persist($image6);
                            $em->persist($annonce);
                        }
                    }
                }

                if($file7){
                    foreach($file7 as $im7){
                        if($im7){
                            $image7 = new MesImages();
                            $image7->setFile($im7);
                            $image7->upload();
                            $annonce->addMesImage($image7);
                            $em->persist($image7);
                            $em->persist($annonce);
                        }
                    }
                }

                if($file8){
                    foreach($file8 as $im8){
                        if($im8){
                            $image8 = new MesImages();
                            $image8->setFile($im8);
                            $image8->upload();
                            $annonce->addMesImage($image8);
                            $em->persist($image8);
                            $em->persist($annonce);
                        }
                    }
                }
                $em->persist($annonce);    
                $em->flush();
                $titre = str_replace(' ','-',$annonce->getTitre());
                $id = $annonce->getId();
                return $this->redirect($this->generateUrl('coach_annonce_preview',array('id'=>$id,'titre'=>$titre)));
            }            
            return $this->redirect($this->generateUrl('coach_annonce_deposez_ajouter'));
    }
    public function activerAction($id){
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository("CoachAnnonceBundle:Annonce")->find($id);
        if (!$annonce) {
            throw $this->createNotFoundException('Unable to find this annonce.');
        }
        $annonce->setActiver(true);
        $em->persist($annonce);
        $em->flush();
        $pack = $annonce->getPack();
        $contactPerson = $annonce->getAnnonceur(); 
        $email = $contactPerson->getEmail();
        $password = $contactPerson->getPasswordClear();
        $data = array();
        $data['password_clear'] = $password;
        $data['email'] = $email;
        //////// Création un nouveau compte
        if(!$this->findUserByEmail($email)){
            $user = $this->registerUser($data,$em,$contactPerson);
            $sujet = "Vos accées 'Particulier & Coach'";
            $username= $user->getUsername();
            $email = $user->getEmail();
            $this->EnvoiMailClient($sujet,$username,$email);
        }
        if($pack == 0){
            return $this->redirect($this->generateUrl('coach_annonce_verification',array('id'=>$id)));
        }
        else{
            return $this->redirect($this->generateUrl('coach_annonce_paiement',array('id'=>$id)));
        }
    }
    public function addPhotosAction($annonce)
    {
        $form1 = $this->createForm(new MesImagesType(), new MesImages());
        $form2 = $this->createForm(new MesImagesType(), new MesImages());
        $form3 = $this->createForm(new MesImagesType(), new MesImages());
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("CoachAnnonceBundle:Annonce")->find($annonce);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find this annonce.');
        }
        $request = $this->get('request');        
        if ($request->isMethod('POST')) {
                $pack = $request->get('pack');
                $files = $request->files;//['coach_annoncebundle_annonce'];//getMesImages()->getFile();
                $file = $files->get('coach_annoncebundle_mesimages');
                foreach($file as $fichier){
                    foreach($fichier as $im){
                        $image = new MesImages();
                        $image->setFile($im);
                        $image->upload();
                        $entity->addMesImage($image);
                        $em->persist($image);
                        $em->flush();
                        $entity->setPack($pack);
                        $em->persist($entity);
                        $em->flush();
                    }
                }
                if($pack == 0){
                    return $this->redirect($this->generateUrl('coach_annonce_verification',array('id'=>$entity->getId())));
                }
                else{
                    return $this->redirect($this->generateUrl('coach_annonce_paiement',array('id'=>$entity->getId())));
                }
                
        }
        
        return $this->render('CoachAnnonceBundle:Annonce:annonce_photos.html.twig', 
                array('form1'=>$form1->createView(),'form2'=>$form2->createView(),'form3'=>$form3->createView(),
                    'annonce'=>$annonce,'pack'=>$entity->getPack()));
    }
    
    ///// search mail
    public function findExistEmail($email){
        $result = $this->getDoctrine()
        ->getRepository('ApplicationSonataUserBundle:ContactPerson')
        ->findOneBy(array('email'=>$email));
        return $result;
    }
    ///// go to details page
     public function verificationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("CoachAnnonceBundle:Annonce")->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find this annonce.');
        }
        $reference = uniqid();
        $entity->setReferenceAnnonce($reference);
        $em->persist($entity);
        $em->flush();
        $body = "Votre annonce est bien enregistré , merci de confirmer la reçu de ce mail pour activer l'annonce";
        $sujet = "Activer votre publication";
        $nom = $entity->getAnnonceur()->getNom();
        $titre = $entity->getTitre();
        $email = $entity->getAnnonceur()->getEmail();
        $this->EnvoiMailClientAnnonce($body,$sujet,$nom,$titre,$email,$id,$reference) ;
        $body = "Une nouvelle annonce a été publié.";
        $sujet = "Nouvelle annonce publié";
        $nom = "Reda";
        $this->EnvoiMailAdmin($body,$sujet,$nom,$titre,$id);
	return $this->render('CoachAnnonceBundle:Annonce:verification.html.twig');
    }
    ///// go to confirmation page
    public function confirmationAction($id,$reference)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("CoachAnnonceBundle:Annonce")->find($id);
        $entity->setValider(true);
        $titre = str_replace(' ','-',$entity->getTitre());
        $em->persist($entity);
        $em->flush();
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find this annonce.');
        }
	return $this->redirect($this->generateUrl('coach_annonce_details',array('id'=>$id,'titre'=>$titre)));
    }
    ///// go to paiement page
    public function paiementAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository("CoachAnnonceBundle:Annonce")->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find this annonce.');
        } 
        $annonceur = $entity->getAnnonceur();
        $contact = $em->getRepository('ApplicationSonataUserBundle:ContactPerson')->find($annonceur->getId());

        if (!$contact) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        }
        $editForm = $this->createForm(new ContactPaiementType(), $contact);
	if ($request->isMethod('POST')) {
            $editForm->handleRequest($request);
                if($editForm->isValid()) {
                    $em->flush();
                    $commande = new Commande();
                    $commande->setAnnonce($entity);
                    $em->persist($commande);
                    $em->flush();
                    return $this->render('CoachAnnonceBundle:Annonce:paiement_post.html.twig',
                                array('annonce'=>$entity
                            ,'person'=>$contact,'commande'=>$commande));
                }
        }
        return $this->render('CoachAnnonceBundle:Annonce:paiement.html.twig',
                array('annonce'=>$entity,
                    'form'=>$editForm->createView()));
    }
    ///// go to preview page
    public function previewAction($id,$titre)
    {
	$em = $this->getDoctrine()->getManager();        
	$annonce = $em->getRepository("CoachAnnonceBundle:Annonce")->findOneById($id);
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->setTitle($annonce->getTitre())
            ->addMeta('name', 'description', $annonce->getDescription())
            ->addMeta('name', 'keywords','')    
            ->addMeta('property', 'og:title', $annonce->getTitre())
            ->addMeta('property', 'og:type', 'annonce')
            ->addMeta('property', 'og:url',  'http://www.particulier-coach.com/annonce/details/'.$id.'-'.str_replace(' ','-',$annonce->getTitre()))
            ->addMeta('property', 'og:description', $annonce->getDescription())
        ;
	if (!is_object($annonce)) {
            throw new NotFoundException();
	}
        
        return $this->render('CoachAnnonceBundle:Annonce:details_preview.html.twig',array('annonce'=>$annonce));
    }
    ///// go to details page
    public function detailsAction($id,$titre)
    {
	$em = $this->getDoctrine()->getManager();        
	$annonce = $em->getRepository("CoachAnnonceBundle:Annonce")->findOneById($id);
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->setTitle($annonce->getTitre())
            ->addMeta('name', 'description', $annonce->getDescription())
            ->addMeta('name', 'keywords','')    
            ->addMeta('property', 'og:title', $annonce->getTitre())
            ->addMeta('property', 'og:type', 'annonce')
            ->addMeta('property', 'og:url',  'http://www.particulier-coach.com/annonce/details/'.$id.'-'.str_replace(' ','-',$annonce->getTitre()))
            ->addMeta('property', 'og:description', $annonce->getDescription())
        ;
	if (!is_object($annonce)) {
            throw new NotFoundException();
	}
        $nb = $annonce->getNbVue();
        $annonce->setNbVue($nb+1);
        $em->persist($annonce);
        $em->flush();
        $form = $this->createForm(new MessageType(), new Message());
        
        return $this->render('CoachAnnonceBundle:Annonce:details.html.twig',array('annonce'=>$annonce,'form'=>$form->createView()));
    }
    
     public function createSearchForm($em) {
         $types = array();
         $villeList = array(
            'Paris' => 'Paris', 'Marseil' => 'Marseil'
        );
        $prixMin = array(300 => 300, 600 => 600, 900 => 900);
        $prixMax = array(600 => 600, 900 => 900, 1200 => 1200);
        $surfaceMin = array(100 => 100, 200 => 200, 300 => 300);
        $surfaceMax = array(600 => 600, 900 => 900, 1200 => 1200);
        $nbrMax = array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10 et plus');
        $nbrMin = array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10 et plus');
        $form = $this->createFormBuilder()
               ->add('ville', 'text', array(
                            'required' => false,
                            'attr' => array('class'=>'form-control select-2'),
            ))
                ->add('surfaceMin', 'choice', array(
                    'choices' => $surfaceMin,
                    'empty_value' => 'Min',
                    'multiple' => false,
                    'required' => false,
                ))
                ->add('surfaceMax', 'choice', array(
                    'choices' => $surfaceMax,
                    'empty_value' => 'Max',
                    'multiple' => false,
                    'required' => false,
                ))
                ->add('prixMin', 'choice', array(
                    'choices' => $prixMin,
                    'empty_value' => 'Min',
                    'multiple' => false,
                    'required' => false,
                ))
                ->add('prixMax', 'choice', array(
                    'choices' => $prixMax,
                    'empty_value' => 'Max',
                    'multiple' => false,
                    'required' => false,
                ))
                ->add('nbPiecesMin', 'choice', array(
                    'choices' => $nbrMin,
                    'empty_value' => 'Min',
                    'expanded' => false,
                    'required' => false,
                ))
                ->add('nbPiecesMax', 'choice', array(
            'choices' => $nbrMax,
            'empty_value' => 'Max',
            'expanded' => false,
            'required' => false,
        ));

        //test
        //fin test 
        $annoncetypes = $em->getRepository('CoachAnnonceBundle:TypeAnnonce')->findAll();
        foreach ($annoncetypes as $type) {
            $types[$type->getId()] = $type->getDescription();
            $form->add($type->getDescription(), 'choice', array(
                'choices' => array('o' => 'oui', 'n' => 'non'),
                'required' => true,
                'data' => 'o',
                'expanded' => true
            ));
        }

        return array('form' => $form->setAction($this->generateUrl('coach_annonce_search'))
                    ->setMethod('GET')
                    ->add('recherche', 'submit')
                    ->getForm(), 'types' => $types);
    }
    
    
        public function searchPageAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
         // Get titles and prices of packs
        $query = $em->createQuery(
                    "SELECT p.titre,p.description,p.keywords
                     FROM CoachPageBundle:Page p where p.ordre = 5"
                    );
        $pagee = $query->getResult();
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->setTitle($pagee[0]['titre'])
            ->addMeta('name', 'description', $pagee[0]['description'])
            ->addMeta('name', 'keywords',$pagee[0]['keywords'])    
            ->addMeta('property', 'og:title', $pagee[0]['titre'])
            ->addMeta('property', 'og:type', 'annonce')
            ->addMeta('property', 'og:url',  $pagee[0]['titre'])
            ->addMeta('property', 'og:description', $pagee[0]['description'])
        ;
        $page = $this->get('request')->query->get('page');
        $array = $this->createSearchForm($em);
        $form = $array['form'];
        $types = $array['types'];
        $form->handleRequest($request);
        if ($form->isValid()) {
            $x = $this->query($form, $types);
           
            //query
            $query = $em->createQuery($x["query"]);
            $query->setParameters($x["options"]);
            $r = $query->getResult();
            $adapter = new PagerAdapter($query);
            $pagerfanta = new Pagerfanta($adapter);
            $pagerfanta->setMaxPerPage(4);
            if (!$page) {
                $page = 1;
            }
            try {
                $pagerfanta->setCurrentPage($page);
            } catch (NotValidCurrentPageException $e) {
                throw new NotFoundHttpException();
            }
            return $this->render('CoachAnnonceBundle:Annonce:search.html.twig', array(
                        'form' => $form->createView(),
                        'types' => $types,
                        'pagerfanta' => $pagerfanta));
        }
        $dql = "SELECT a FROM CoachAnnonceBundle:Annonce a WHERE a.vendu = 'N' and a.enabled = '1' ORDER BY a.createdAt DESC";
        $query = $em->createQuery($dql);
        $adapter = new PagerAdapter($query);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(5);
        if (!$page) {
            $page = 1;
        }
        try {
            $pagerfanta->setCurrentPage($page);
        } catch (NotValidCurrentPageException $e) {
            throw new NotFoundHttpException();
        }
        return $this->render('CoachAnnonceBundle:Annonce:search.html.twig', array(
                    'form' => $array['form']->createView(),
                    'types' => $array['types'],
                    'pagerfanta' => $pagerfanta));
    }
    
    
    
     public function searchAjaxAction(Request $request, $filter = "prix") {
        $em = $this->get('doctrine.orm.entity_manager');
        $page = $this->get('request')->query->get('page');
        $array = $this->createSearchForm($em);
        $form = $array['form'];
        $types = $array['types'];
        $form->handleRequest($request);
//        if ($form->isValid()) {
        $x = $this->query($form, $types);
        $dql = $x["query"];
        $dql .= " order by a.".$filter." ASC";
        $query = $em->createQuery($dql);
//        $query->orderBy('a.'. $filter, 'ASC');
        
        if (!empty($x["options"])) {
            $query->setParameters($x["options"]);
        }
        $r = $query->getResult();
        $adapter = new PagerAdapter($query);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(4);
        if (!$page) {
            $page = 1;
        }
        try {
            $pagerfanta->setCurrentPage($page);
        } catch (NotValidCurrentPageException $e) {
            throw new NotFoundHttpException();
        }
        return $this->render('CoachAnnonceBundle:Annonce:results.html.twig', array(
                    'form' => $form->createView(),
                    'types' => $types,
                    'pagerfanta' => $pagerfanta));
//        }
    }
    /**
     * 
     * @param type $form
     * @param type $types
     * @return type
     */
    protected function query($form, $types) {
        //query
        $k = 0;
        $data = $form->getData();
        $villes = $data['ville'];
        $options = array();
        $dql = "SELECT a FROM CoachAnnonceBundle:Annonce a";
        if (!empty($data['surfaceMin'])) {
            $k++;
            $options['smin'] = $data['surfaceMin'];
            $dql .= " where a.surface >= :smin";
        }
        if (!empty($data['surfaceMax'])) {
            if ($k !== 0) {
                $dql .= " and ";
            }
            if ($k === 0) {
                $dql .= " where ";
            }
            $k++;
            $options['smax'] = $data['surfaceMax'];
            $dql .= " a.surface <= :smax";
        }
        if (!empty($data['nbPiecesMin'])) {
            if ($k !== 0) {
                $dql .= " and ";
            }
            if ($k === 0) {
                $dql .= " where ";
            }
            $k++;
            $options['nmin'] = $data['nbPiecesMin'];
            $dql .= " a.nbPieces >= :nmin";
        }
        if (!empty($data['nbPiecesMax'])) {
            if ($k !== 0) {
                $dql .= " and ";
            }
            if ($k === 0) {
                $dql .= " where ";
            }
            $k++;
            $options['nmax'] = $data['nbPiecesMax'];
            $dql .= " a.nbPieces <= :nmax";
        }
        if (!empty($data['prixMin'])) {
            if ($k !== 0) {
                $dql .= " and ";
            }
            if ($k === 0) {
                $dql .= " where ";
            }
            $k++;
            $options['pmin'] = $data['prixMin'];
            $dql .= " a.prix >= :pmin";
        }
        if (!empty($data['prixMax'])) {
            if ($k !== 0) {
                $dql .= " and ";
            }
            if ($k === 0) {
                $dql .= " where ";
            }
            $k++;
            $options['pmax'] = $data['prixMax'];
            $dql .= " a.prix <= :pmax ";
        }

        if (count($villes) !== 0) {
            if ($k !== 0) {
                $dql .= " and ";
            } else {
                $dql .= " where ";
                $k++;
            }
            $dql .= " ( ";
            $i = 0;
            foreach ($villes as $ville) {
                if ($i !== 0) {
                    $dql .= " or ";
                }
                $dql .= " a.ville = :ville" . $i . " ";
                $options["ville" . $i] = $ville;
                $i++;
            }
            $dql .= ") ";
        }
        if (count($types) !== 0) {
            $j = 0;
            $i = 0;
            $dql2 = " ";
            $dql3 = " ";
            $dql4 = " ";
            $inter = " ";
            if ($k !== 0) {
                $dql2 .= " and ";
            } else {
                $dql2 = " ";
            }
            foreach ($types as $id => $type) {
                $o = $data[$type];
                if (strcmp($o, "o") === 0) {
                    if ($k === 0) {
                        $dql .= " where ";
                        $k++;
                    }
                    if ($i === 0) {
                        $dql3 .= " (";
                    }
                    if ($i !== 0) {
                        $dql3 .= " or ";
                    }
                    $dql3 .= " a.typeAnnonce = :idtypeo" . $id;
                    $options["idtypeo" . $id] = $id;
                    $i++;
                }
                if (strcmp($o, "n") === 0) {
                    if ($k === 0) {
                        $dql .= " where ";
                        $k++;
                    }
                    if ($i !== 0) {
                        $inter = " and ";
                    }
                    if ($j === 0) {

                        $dql4 .= " ( ";
                    }
                    if ($j !== 0) {
                        $dql4 .= " and ";
                    }
                    $dql4 .= " a.typeAnnonce != :idtypen" . $id;
                    $options["idtypen" . $id] = $id;
                    $j++;
                }
            }
            if ($j > 0) {
                $dql4 .=")";
            }
            if ($i > 0) {
                $dql3 .=")";
            }
            $dql .= $dql2 . $dql3 . $inter . $dql4;
        }
        //query
        return array("query" => $dql, "options" => $options);
    }  
    
    
    public function EnvoiMailAdmin($body,$sujet="",$nom="",$titre="",$id)
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
                'CoachAnnonceBundle:Mailing:mail_admin.html.twig',array('nom'=>$nom,'description'=>$body,'titre'=>$titre,'id'=>$id)),'text/html');
               $this->get('mailer')->send($message);
               $ok = true;
        }
        return $ok;
    }
    public function EnvoiMailClient($sujet,$password="",$email)
    {        
        $message = \Swift_Message::newInstance()
       ->setSubject($sujet)
       ->setFrom(array('webmaster@particulier-coach.com'=>'Equipe Particulier & Coach'))
       ->setTo($email)
       ->setBody($this->renderView(
        'CoachAnnonceBundle:Mailing:mail_acces.html.twig',array('email'=>$email,'password'=>$password)),'text/html');
       $this->get('mailer')->send($message);
       return true;
    }
    
    public function EnvoiMailClientAnnonce($body,$sujet,$nom,$titre,$email,$id,$reference)
    {        
        $message = \Swift_Message::newInstance()
       ->setSubject($sujet)
       ->setFrom(array('webmaster@particulier-coach.com'=>'Equipe Particulier & Coach'))
       ->setTo($email)
       ->setBody($this->renderView(
        'CoachAnnonceBundle:Mailing:mail.html.twig',array('nom'=>$nom,'email'=>$email,'description'=>$body,'titre'=>$titre,'id'=>$id,'reference'=>$reference)),'text/html');
       $this->get('mailer')->send($message);
       return true;
    }
    
    public function registerUser($data,$manager,$contactPerson)
    {
      do{
          $username = $this->genererUsername();
          $usr = $this->findUserByUsername($username);
      }while($usr);
      
      $user = new User();
      $password = $data['password_clear'];
      $email    = $data['email']; 
      $user->setContactPerson($contactPerson); 
      $user->setUsername($username);
      $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
      $user->setPassword($encoder->encodePassword($password, $user->getSalt()));
      $user->setEmail($email);

      $manager->persist($user);
      $manager->flush();
      return $user;
    }
    
    
    ////////// Générer username
    function genererUsername ($longueur = 8){
	// initialiser la variable $mdp
	$username = "user-";
 
	// Définir tout les caractères possibles dans le mot de passe, 
	// Il est possible de rajouter des voyelles ou bien des caractères spéciaux
	$possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";
 
	// obtenir le nombre de caractères dans la chaîne précédente
	// cette valeur sera utilisé plus tard
	$longueurMax = strlen($possible);
 
	if ($longueur > $longueurMax) {
		$longueur = $longueurMax;
	}
 
	// initialiser le compteur
	$i = 0;
 
	// ajouter un caractère aléatoire à $mdp jusqu'à ce que $longueur soit atteint
	while ($i < $longueur) {
		// prendre un caractère aléatoire
		$caractere = substr($possible, mt_rand(0, $longueurMax-1), 1);
 
		// vérifier si le caractère est déjà utilisé dans $mdp
		if (!strstr($username, $caractere)) {
			// Si non, ajouter le caractère à $mdp et augmenter le compteur
			$username .= $caractere;
			$i++;
		}
	}
 
	// retourner le résultat final
	return $username;
    }
    
    ////////// Générer password
    function genererPassword ($longueur = 8)
    {
	// initialiser la variable $mdp
	$password = "";
 
	// Définir tout les caractères possibles dans le mot de passe, 
	// Il est possible de rajouter des voyelles ou bien des caractères spéciaux
	$possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";
 
	// obtenir le nombre de caractères dans la chaîne précédente
	// cette valeur sera utilisé plus tard
	$longueurMax = strlen($possible);
 
	if ($longueur > $longueurMax) {
		$longueur = $longueurMax;
	}
 
	// initialiser le compteur
	$i = 0;
 
	// ajouter un caractère aléatoire à $mdp jusqu'à ce que $longueur soit atteint
	while ($i < $longueur) {
		// prendre un caractère aléatoire
		$caractere = substr($possible, mt_rand(0, $longueurMax-1), 1);
 
		// vérifier si le caractère est déjà utilisé dans $mdp
		if (!strstr($password, $caractere)) {
			// Si non, ajouter le caractère à $mdp et augmenter le compteur
			$password .= $caractere;
			$i++;
		}
	}
 
	// retourner le résultat final
	return $password;
    }
    
    /////////// find user by email
    public function findUserByEmail($email){
        $em = $this->get('doctrine.orm.entity_manager');
        $user = $em->getRepository("ApplicationSonataUserBundle:User")->findOneByEmail($email);
        return $user;
    }
    
    /////////// find user by username
    public function findUserByUsername($username){
        $em = $this->get('doctrine.orm.entity_manager');
        $user = $em->getRepository("ApplicationSonataUserBundle:User")->findOneByUsername($username);
        return $user;
    }
    
    public function sendMessageAction(Request $request,$ann)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new MessageType(), new Message());
        $annonce = $em->getRepository("CoachAnnonceBundle:Annonce")->findOneById($ann);
        $annonceur = $annonce->getAnnonceur();
        if($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $message = $form->getData();
                $email =    $message->getEmail();
                //////// traitement add new row to contactPerson
                $contactPerson = $this->findExistEmail($email);
                if(!$contactPerson){                                       
                    $contactPerson = new ContactPerson();
                    $contactPerson->setEmail($email);
                    $em->persist($contactPerson);
                    $em->flush();                          
                }                
                //////// Création un nouveau compte
                $user = $this->findUserByEmail($email);
                if(!$user){
                    $data['email'] = $email;
                    $data['password_clear'] = $this->genererPassword();
                    $user = $this->registerUser($data,$em,$contactPerson);
                    $sujet = "Vos accées 'Particulier & Coach'";
                    $username= $user->getUsername();
                    $password = $data['password_clear'];
                    $email = $user->getEmail(); 
                    $this->EnvoiMailClient($sujet,$password,$email);
                }        
                
                $message->setReceiver($annonce->getAnnonceur());
                $message->setSender($contactPerson);

                $sujet = "Vous avez reçu un nouveau message";
                $mail = $annonceur->getEmail();
                $this->EnvoiMailClientNewMessage($sujet,"",$mail);
                $em->persist($message);
                $em->flush();
            }
        }
        $titre = str_replace(' ','-',$annonce->getTitre());
        $id = $annonce->getId();
	return $this->redirect($this->generateUrl('coach_annonce_details',array('id'=>$id,'titre'=>$titre)));
        
    }
    
    public function EnvoiMailClientNewMessage($sujet,$username="",$email)
    {  
        $message = \Swift_Message::newInstance()
       ->setSubject($sujet)
       ->setFrom(array('webmaster@particulier-coach.com'=>'Equipe Particulier & Coach'))
       ->setTo($email)
       ->setBody($this->renderView(
        'CoachAnnonceBundle:Mailing:mail_message.html.twig',array('username'=>$username)),'text/html');
       $this->get('mailer')->send($message);
       return true;
    }
    
}
