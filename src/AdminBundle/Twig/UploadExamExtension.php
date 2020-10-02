<?php

namespace AdminBundle\Twig;

use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Description of FollowingExtension
 *
 * @author Usuario
 */
class UploadExamExtension extends \Twig_Extension {

    protected $doctrine;

    public function __construct(RegistryInterface $doctrine) {
        $this->doctrine = $doctrine;
    }

    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('upload', array($this, 'uploadFilter'))
        );
    }

    public function uploadFilter($user, $course, $unidad) {
        $file_exam_repo = $this->doctrine->getRepository("AdminBundle:FileExam");
        $user_file_exam = $file_exam_repo->findOneBy(array(
            "course" => $course,
            "unidad" => $unidad,
            "remitente" => $user
        ));

        if (!empty($user_file_exam) && is_object($user_file_exam)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function getName() {
        return 'upload_extension';
    }

}
