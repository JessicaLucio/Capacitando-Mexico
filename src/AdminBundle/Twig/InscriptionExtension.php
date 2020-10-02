<?php

namespace AdminBundle\Twig;

use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Description of FollowingExtension
 *
 * @author Usuario
 */
class InscriptionExtension extends \Twig_Extension {

    protected $doctrine;

    public function __construct(RegistryInterface $doctrine) {
        $this->doctrine = $doctrine;
    }

    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('inscription', array($this, 'inscriptionFilter'))
        );
    }

    public function inscriptionFilter($user, $course) {
        $inscription_repo = $this->doctrine->getRepository("AdminBundle:Inscription");
        $user_inscription = $inscription_repo->findOneBy(array(
            "user" => $user,
            "course" => $course
        ));

        if (!empty($user_inscription) && is_object($user_inscription)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function getName() {
        return 'inscription_extension';
    }

}
