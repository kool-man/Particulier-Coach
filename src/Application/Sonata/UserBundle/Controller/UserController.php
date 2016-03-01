<?php

namespace Application\Sonata\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Coach\AnnonceBundle\Entity\Annonce;
use Coach\AnnonceBundle\Form\AnnonceType;
use Symfony\Component\HttpFoundation\Request;
class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationSonataUserBundle:Security:login.html.twig');
    }
    public function loginAction(Request $request)
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
            
            return $this->redirect($this->generateUrl('coach_annonce_homepage'));
        }
        return $this->render('CoachAnnonceBundle:Annonce:post_annonce.html.twig', array(
            'form_annonce' => $form1->createView()
        ));
    }
    
    public function validationAction($username)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("ApplicationSonataUserBundle:User")->findOneByUsername($username);
        $user->setEnabled(true);
        $em->persist($user);
        $em->flush();
        return $this->redirect($this->generateUrl('coach_user_security_profile'));
    }
}
