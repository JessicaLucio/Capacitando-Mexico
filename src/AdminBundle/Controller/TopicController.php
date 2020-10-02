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
use AdminBundle\Entity\Topic;
use AdminBundle\Form\TopicType;

/**
 * Description of TopicController
 *
 * @author Usuario
 */
class TopicController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $topics = $em->getRepository('AdminBundle:Topic')->findAll();

        return $this->render("AdminBundle:Topic:index.html.twig", array(
                    "topics" => $topics
        ));
    }

    public function addAction(Request $request) {

        $topic = new Topic();
        $form = $this->createForm(TopicType::class, $topic);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT m FROM AdminBundle:Topic m WHERE m.name = :name AND m.course = :course AND m.unidad = :unidad')
                        ->setParameter('name', $form->get("name")->getData())
                        ->setParameter('course', $form->get("course")->getData())
                        ->setParameter('unidad', $form->get("unidad")->getData());
                $topic_isset = $query->getResult();

                if (count($topic_isset) == 0) {

                    $em->persist($topic);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Se ha registrado correctamente el tema";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirect("index-topic");
                    } else {
                        $status = "No se ha registrado correctamente el tema";
                    }
                } else {
                    $status = "El tema ya existe";
                }
            } else {
                $status = "No se ha registrado correctamente la materia";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:Topic:add.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function editAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $topic = $em->getRepository('AdminBundle:Topic')->find($id);

        $form = $this->createForm(TopicType::class, $topic);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em->persist($topic);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "Se ha modificado correctamente el tema";

                    $this->session->getFlashBag()->add("status", $status);
                    return $this->redirectToRoute('topic_index');
                } else {
                    $status = "No se ha editado correctamente el tema";
                }
            } else {
                $status = "No se ha editado correctamente el tema";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:Topic:edit.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function deleteAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $topic = $em->getRepository('AdminBundle:Topic')->find($id);

        $em->remove($topic);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'El tema se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('topic_index');
        } else {
            $status = 'El tema no se ha borrado';
        }
    }

}
