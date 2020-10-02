<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AdminBundle\Entity\FinishExam;
use AdminBundle\Entity\FileExam;

class CourseController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {

        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl('admin_login'));
        }

        $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository("AdminBundle:Course")->findAll();

        return $this->render('WebBundle:Courses:index.html.twig', array(
                    'courses' => $courses
        ));
    }

    public function myCoursesAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $inscription_repo = $em->getRepository('AdminBundle:Inscription');

        $courses_inscription = $inscription_repo->findBy(array(
            'user' => $user->getId()
        ));

        //Obtengo las notificaciones del usuario logeado.
        $notification_repo = $em->getRepository('AdminBundle:Notification');
        $notifications = $notification_repo->findBy(array(
            'destinatario' => $user->getId()
        ));


        //Obtengo los examenes terminados upload del usuarios logeado
        $upload_finish_exam_repo =  $em->getRepository('AdminBundle:FinishExamUpload');
        $examenes_calificados = $upload_finish_exam_repo->findBy(array(
            'user' => $user->getId()
        ));

        return $this->render('WebBundle:Courses:my-courses.html.twig', array(
                    'courses_inscription' => $courses_inscription,
                    'notifications' => $notifications,
                    'examenes_calificados' => $examenes_calificados
        ));
    }

    public function detailAction(Request $request, $id = null) {

        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl('admin_login'));
        }

        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        //Obtengo las respuestas por POST
        $answer1 = $request->get('optionsRadios-1');
        $answer2 = $request->get('optionsRadios-2');
        $answer3 = $request->get('optionsRadios-3');
        $answer4 = $request->get('optionsRadios-4');
        $answer5 = $request->get('optionsRadios-5');
        $answer6 = $request->get('optionsRadios-6');
        $answer7 = $request->get('optionsRadios-7');
        $answer8 = $request->get('optionsRadios-8');
        $answer9 = $request->get('optionsRadios-9');
        $answer10 = $request->get('optionsRadios-10');

        //Obtengo el exam-id por POST
        $exam_id = $request->get('exam-id');

        //Obtengo el user-id por POST, del FORM upload exam
        $user_id = $request->get('users');
        //Obtengo el unidad-id por POST, del FORM upload exam
        $unidad_id = $request->get('unidad-id');
        //Obtengo el file por POST, del FORM upload exam
        $file = $request->files->get('file');

        //Operacion para el numero de aciertos
        $num_correctas = $answer1 + $answer2 + $answer3 + $answer4 + $answer5 + $answer6 + $answer7 + $answer8 + $answer9 + $answer10;

        $unidad_repo = $em->getRepository("AdminBundle:Unidad");
        $topics_repo = $em->getRepository("AdminBundle:Topic");
        $info_course_repo = $em->getRepository("AdminBundle:InfoCourse");
        $sup_readings = $em->getRepository("AdminBundle:SupplementaryReading");
        $mand_readings = $em->getRepository("AdminBundle:MandatoryReading");
        $upload_exam_repo = $em->getRepository("AdminBundle:UploadExam");

        //Obtengo todas las unidades, dondea el curso sea igual al id de la URL
        $unidades = $unidad_repo->findBy(array(
            "course" => $id
        ));
        //Obtengo todos los temas, dondea el curso sea igual al id de la URL
        $topics = $topics_repo->findBy(array(
            "course" => $id
        ));
        //Obtengo la info del curso, dondea el curso sea igual al id de la URL
        $info_course = $info_course_repo->findOneBy(array(
            'course' => $id
        ));
        //Obtengo las urls, dondea el curso sea igual al id de la URL
        $urls_supplementary = $sup_readings->findBy(array(
            'course' => $id
        ));
        //Obtengo las urls, dondea el curso sea igual al id de la URL
        $urls_mandatory = $mand_readings->findBy(array(
            'course' => $id
        ));
        //Obtengo los exams uploads, dondea el curso sea igual al id de la URL
        $upload_exams = $upload_exam_repo->findBy(array(
            'course' => $id
        ));

        //Si los siguientes campos no estan nulos, entonces actualizo
        if ($exam_id != null && $num_correctas != null) {
            $this->updateFinishExam($exam_id, $num_correctas, $id);
        }
        
        //Obtengo los examenes acabados
        $finish_exams = $em->getRepository('AdminBundle:FinishExam')->findBy(array(
            'user' => $user->getId(),
            'course' => $id
        ));
        
        //Obtengo los examenes upload acabados
        $finish_exams_upload = $em->getRepository('AdminBundle:FinishExamUpload')->findBy(array(
            'user' => $user->getId(),
            'course' => $id
        ));

        $course = $em->getRepository('AdminBundle:Course')->find($id);
        $files = $em->getRepository('AdminBundle:File')->findBy(array(
            'course' => $id));

        $exams = $em->getRepository('AdminBundle:Exam')->findAll();
        $questions = $em->getRepository('AdminBundle:QuestionAdmin')->findAll();
        $answers = $em->getRepository('AdminBundle:AnswerAdmin')->findAll();

        //Obtengo todos las inscripciones donde el curso sea el seleccionado, excepto las del user logueado
        $qb = $em->createQueryBuilder();
        $users_inscriptions = $qb->select('rl')
                ->from('AdminBundle:Inscription', 'rl')
                ->where($qb->expr()->notIn('rl.user', $user->getId()))
                ->andwhere('rl.course = :course')
                ->setParameter('course', $id)
                ->getQuery()
                ->getResult();

        //Invoco a la funcion upload exam
        if ($user_id != null && $file != null && $unidad_id != null) {
            $this->uploadExam($user_id, $id, $unidad_id, $file);
        }

        //Mando a llamar a la funcion de Promedio, solo cuando el usuario haya terminado algun examen
        $average = '';
        if ($finish_exams) {
            $average = $this->averageUser($id);
        }

        return $this->render('WebBundle:Courses:detail.html.twig', array(
                    'course' => $course,
                    'unidades' => $unidades,
                    'topics' => $topics,
                    'urls_supplementary' => $urls_supplementary,
                    'urls_mandatory' => $urls_mandatory,
                    'id' => $id,
                    'info_course' => $info_course,
                    'exams' => $exams,
                    'questions' => $questions,
                    'answers' => $answers,
                    'num_correctas' => $num_correctas,
                    'finish_exams' => $finish_exams,
                    'files' => $files,
                    'upload_exams' => $upload_exams,
                    'users_inscriptions' => $users_inscriptions,
                    'average' => $average,
                    'finish_exams_upload' => $finish_exams_upload
        ));
    }

    public function updateFinishExam($exam_id, $num_correctas, $id) {

        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        $finis_exa_repo = $em->getRepository('AdminBundle:FinishExam');

        //Busco un registro en la Tabla, con el exam_id y el usuario logeado
        $finish_exam = $finis_exa_repo->findOneBy(array(
            'exam' => $exam_id,
            'user' => $user->getId()
        ));

        //Si hay un registro con los datos deseados entonces...
        //Actualizo el Score
        if ($finish_exam != null) {
            $finish_exam->setScore($num_correctas);
            $em->persist($finish_exam);
            $flush = $em->flush();

            if ($flush != null) {
                $status = "Haz acabado satisfactoriamente el examen";
                $this->session->getFlashBag()->add("status", $status);
                return $status;
            }
            //Si no existe un registro en la Tabla, entonces creo uno nuevo...
        } else {
            $exam_repo = $em->getRepository("AdminBundle:Exam");
            $exam = $exam_repo->find($exam_id);
            $course_repo = $em->getRepository("AdminBundle:Course");
            $course = $course_repo->find($id);

            $inscription = new FinishExam();
            $inscription->setUser($user);
            $inscription->setExam($exam);
            $inscription->setCourse($course);
            $inscription->setScore($num_correctas);

            $em->persist($inscription);
            $flush = $em->flush();

            if ($flush == null) {
                $status = "Haz acabado satisfactoriamente el examen" . " " . $exam->getName() . ", tu calificación fue: " . $num_correctas;
                $this->session->getFlashBag()->add("status", $status);
            } else {
                $status = "Hubo un error";
                $this->session->getFlashBag()->add("status", $status);
            }

            return $status;
        }
    }

    public function uploadExam($user_id, $id, $unidad_id, $file) {

        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();
        $course_repo = $em->getRepository('AdminBundle:Course');
        $unidad_repo = $em->getRepository('AdminBundle:Unidad');
        $user_repo = $em->getRepository('AdminBundle:User');

        //Con este query evito que se guarde el archivo, si ya existe alguno previamente registrado 
        //con el mismo remitente, curso y unidad.
        $query = $em->createQuery('SELECT m FROM AdminBundle:FileExam m WHERE m.course = :course AND m.unidad = :unidad AND m.remitente = :remitente')
                ->setParameter('course', $id)
                ->setParameter('unidad', $unidad_id)
                ->setParameter('remitente', $user->getId());
        $file_exam_isset = $query->getResult();

        if (count($file_exam_isset) == 0) {
            $exam = new FileExam();

            $exam->setRemitente($user);

            $user_des = $user_repo->find($user_id);
            $exam->setDestinatario($user_des);
            $course = $course_repo->find($id);
            $exam->setCourse($course);
            $unidad = $unidad_repo->find($unidad_id);
            $exam->setUnidad($unidad);

            $ext = $file->guessExtension();
            if ($ext === 'doc' || $ext === 'docx' || $ext === 'pdf') {
                $file_name = time() . "." . $ext;
                $path_of_file = "uploads/file-exam/" . $course->getId() . "/" . $unidad->getId();
                $file->move($path_of_file, $file_name);

                $exam->setFile($file_name);
                $em->persist($exam);
                $em->flush();

                //Mando el correo al destinatario
                //Le mando el remitente = 'user' y el destinatario = 'user_des'
                $status_mail = $this->mailAction($user_des, $user);

                if ($status_mail == true) {
                    $notification = $this->get('app.notification_service');
                    //remitente, destinatario
                    $notification->set($user->getId(), $user_id);
                }

                $status = "Se subio correctamente el archivo";
                return $this->session->getFlashBag()->add("status", $status);
            } else {
                $status = "Extension invalida del archivo";
                return $this->session->getFlashBag()->add("status", $status);
            }
        }
    }

    public function averageUser($id) {

        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        $finish_exam_repo = $em->getRepository('AdminBundle:FinishExam');
        $calificaciones = $finish_exam_repo->findBy(array(
            'user' => $user,
            'course' => $id
        ));

        $suma_calificaciones = 0;
        foreach ($calificaciones as $value) {
            $suma_calificaciones += $value->getScore();
        }

        $average = $suma_calificaciones / count($calificaciones);

        return $average;
    }

    public function mailAction($user_des, $user) {
        $em = $this->getDoctrine()->getManager();

        $user_repo = $em->getRepository('AdminBundle:User');
        $user = $user_repo->find($user);

        $message = \Swift_Message::newInstance()
                ->setSubject('Calificacion de Examen')
                ->setFrom('outbox@capacitando-mexico.org')
                ->setTo($user_des->getEmail())
                ->setBcc('jorgee.serrano91@gmail.com')
                ->setBody($this->renderView('AdminBundle:Mail:mail.html.twig', array('user' => $user)))
                ->setContentType("text/html");
        $this->get('mailer')->send($message);

        return true;
    }

}
