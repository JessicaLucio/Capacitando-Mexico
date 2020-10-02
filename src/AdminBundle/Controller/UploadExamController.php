<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AdminBundle\Entity\UploadExam;
use AdminBundle\Form\UploadExamType;

/**
 * Description of UploadExamController
 *
 * @author Usuario
 */
class UploadExamController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $exams = $em->getRepository('AdminBundle:UploadExam')->findAll();

        return $this->render("AdminBundle:UploadExam:index.html.twig", array(
                    "exams" => $exams
        ));
    }

    public function addAction(Request $request) {

        $topic = new UploadExam();
        $form = $this->createForm(UploadExamType::class, $topic);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT m FROM AdminBundle:UploadExam m WHERE m.name = :name AND m.course = :course AND m.unidad = :unidad')
                        ->setParameter('name', $form->get("name")->getData())
                        ->setParameter('course', $form->get("course")->getData())
                        ->setParameter('unidad', $form->get("unidad")->getData());
                $topic_isset = $query->getResult();

                if (count($topic_isset) == 0) {

                    $em->persist($topic);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Se ha registrado correctamente el exam";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirect("index-upload-exam");
                    } else {
                        $status = "No se ha registrado correctamente el examen";
                    }
                } else {
                    $status = "El examen ya existe";
                }
            } else {
                $status = "No se ha registrado correctamente el exam";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:UploadExam:add.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function editAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $exam = $em->getRepository('AdminBundle:UploadExam')->find($id);

        $form = $this->createForm(UploadExamType::class, $exam);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em->persist($exam);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "Se ha modificado correctamente el examen";

                    $this->session->getFlashBag()->add("status", $status);
                    return $this->redirectToRoute('upload_exam_index');
                } else {
                    $status = "No se ha editado correctamente el examen";
                }
            } else {
                $status = "No se ha editado correctamente el examen";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:UploadExam:edit.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function deleteAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $exam = $em->getRepository('AdminBundle:UploadExam')->find($id);

        $em->remove($exam);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'El examen se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('upload_exam_index');
        } else {
            $status = 'El examen no se ha borrado';
        }
    }

}
