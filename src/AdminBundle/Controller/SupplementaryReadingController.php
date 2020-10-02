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
use AdminBundle\Entity\SupplementaryReading;
use AdminBundle\Form\SupplementaryReadingType;

/**
 * Description of SupplementaryReadingController
 *
 * @author Usuario
 */
class SupplementaryReadingController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $supplementary_readings = $em->getRepository('AdminBundle:SupplementaryReading')->findAll();

        return $this->render("AdminBundle:SupplementaryReading:index.html.twig", array(
                    "supplementary_readings" => $supplementary_readings
        ));
    }

    public function addAction(Request $request) {

        $supplementary_reading = new SupplementaryReading();
        $form = $this->createForm(SupplementaryReadingType::class, $supplementary_reading);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT m FROM AdminBundle:SupplementaryReading m WHERE m.name = :name AND m.course = :course AND m.unidad = :unidad')
                        ->setParameter('name', $form->get("name")->getData())
                        ->setParameter('course', $form->get("course")->getData())
                        ->setParameter('unidad', $form->get("unidad")->getData());
                $supplementary_reading_isset = $query->getResult();

                if (count($supplementary_reading_isset) == 0) {

                    $em->persist($supplementary_reading);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Se ha registrado correctamente la fuente de consulta";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirect("index-supplementary-reading");
                    } else {
                        $status = "No se ha registrado correctamente la fuente de consulta";
                    }
                } else {
                    $status = "La fuente de consulta ya existe";
                }
            } else {
                $status = "No se ha registrado correctamente la materia";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:SupplementaryReading:add.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function editAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $supplementary_reading = $em->getRepository('AdminBundle:SupplementaryReading')->find($id);

        $form = $this->createForm(SupplementaryReadingType::class, $supplementary_reading);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em->persist($supplementary_reading);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "Se ha modificado correctamente la fuente de consulta";

                    $this->session->getFlashBag()->add("status", $status);
                    return $this->redirectToRoute('supplementary_reading_index');
                } else {
                    $status = "No se ha editado correctamente la fuente de consulta";
                }
            } else {
                $status = "No se ha editado correctamente la fuente de consulta";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:SupplementaryReading:edit.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function deleteAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $supplementary_reading = $em->getRepository('AdminBundle:SupplementaryReading')->find($id);

        $em->remove($supplementary_reading);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'La fuente de consulta se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('supplementary_reading_index');
        } else {
            $status = 'La fuente de consulta no se ha borrado';
        }
    }

}
