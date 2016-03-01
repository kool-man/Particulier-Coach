<?php

namespace Coach\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Coach\AnnonceBundle\Entity\Annonce;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Coach\AnnonceBundle\Form\AnnonceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\ArrayAdapter;
class AnnonceController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoachAnnonceBundle:Annonce:index.html.twig');
    }
    public function addAction(Request $request)
    {
	    $user = $this->container->get('security.context')->getToken()->getUser();
		  if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		 
        $em = $this->getDoctrine()->getManager();
        $form1 = $this->createForm(new AnnonceType(), new Annonce());
            if ($request->isMethod('POST')) {
                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    $annonce = $form1->getData();
					$annonce->setNom($user->getUsername());
					$annonce->setEmail($user->getEmail());
					$annonce->setProximite('Bus');
					$annonce->setAnnonceur($user);
					$annonce->upload();
                    $em->persist($annonce);
                    $em->flush();
                    
                }
            
            return $this->redirect($this->generateUrl('coach_annonce_search'));
        }
        return $this->render('CoachAnnonceBundle:Annonce:post_annonce.html.twig', array(
            'form' => $form1->createView()
        ));
    }
     public function deleteAction($id) {
    
        $user = $this->get('security.context')->getToken()->getUser();
        
         $em = $this->getDoctrine()->getManager();
          
           $annonce = $this->getDoctrine()->getRepository('CoachAnnonceBundle:Annonce')->find($id);  
             
           $em->remove($annonce);
            $em->flush(); 
       $url = $this->get('router')->generate('coach_user_security_profile',array('tabannonce'=>1));
                    $response = new RedirectResponse($url);
                    return $response;          
    
	}
    public function searchAction($page)   
	{
	
	$adapter = new ArrayAdapter($this->getDoctrine()->getRepository('CoachAnnonceBundle:Annonce')->findAll());
    $pager = new Pagerfanta($adapter);

            $pager->setMaxPerPage(5); 
              if( !$page ) {

                $page = 1;  }

            try {

                $pager->setCurrentPage($page);

            } catch (NotValidCurrentPageException $e) {

                throw new NotFoundHttpException();

            }
       return $this->render('CoachAnnonceBundle:Annonce:recherche.html.twig',array('pager'=>$pager));
 }
 
 public function detailsAction($id)
  {
      $seoPage = $this->container->get('sonata.seo.page');
        $annonce  = $this->getDoctrine()
        ->getRepository('CoachAnnonceBundle:Annonce')
        ->find($id);
        $seoPage
            ->setTitle($annonce->getTitre())
            ->addMeta('name', 'description', $annonce->getDescription())
            ->addMeta('name', 'keywords',$annonce->getKeywords())    
            ->addMeta('property', 'og:title', $annonce->getTitre())
            ->addMeta('property', 'og:type', 'annonce')
            ->addMeta('property', 'og:url',  $annonce->getUrl())
            ->addMeta('property', 'og:description', $annonce->getDescription())
        ;
      return $this->render('CoachAnnonceBundle:Annonce:details.html.twig',array('annonce'=>$annonce));
  }
  public function packageAction() 
  {
      return $this->render('CoachAnnonceBundle:Annonce:package.html.twig');
  }
}