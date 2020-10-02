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
 * Description of AverageController
 *
 * @author Usuario
 */
class AverageController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $inscriptions = $em->getRepository('AdminBundle:Inscription')->findAll();
        
        foreach ($inscriptions as $value) {
            
        }
        $finish_exams = $em->getRepository('AdminBundle:FinishExam')->findAll();
        

        return $this->render("AdminBundle:Average:index.html.twig", array(
                    "inscriptions" => $inscriptions,
                    "finish_exams" => $finish_exams
        ));
    }

}
