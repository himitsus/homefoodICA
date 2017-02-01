<?php


namespace HF\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AnnounceController extends Controller
{
	public function indexAction()
  	{
  		$test = "lolzorus";

		$content = $this
		    ->get('templating')
		    ->render('HFPlatformBundle:Homepage:index.html.twig', array('test' => $test))
		;
    
    	return new Response($content);
    }

    public function helpAction()
  	{

		$content = $this
		    ->get('templating')
		    ->render('HFPlatformBundle:Homepage:help.html.twig')
		;
    
    	return new Response($content);
    }

    public function viewAction($id)
	{
	    // $id vaut 5 si l'on a appelé l'URL /platform/advert/5

	    // Ici, on récupèrera depuis la base de données
	    // l'annonce correspondant à l'id $id.
	    // Puis on passera l'annonce à la vue pour
	    // qu'elle puisse l'afficher

		return new Response("Affichage de l'annonce d'id : ".$id);
	}
}