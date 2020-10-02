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
use AdminBundle\Entity\Exam;
use AdminBundle\Form\ExamType;

/**
 * Description of ExamController
 *
 * @author Usuario
 */
class ExamController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $exams = $em->getRepository('AdminBundle:Exam')->findAll();

        return $this->render("AdminBundle:Exam:index.html.twig", array(
                    "exams" => $exams
        ));
    }

    public function addAction(Request $request) {

        $exam = new Exam();
        $form = $this->createForm(ExamType::class, $exam);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT m FROM AdminBundle:Exam m WHERE m.name = :name AND m.unidad = :unidad')
                        ->setParameter('name', $form->get("name")->getData())
                        ->setParameter('unidad', $form->get("unidad")->getData());
                $exam_isset = $query->getResult();

                if (count($exam_isset) == 0) {

                    $em->persist($exam);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Se ha registrado correctamente el examen";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirect("index-exam");
                    } else {
                        $status = "No se ha registrado correctamente el examen";
                    }
                } else {
                    $status = "El examen ya existe";
                }
            } else {
                $status = "No se ha registrado correctamente el examen";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:Exam:add.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function editAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $exam = $em->getRepository('AdminBundle:Exam')->find($id);

        $form = $this->createForm(ExamType::class, $exam);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em->persist($exam);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "Se ha modificado correctamente el examen";

                    $this->session->getFlashBag()->add("status", $status);
                    return $this->redirectToRoute('exam_index');
                } else {
                    $status = "No se ha editado correctamente el examen";
                }
            } else {
                $status = "No se ha editado correctamente el examen";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:Exam:edit.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function deleteAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $exam = $em->getRepository('AdminBundle:Exam')->find($id);

        $em->remove($exam);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'El examen se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('exam_index');
        } else {
            $status = 'El examen no se ha borrado';
        }
    }

}
