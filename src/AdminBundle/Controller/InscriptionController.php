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
use AdminBundle\Entity\Inscription;
use AdminBundle\Form\InscriptionType;

/**
 * Description of InscriptionController
 *
 * @author Usuario
 */
class InscriptionController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $inscriptions = $em->getRepository('AdminBundle:Inscription')->findAll();

        return $this->render("AdminBundle:Inscription:index.html.twig", array(
                    "inscriptions" => $inscriptions
        ));
    }


    public function deleteAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $inscription = $em->getRepository('AdminBundle:Inscription')->find($id);

        $em->remove($inscription);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'La incripcion se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('inscription_index');
        } else {
            $status = 'La inscripcion no se ha borrado';
        }
    }

}
