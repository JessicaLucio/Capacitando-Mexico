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
use AdminBundle\Entity\File;
use Symfony\Component\HttpFoundation\Response;

class FileController extends Controller
{

    private $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $files = $em->getRepository("AdminBundle:File")->findAll();

        return $this->render('AdminBundle:File:index.html.twig', array(
            'files' => $files
        ));
    }

    public function addAction(Request $request)
    {

        //Variables por post
        $name = $request->get('name');
        $course_id = $request->get('cursos');
        $unidad_id = $request->get('unidades');
        $tema_id = $request->get('temas');
        $file_post = $request->files->get('file');
        $logotipo = $request->get('logotipo');


        $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository("AdminBundle:Course")->findAll();

        if ($name != null && $course_id != null && $unidad_id != null && $tema_id != null && $file_post != null) {

            $course_repo = $em->getRepository("AdminBundle:Course");
            $course = $course_repo->find($course_id);
            $unidad_repo = $em->getRepository("AdminBundle:Unidad");
            $unidad = $unidad_repo->find($unidad_id);
            $topic_repo = $em->getRepository("AdminBundle:Topic");
            $topic = $topic_repo->find($tema_id);

            $file = new File();

            $file->setName($name);
            $file->setCourse($course);
            $file->setUnidad($unidad);
            $file->setTopic($topic);

            if ($logotipo != null) {
                $file->setLogotipo(1);
            } else {
                $file->setLogotipo(0);
            }

            if (!empty($file_post) && $file_post != null) {

                $ext = $file_post->guessExtension();
                if ($ext === 'jpeg' || $ext == "jpg" || $ext == "png") {
                    $file_name = $name . "." . $ext;
                    $path_of_file = "uploads/files/" . $course->getId() . "/" . $unidad->getId() . "/" . $topic->getId();
                    $file_post->move($path_of_file, $file_name);

                    $file->setFile($file_name);
                    $em->persist($file);
                    $em->flush();

                    $status = "Se registro correctamente el archivo";
                    $this->session->getFlashBag()->add("status", $status);

                    return $this->redirect('file');
                } else {
                    $status = "Formato invalido para el archivo";
                    $this->session->getFlashBag()->add("status", $status);
                }
            } else {
                $file->setFile(null);
                $em->persist($file);
                $em->flush();
            }
        }


        return $this->render("AdminBundle:File:add.html.twig", array(
            "courses" => $courses
        ));
    }

    public function editAction(Request $request, $id = null)
    {

        //Variables por post
        $name = $request->get('name');
        $course_id = $request->get('cursos');
        $unidad_id = $request->get('unidades');
        $tema_id = $request->get('temas');
        $file_post = $request->files->get('file');
        $logotipo = $request->get('logotipo');

        $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository("AdminBundle:Course")->findAll();
        $file = $em->getRepository('AdminBundle:File')->find($id);

        if ($name != null && $course_id != null && $unidad_id != null && $tema_id != null && $file_post != null) {

            $course_repo = $em->getRepository("AdminBundle:Course");
            $course = $course_repo->find($course_id);
            $unidad_repo = $em->getRepository("AdminBundle:Unidad");
            $unidad = $unidad_repo->find($unidad_id);
            $topic_repo = $em->getRepository("AdminBundle:Topic");
            $topic = $topic_repo->find($tema_id);

            $file->setName($name);
            $file->setCourse($course);
            $file->setUnidad($unidad);
            $file->setTopic($topic);

            if ($logotipo != null) {
                $file->setLogotipo(1);
            } else {
                $file->setLogotipo(0);
            }

            if (!empty($file_post) && $file_post != null) {

                $ext = $file_post->guessExtension();
                if ($ext === 'jpeg' || $ext == "jpg" || $ext == "png") {
                    $file_name = $name . "." . $ext;
                    $path_of_file = "uploads/files/" . $course->getId() . "/" . $unidad->getId() . "/" . $topic->getId();
                    $file_post->move($path_of_file, $file_name);

                    $file->setFile($file_name);
                    $em->persist($file);
                    $em->flush();

                    $status = "Se registro correctamente el archivo";
                    $this->session->getFlashBag()->add("status", $status);

                    return $this->redirectToRoute('files_index');
                } else {
                    $status = "Formato invalido para el archivo";
                    $this->session->getFlashBag()->add("status", $status);
                }
            } else {
                $file->setFile(null);
                $em->persist($file);
                $em->flush();
            }
        }

        return $this->render("AdminBundle:File:edit.html.twig", array(
            'file' => $file,
            'courses' => $courses
        ));
    }

    public function deleteAction(Request $request, $id = null)
    {

        $em = $this->getDoctrine()->getManager();
        $file = $em->getRepository('AdminBundle:File')->find($id);

        $em->remove($file);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'La archivo se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('files_index');
        } else {
            $status = 'La archivo no se ha borrado';
        }
    }

    public function unidadAction(Request $request)
    {
        $course_id = $request->request->get('course_id');
        $em = $this->getDoctrine()->getManager();
        $unidades = $em->getRepository('AdminBundle:Unidad')->findBy(array(
            "course" => $course_id
        ));

        $unidades_array = array();
        foreach ($unidades as $unidad) {
            $unidades_array[] = array(
                'id' => $unidad->getId(),
                'name' => $unidad->getName(),
            );
        }

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode($unidades_array));
        //Enviar la info al DATATABLE, ASI...
//        $response->setContent(json_encode(array('data' => $unidades_array)));

        return $response;
    }

    public function topicAction(Request $request)
    {
        $unidad_id = $request->request->get('unidad_id');
        $em = $this->getDoctrine()->getManager();
        $topics = $em->getRepository('AdminBundle:Topic')->findBy(array(
            "unidad" => $unidad_id
        ));

        $output = array();
        foreach ($topics as $topic) {
            $output[] = array(
                'id' => $topic->getId(),
                'name' => $topic->getName(),
            );
        }

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent(json_encode($output));

        return $response;
    }

}
