<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AdminBundle\Entity\FinishExam;
use AdminBundle\Entity\FileExam;
use AdminBundle\Entity\FinishExamUpload;

class DetailFileExamController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction(Request $request, $id = null) {

        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl('admin_login'));
        }

        //Obtengo variables por post
        $calificacion = $request->get('calificacion');
        $course = $request->get('course-id');
        $unidad = $request->get('unidad-id');
        $remitente = $request->get('remitente-id');

        $user = $this->getUser();
        $user_id = $user->getId();

        $em = $this->getDoctrine()->getManager();

        $file_exam_repo = $em->getRepository("AdminBundle:FileExam");
        $file_exam = $file_exam_repo->findOneBy(array(
            'remitente' => $id,
            'destinatario' => $user_id
        ));

        $upload_exam_repo = $em->getRepository("AdminBundle:UploadExam");
        $upload_exam = $upload_exam_repo->findOneBy(array(
            'course' => $course,
            'unidad' => $unidad
        ));

        $user_repo = $em->getRepository('AdminBundle:User');
        $course_repo = $em->getRepository('AdminBundle:Course');

        if ($course != null && $unidad != null && $calificacion != null) {
            if (count($upload_exam) == 1) {

                $finish_exam = new FinishExamUpload();
                
                $upload_exam = $upload_exam_repo->find($upload_exam->getId());
                $finish_exam->setExam($upload_exam);
                $course_id = $course_repo->find($course);
                $finish_exam->setCourse($course_id);
                
                $finish_exam->setScore($calificacion);
                $finish_exam->setReaded(0);

                $remitente_id = $user_repo->find($remitente);
                $finish_exam->setUser($remitente_id);

                $em->persist($finish_exam);
                $flush = $em->flush();

                if ($flush == null) {

                    $notification = $this->get('app.notification_service');
                    //remitente, destinatario
                    $notification->read($remitente_id, $user_id);
                    $status = "Haz calificado con exito el examen";

                    $this->session->getFlashBag()->add("status", $status);
                    return $this->redirectToRoute('web_mycourses');
                } else {
                    $status = "No se ha calificado correctamente el examen";
                }
            } else {
                $status = "Hubo un error";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render('WebBundle:DetailFileExam:index.html.twig', array(
                    'file_exam' => $file_exam
        ));
    }

}
