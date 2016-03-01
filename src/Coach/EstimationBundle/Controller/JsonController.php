<?php
namespace Coach\EstimationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
class JsonController extends Controller
{
    public function villesAction()
    {
        $request = $this->get('request');
 
        if($request->isXmlHttpRequest())
        {
            $term = $request->request->get('ville');
            $array= $this->getDoctrine()
                ->getManager()
                ->getRepository('CoachAnnonceBundle:ville')
                ->findVillesLike($term);
            $response = new JsonResponse();
            return $response->setData($array);
    	}
    }
 
    public function codesPostauxAction()
    {
    	$request = $this->get('request');
 
    	if($request->isXmlHttpRequest())
    	{
    		$term = $request->request->get('codePostal');
    		$array= $this->getDoctrine()
    		->getManager()
    		->getRepository('CoachAnnonceBundle:ville')
    		->findCodesPostauxLike($term);
 
    		$response = new JsonResponse();
                return $response->setData($array);
    	}
    }    
}
?>