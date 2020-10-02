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
use AdminBundle\Entity\InfoCourse;
use AdminBundle\Form\InfoCourseType;

/**
 * Description of InfoCourseController
 *
 * @author Usuario
 */
class InfoCourseController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $info_courses = $em->getRepository('AdminBundle:InfoCourse')->findAll();

        return $this->render("AdminBundle:InfoCourse:index.html.twig", array(
                    "info_courses" => $info_courses
        ));
    }

    public function addAction(Request $request) {

        $topic = new InfoCourse();
        $form = $this->createForm(InfoCourseType::class, $topic);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT m FROM AdminBundle:InfoCourse m WHERE m.course = :course')
                        ->setParameter('course', $form->get("course")->getData());
                        
                $info_course_isset = $query->getResult();

                if (count($info_course_isset) == 0) {

                    $em->persist($topic);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Se ha registrado correctamente la informacion para el curso";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirectToRoute('info_course_index');
                    } else {
                        $status = "No se ha registrado correctamente la informacion para el curso";
                    }
                } else {
                    $status = "Ya existe informacion para este curso";
                }
            } else {
                $status = "No se ha registrado correctamente la informacion para el curso";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:InfoCourse:add.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function editAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $topic = $em->getRepository('AdminBundle:InfoCourse')->find($id);

        $form = $this->createForm(InfoCourseType::class, $topic);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em->persist($topic);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "Se ha modificado correctamente el tema";

                    $this->session->getFlashBag()->add("status", $status);
                    return $this->redirectToRoute('info_course_index');
                } else {
                    $status = "No se ha editado correctamente el tema";
                }
            } else {
                $status = "No se ha editado correctamente el tema";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:InfoCourse:edit.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function deleteAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $topic = $em->getRepository('AdminBundle:InfoCourse')->find($id);

        $em->remove($topic);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'La informacion del curso se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('info_course_index');
        } else {
            $status = 'El tema no se ha borrado';
        }
    }

}
