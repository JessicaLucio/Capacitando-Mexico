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
use AdminBundle\Entity\QuestionAdmin;
use AdminBundle\Form\QuestionAdminType;

/**
 * Description of QuestionAdminController
 *
 * @author Usuario
 */
class QuestionController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $questions = $em->getRepository('AdminBundle:QuestionAdmin')->findAll();

        return $this->render("AdminBundle:QuestionAdmin:index.html.twig", array(
                    "questions" => $questions
        ));
    }

    public function addAction(Request $request) {

        $question_admin = new QuestionAdmin();
        $form = $this->createForm(QuestionAdminType::class, $question_admin);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT m FROM AdminBundle:QuestionAdmin m WHERE m.name = :name AND m.exam = :exam')
                        ->setParameter('name', $form->get("name")->getData())
                        ->setParameter('exam', $form->get("exam")->getData());
                $question_admin_isset = $query->getResult();

                if (count($question_admin_isset) == 0) {

                    $em->persist($question_admin);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Se ha registrado correctamente la pregunta";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirect("index-question");
                    } else {
                        $status = "No se ha registrado correctamente la pregunta";
                    }
                } else {
                    $status = "La pregunta ya existe";
                }
            } else {
                $status = "No se ha registrado correctamente la pregunta";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:QuestionAdmin:add.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function editAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $question_admin = $em->getRepository('AdminBundle:QuestionAdmin')->find($id);

        $form = $this->createForm(QuestionAdminType::class, $question_admin);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em->persist($question_admin);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "Se ha modificado correctamente la pregunta";

                    $this->session->getFlashBag()->add("status", $status);
                    return $this->redirectToRoute('question_index');
                } else {
                    $status = "No se ha editado correctamente la pregunta";
                }
            } else {
                $status = "No se ha editado correctamente la pregunta";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:QuestionAdmin:edit.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function deleteAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $question_admin = $em->getRepository('AdminBundle:QuestionAdmin')->find($id);

        $em->remove($question_admin);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'La pregunta se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('exam_index');
        } else {
            $status = 'La pregunta no se ha borrado';
        }
    }

}
