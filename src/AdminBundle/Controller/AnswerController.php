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
use AdminBundle\Entity\AnswerAdmin;
use AdminBundle\Form\AnswerAdminType;

/**
 * Description of AnswerAdminController
 *
 * @author Usuario
 */
class AnswerController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $answers = $em->getRepository('AdminBundle:AnswerAdmin')->findAll();

        return $this->render("AdminBundle:AnswerAdmin:index.html.twig", array(
                    "answers" => $answers
        ));
    }

    public function addAction(Request $request) {

        $answer_admin = new AnswerAdmin();
        $form = $this->createForm(AnswerAdminType::class, $answer_admin);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT m FROM AdminBundle:AnswerAdmin m WHERE m.name = :name AND m.question_admin = :question')
                        ->setParameter('name', $form->get("name")->getData())
                        ->setParameter('question', $form->get("questionAdmin")->getData());
                $answer_admin_isset = $query->getResult();

                if (count($answer_admin_isset) == 0) {

                    $em->persist($answer_admin);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Se ha registrado correctamente la respuesta";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirect("index-answer");
                    } else {
                        $status = "No se ha registrado correctamente la respuesta";
                    }
                } else {
                    $status = "La respuesta ya existe";
                }
            } else {
                $status = "No se ha registrado correctamente la respuesta";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:AnswerAdmin:add.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function editAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $answer_admin = $em->getRepository('AdminBundle:AnswerAdmin')->find($id);

        $form = $this->createForm(AnswerAdminType::class, $answer_admin);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em->persist($answer_admin);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "Se ha modificado correctamente la respuesta";

                    $this->session->getFlashBag()->add("status", $status);
                    return $this->redirectToRoute('answer_index');
                } else {
                    $status = "No se ha editado correctamente la respuesta";
                }
            } else {
                $status = "No se ha editado correctamente la respuesta";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:AnswerAdmin:edit.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function deleteAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $answer_admin = $em->getRepository('AdminBundle:AnswerAdmin')->find($id);

        $em->remove($answer_admin);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'La respuesta se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('answer_index');
        } else {
            $status = 'La respuesta no se ha borrado';
        }
    }

}
