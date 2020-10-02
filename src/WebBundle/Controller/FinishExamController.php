<?php

namespace WebBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Entity\FinishExam;

class FinishExamController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function finishExamAction(Request $request) {

        $user = $this->getUser();
        $exam_id = $request->get('exam_ajax');
        $course_id = $request->get('course_ajax');

        $em = $this->getDoctrine()->getManager();

        $exam_repo = $em->getRepository("AdminBundle:Exam");
        $exam = $exam_repo->find($exam_id);
        $course_repo = $em->getRepository("AdminBundle:Course");
        $course = $course_repo->find($course_id);
        
        $inscription = new FinishExam();
        $inscription->setUser($user);
        $inscription->setExam($exam);
        $inscription->setCourse($course);

        $em->persist($inscription);
        $flush = $em->flush();

        if ($flush == null) {            
            $status = "Has acabado este examen";
        } else {
            $status = "Hubo un error";
        }

        return new Response($status);
    }
}
