<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

	public function indexAction() {

		$em = $this->getDoctrine()->getManager();
		$courses = $em->getRepository('AdminBundle:Course')->findAll();

		return $this->render('WebBundle:Default:index.html.twig', array(
					'courses' => $courses
		));
	}

	public function checkInscriptionAction() {
		$user = $this->getUser();

		if ($user->getRole() == 'ROLE_ADMIN') {
			return $this->redirect('index-course');
		} else {
			$em = $this->getDoctrine()->getManager();
			$query = $em->createQuery('SELECT m FROM AdminBundle:Inscription m WHERE m.user = :user')
					->setParameter('user', $user->getId());
			$inscription_isset = $query->getResult();

			//Si el usuario logeado, y no tiene alguna suscripcion redirige a todos los cursos
			if (count($inscription_isset) == 0) {
				return $this->redirect('courses-index');
				//de lo contrario redirige a mis cursos
			} else {
				return $this->redirect('my-courses');
			}
		}
	}
	
	public function aboutAction() {
		return $this->render('WebBundle:InfoFooter:about.html.twig', array(
		));
	}
	
	public function aliadosAction() {
		return $this->render('WebBundle:InfoFooter:aliados.html.twig', array(
		));
	}
	
	public function contactoAction() {
		return $this->render('WebBundle:InfoFooter:contact.html.twig', array(
		));
	}
	
	public function socialAction() {
		return $this->render('WebBundle:InfoFooter:social.html.twig', array(
		));
	}
	
	public function politicaAction() {
		return $this->render('WebBundle:InfoFooter:politica.html.twig', array(
		));
	}
	
	public function terminosAction() {
		return $this->render('WebBundle:InfoFooter:terminos.html.twig', array(
		));
	}

    public function jsonAction(Request $request)
    {
        
        $imei = $request->get('imei');
        
        if($imei != null){
            $data = array(
                'status' => 'success',
                'imei' =>   $imei,
                'url' => 'www.google.com.mx'
            );
        }else{
            $data = array(
                'status' => 'error'
            );
        }
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode($data));

        return $response;
    }

}
