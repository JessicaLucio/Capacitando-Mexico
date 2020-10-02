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
use AdminBundle\Entity\Course;
use AdminBundle\Form\CourseType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of CourseController
 *
 * @author Usuario
 */
class CourseController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository('AdminBundle:Course')->findAll();

        return $this->render("AdminBundle:Course:index.html.twig", array(
                    "courses" => $courses
        ));
    }

    public function addAction(Request $request) {

        $name_course = $request->get('name');
        $categoria_id = $request->get('categoria');
        $file = $request->files->get('image');

        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('AdminBundle:CategoryCourse')->findAll();
        $categories_repo = $em->getRepository('AdminBundle:CategoryCourse');


        if ($name_course != null && $categoria_id && $file != null) {

            $em = $this->getDoctrine()->getManager();

            $query = $em->createQuery('SELECT m FROM AdminBundle:Course m WHERE m.name = :name AND m.categoryCourse = :category')
                    ->setParameter('name', $name_course)
                    ->setParameter('category', $categoria_id);
            $course_isset = $query->getResult();

            if (count($course_isset) == 0) {

                //Si la variable 'file' no esta vacia y 'file' no es NULL, entonces
                if (!empty($file) && $file != null) {

                    //Obtengo la extension del archivo
                    $ext = $file->guessExtension();

                    //Si la extension es jpg, jpeg o png, entonces...
                    if ($ext === 'jpeg' || $ext == "jpg" || $ext == "png") {

                        //Creo una variable, con el tiempo actual, agregandole la extension del archivo
                        $file_name = time() . "." . $ext;
                        //Seteo la ruta donde se guardara el archivo
                        $path_of_file = "uploads/" . $name_course;
                        //Muevo el archivo a la ruta antes creada
                        $file->move($path_of_file, $file_name);

                        //Actualizo la tabla Tienda
                        $course = new Course();

                        $course->setName($name_course);
                        $category = $categories_repo->find($categoria_id);
                        $course->setCategoryCourse($category);
                        $course->setImage($file_name);
                        $em->persist($course);
                        $flush = $em->flush();

                        if ($flush == null) {
                            $status = "Se ha registrado correctamente el curso";

                            $this->session->getFlashBag()->add("status", $status);
                            return $this->redirect("index-course");
                        } else {
                            $status = "No se ha registrado correctamente el curso";
                        }
                    } else {
                        $status = "Formato invalido para el archivo";
                        $this->session->getFlashBag()->add("status", $status);
                    }
                }
            } else {
                $status = "El curso ya existe";
                $this->session->getFlashBag()->add("status", $status);
            }
        }



        return $this->render("AdminBundle:Course:add.html.twig", array(
                    "categories" => $categories
        ));
    }

    public function editAction(Request $request, $id = null) {

        $name_course = $request->get('name');
        $categoria_id = $request->get('categoria');
        $file = $request->files->get('image');

        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('AdminBundle:CategoryCourse')->findAll();
        $categories_repo = $em->getRepository('AdminBundle:CategoryCourse');

        $course = $em->getRepository('AdminBundle:Course')->find($id);

        if ($name_course != null && $categoria_id != null && $file != null) {

            $em = $this->getDoctrine()->getManager();

            //Si la variable 'file' no esta vacia y 'file' no es NULL, entonces
            if (!empty($file) && $file != null) {

                //Obtengo la extension del archivo
                $ext = $file->guessExtension();

                //Si la extension es jpg, jpeg o png, entonces...
                if ($ext === 'jpeg' || $ext == "jpg" || $ext == "png") {

                    //Creo una variable, con el tiempo actual, agregandole la extension del archivo
                    $file_name = time() . "." . $ext;
                    //Seteo la ruta donde se guardara el archivo
                    $path_of_file = "uploads/" . $name_course;
                    //Muevo el archivo a la ruta antes creada
                    $file->move($path_of_file, $file_name);

                    //Actualizo la tabla Tienda

                    $course->setName($name_course);
                    $category = $categories_repo->find($categoria_id);
                    $course->setCategoryCourse($category);
                    $course->setImage($file_name);
                    $em->persist($course);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Se ha registrado correctamente el curso";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirectToRoute('course_index');
                    } else {
                        $status = "No se ha registrado correctamente el curso";
                    }
                } else {
                    $status = "Formato invalido para el archivo";
                    $this->session->getFlashBag()->add("status", $status);
                }
            }
        }


        return $this->render("AdminBundle:Course:edit.html.twig", array(
                    "categories" => $categories,
                    "course" => $course
        ));
    }

    public function deleteAction(Request $request, $id = null) {

        $em = $this->getDoctrine()->getManager();
        $course = $em->getRepository('AdminBundle:Course')->find($id);

        $em->remove($course);
        $flush = $em->flush();

        if ($flush == null) {
            $status = 'El curso se ha borrado correctamente';
            $this->session->getFlashBag()->add("status", $status);

            return $this->redirectToRoute('course_index');
        } else {
            $status = 'El curso no se ha borrado';
        }
    }

}
