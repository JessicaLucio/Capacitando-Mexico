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
use AdminBundle\Entity\Unidad;
use AdminBundle\Form\UnidadType;

/**
 * Description of UnidadController
 *
 * @author Usuario
 */
class UnidadController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $unidades = $em->getRepository('AdminBundle:Unidad')->findAll();

        return $this->render("AdminBundle:Unidad:index.html.twig", array(
                    "unidades" => $unidades
        ));
    }

    public function addAction(Request $request) {

        $unidad = new Unidad();
        $form = $this->createForm(UnidadType::class, $unidad);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT m FROM AdminBundle:Unidad m WHERE m.name = :name AND m.course = :course')
                        ->setParameter('name', $form->get("name")->getData())
                        ->setParameter('course', $form->get("course")->getData());
                $unidad_isset = $query->getResult();

                if (count($unidad_isset) == 0) {

                    $em->persist($unidad);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Se ha registrado correctamente el unidad";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirect("index-unidad");
                    } else {
                        $status = "No se ha registrado correctamente el unidad";
                    }
                } else {
                    $status = "El unidad ya existe";
                }
            } else {
                $status = "No se ha registrado correctamente la materia";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:Unidad:add.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function editAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $unidad = $em->getRepository('AdminBundle:Unidad')->find($id);

        $form = $this->createForm(UnidadType::class, $unidad);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em->persist($unidad);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "Se ha modificado correctamente el unidad";

                    $this->session->getFlashBag()->add("status", $status);
                    return $this->redirectToRoute('unidad_index');
                } else {
                    $status = "No se ha editado correctamente el unidad";
                }
            } else {
                $status = "No se ha editado correctamente el unidad";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render("AdminBundle:Unidad:edit.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function deleteAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $unidad = $em->getRepository('AdminBundle:Unidad')->find($id);

        $em->remove($unidad);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'El unidad se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('unidad_index');
        } else {
            $status = 'El unidad no se ha borrado';
        }
    }

}
