<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AdminBundle\Entity\FinishExam;
use AdminBundle\Entity\FileExam;
use AdminBundle\Entity\FinishExamUpload;

class DetailScoreFileExamController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction(Request $request, $id = null) {

        if (!$this->getUser()) {
            return $this->redirect($this->generateUrl('admin_login'));
        }

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('AdminBundle:FinishExamUpload');
        $examen = $repo->findOneBy(array(
            'user' => $id
        ));



        if($id != null && is_object($examen)){

            $examen->setReaded(1);
            $em->persist($examen);
            $flush = $em->flush();
        }

        return $this->render('WebBundle:DetailScoreFileExam:index.html.twig', array(
                    'examen' => $examen
        ));
    }

}
