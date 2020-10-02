<?php

namespace WebBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Entity\Inscription;

class InscriptionController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function inscriptionAction(Request $request) {

        $user = $this->getUser();
        $course_id = $request->get('course_ajax');

        $em = $this->getDoctrine()->getManager();

        $course_repo = $em->getRepository("AdminBundle:Course");
        $course = $course_repo->find($course_id);

        $inscription = new Inscription();
        $inscription->setUser($user);
        $inscription->setCourse($course);

        $em->persist($inscription);
        $flush = $em->flush();

        if ($flush == null) {
//            $notification = $this->get('app.notification_service');
//            $notification->set($course, 'inscription', $user->getId());
            
            $status = "Ahora estas inscrito a este usuario";
        } else {
            $status = "No te has podido inscribir a este curso";
        }

        return new Response($status);
    }

    public function uninscriptionAction(Request $request) {

        $user = $this->getUser();
        $course_id = $request->get('course_ajax');

        $em = $this->getDoctrine()->getManager();

        $inscription_repo = $em->getRepository("AdminBundle:Inscription");
        $course = $inscription_repo->findOneBy(array(
            "user" => $user,
            "course" => $course_id
        ));

        $em->remove($course);
        $flush = $em->flush();

        if ($flush == null) {
            $status = "Has cancelado tu inscripcion a este curso";
        } else {
            $status = "No se ha podido cancelar la inscripcion a este curso";
        }

        return new Response($status);
    }


}
