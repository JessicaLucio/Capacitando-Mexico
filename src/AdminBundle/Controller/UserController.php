<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AdminBundle\Entity\User;
use AdminBundle\Form\RegisterType;
use AdminBundle\Form\ProfileType;

class UserController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function registerAction(Request $request) {
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT u FROM AdminBundle:User u WHERE u.email = :email')
                        ->setParameter('email', $form->get("email")->getData());
                $user_isset = $query->getResult();

                if (count($user_isset) == 0) {

                    $factory = $this->get("security.encoder_factory");
                    $encoder = $factory->getEncoder($user);

                    $password = $encoder->encodePassword($form->get("password")->getData(), $user->getSalt());

                    $user->setPassword($password);
                    $user->setImage(null);
                    $user->setRole('ROLE_USER');

                    $em->persist($user);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Tu registro ha sido exitoso, ahora puedes iniciar sesión.";
                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirect("login");
                    } else {
                        $status = "No te has registrado correctmente";
                    }
                } else {
                    $status = "Ya existe un usuario con ese correo";
                }
            } else {
                $status = "No te has registrado correctamente";
                $this->session->getFlashBag()->add("status", $status);
            }
        }

        return $this->render('AdminBundle:User:register.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    public function profileAction(Request $request) {

        //obtengo el usuario logeado
        $user = $this->getUser();
        $user_image = $user->getImage();
        $form = $this->createForm(ProfileType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT u FROM AdminBundle:User u WHERE u.email = :email OR u.nickname = :nickname')
                        ->setParameter('email', $form->get("email")->getData())
                        ->setParameter('nickname', $form->get("nickname")->getData())
                ;
                $user_isset = $query->getResult();

                if (count($user_isset) == 0 || ($user->getEmail() == $user_isset[0]->getEmail() && $user->getNickName() == $user_isset[0]->getNickName())) {
                    //upload image
                    $file = $form["image"]->getData();
                    if (!empty($file) && $file != null) {
                        $ext = $file->guessExtension();

                        if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {

                            $file_name = $user->getId() . time() . "." . $ext;
                            //Seteo la ruta donde se guardara el archivo
                            $path_of_file = "uploads/users/user_" . $user->getId();
                            //Muevo el archivo a la ruta antes creada
                            $file->move($path_of_file, $file_name);

                            $user->setImage($file_name);
                        }
                    } else {
                        $user->setImage($user_image);
                    }

                    $em->persist($user);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Has modificado tus datos correctamente";
                    } else {
                        $status = "No has modificado tus datos correctamente";
                    }
                } else {
                    $status = "El usuario ya existe";
                }
            } else {
                $status = "No se han actualizado tus datos correctamente";
            }
            $this->session->getFlashBag()->add("status", $status);
            return $this->redirect("profile");
        }

        return $this->render("WebBundle:Profile:profile.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    public function loginAction() {

        //Si es un objeto de usuario, redirige a check_inscription
        if (is_object($this->getUser())) {
            if ($this->getUser()->getRole() == 'ROLE_ADMIN') {
                return $this->redirect('course_index');
            } else {
                return $this->redirect('web_check_inscription');
            }
        }

        $authenticationutils = $this->get("security.authentication_utils");
        $error = $authenticationutils->getLastAuthenticationError();
        $lastUsername = $authenticationutils->getLastUsername();

        return $this->render('AdminBundle:User:login.html.twig', array(
                    "lastUsername" => $lastUsername,
                    "error" => $error
        ));
    }

}
