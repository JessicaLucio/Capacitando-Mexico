<?php

namespace AdminBundle\Twig;

use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Description of FollowingExtension
 *
 * @author Usuario
 */
class FinishExamExtension extends \Twig_Extension {

    protected $doctrine;

    public function __construct(RegistryInterface $doctrine) {
        $this->doctrine = $doctrine;
    }

    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('finish', array($this, 'finishFilter'))
        );
    }

    public function finishFilter($user, $exam) {
        $finish_exam_repo = $this->doctrine->getRepository("AdminBundle:FinishExam");
        $user_finish_exam = $finish_exam_repo->findOneBy(array(
            "user" => $user,
            "exam" => $exam
        ));

        if (!empty($user_finish_exam) && is_object($user_finish_exam)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function getName() {
        return 'finish_extension';
    }

}
