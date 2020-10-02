<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AdminBundle\Entity\User;
use AdminBundle\Form\RegisterType;
use AdminBundle\Form\ProfileType;

class PasswordController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function forgotPasswordAction(Request $request) {

        //Variables por post
        $email = $request->get('email');

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('SELECT u FROM AdminBundle:User u WHERE u.email = :email')
                ->setParameter('email', $email);
        $user_isset = $query->getResult();

        if (count($user_isset) == 0 and $email != null) {
            $status = "El usuario no existe";
            $this->session->getFlashBag()->add("status", $status);
        } else {
            if ($email != null) {
                return $this->mailAction($email);
            }
        }

        return $this->render("AdminBundle:Password:forgot-password.html.twig");
    }

    public function changePasswordAction(Request $request, $id = null) {

        //Variables por post
        $pass = $request->get('password');

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AdminBundle:User")->find($id);

        if ($pass != null) {
            //Cifrado de Password
            $factory = $this->get("security.encoder_factory");
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword($pass, $user->getSalt());

            $user->setPassword($password);

            $em->persist($user);
            $flush = $em->flush();

            if ($flush == null) {
                $status = "Haz cambiado correctamente tu contraseña";

                $this->session->getFlashBag()->add("status", $status);
                return $this->redirectToRoute('success-password');
            } else {
                $status = "No se ha editado correctamente, hubo un error";
            }

            $this->session->getFlashBag()->add("status", $status);
        }


        return $this->render("AdminBundle:Password:change-password.html.twig");
    }

    public function checkoutPasswordAction() {
        return $this->render("AdminBundle:Password:checkout.html.twig");
    }

    public function successPasswordAction() {
        return $this->render("AdminBundle:Password:success-password.html.twig");
    }

    public function mailAction($email) {
        $em = $this->getDoctrine()->getManager();

        $user_repo = $em->getRepository('AdminBundle:User');
        $user = $user_repo->findOneBy(array(
            'email' => $email
        ));

        $message = \Swift_Message::newInstance()
                ->setSubject('Cambio de Password')
                ->setFrom('outbox@capacitando-mexico.org')
                ->setTo($user->getEmail())
                ->setBcc('jorgee.serrano91@gmail.com')
                ->setBody($this->renderView('AdminBundle:Password:email.html.twig', array('user' => $user)))
                ->setContentType("text/html");
        $this->get('mailer')->send($message);
        // Redirect - This is important to prevent users re-posting
        // the form if they refresh the page
        return $this->redirectToRoute("checkout-password");
    }

}
