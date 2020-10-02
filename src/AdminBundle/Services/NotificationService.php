<?php

/**
 * Description of NotificationService
 *
 * @author Usuario
 */

namespace AdminBundle\Services;

use AdminBundle\Entity\Notification;

class NotificationService {

    public $manager;

    public function __construct($manager) {
        $this->manager = $manager;
    }
    
    //remitente, destinatario
    public function set($user, $user_des) {

        $em = $this->manager;
        
        $notification = new Notification();
        $notification->setRemitente($user);
        $notification->setDestinatario($user_des);
        $notification->setCreated(new \DateTime("now"));
        $notification->setReaded(0);
        $notification->setReadedRemitente(0);

        $em->persist($notification);
        $flush = $em->flush();

        if ($flush != null) {
            $status = true;
        } else {
            $status = false;
        }

        return $status;
    }

    public function read($remitente, $destinatario) {
        $em = $this->manager;

        $notifications_repo = $em->getRepository("AdminBundle:Notification");
        $notifications = $notifications_repo->findBy(array(
            'remitente' => $remitente,
            'destinatario' => $destinatario,
        ));

        foreach ($notifications as $notification) {
            $notification->setReaded(1);
            $em->persist($notification);
        }
        $flush = $em->flush();

        if ($flush == null) {
            return true;
        } else {
            return false;
        }

        return true;
    }

}
