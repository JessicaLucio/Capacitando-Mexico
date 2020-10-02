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
use AdminBundle\Entity\MandatoryReading;
use AdminBundle\Form\MandatoryReadingType;

/**
 * Description of MandatoryReadingController
 *
 * @author Usuario
 */
class MandatoryReadingController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $mandatory_readings = $em->getRepository('AdminBundle:MandatoryReading')->findAll();

        return $this->render("AdminBundle:MandatoryReading:index.html.twig", array(
                    "mandatory_readings" => $mandatory_readings
        ));
    }

    public function addAction(Request $request) {

        $mandatory_reading = new MandatoryReading();
        $form = $this->createForm(MandatoryReadingType::class, $mandatory_reading);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT m FROM AdminBundle:MandatoryReading m WHERE m.name = :name AND m.course = :course AND m.unidad = :unidad')
                        ->setParameter('name', $form->get("name")->getData())
                        ->setParameter('course', $form->get("course")->getData())
                        ->setParameter('unidad', $form->get("unidad")->getData());
                $mandatory_reading_isset = $query->getResult();

                if (count($mandatory_reading_isset) == 0) {

                    $em->persist($mandatory_reading);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Se ha registrado correctamente la lectura obligatoria";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirect("index-mandatory-reading");
                    } else {
                        $status = "No se ha registrado correctamente la lectura obligatoria";
                    }
                } else {
                    $status = "La lectura obligatoria ya existe";
                }
            } else {
                $status = "No se ha registrado correctamente la lectura obligatoria";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:MandatoryReading:add.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function editAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $mandatory_reading = $em->getRepository('AdminBundle:MandatoryReading')->find($id);

        $form = $this->createForm(MandatoryReadingType::class, $mandatory_reading);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em->persist($mandatory_reading);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "Se ha modificado correctamente la lectura obligatoria";

                    $this->session->getFlashBag()->add("status", $status);
                    return $this->redirectToRoute('mandatory_reading_index');
                } else {
                    $status = "No se ha editado correctamente la lectura obligatoria";
                }
            } else {
                $status = "No se ha editado correctamente la lectura obligatoria";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:MandatoryReading:edit.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function deleteAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $mandatory_reading = $em->getRepository('AdminBundle:MandatoryReading')->find($id);

        $em->remove($mandatory_reading);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'La lectura obligatoria se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('mandatory_reading_index');
        } else {
            $status = 'La lectura obligatoria no se ha borrado';
        }
    }

}
