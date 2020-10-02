<?php

namespace AdminBundle\Twig;

use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Description of FollowingExtension
 *
 * @author Usuario
 */
class AverageAdminExtension extends \Twig_Extension {

    protected $doctrine;

    public function __construct(RegistryInterface $doctrine) {
        $this->doctrine = $doctrine;
    }

    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('average', array($this, 'averageFilter'))
        );
    }

    public function averageFilter($user, $course) {
        $finish_exam_repo = $this->doctrine->getRepository("AdminBundle:FinishExam");
        $user_id = $this->doctrine->getRepository("AdminBundle:User")->find($user);
        $course_id = $this->doctrine->getRepository("AdminBundle:Course")->find($course);

        $user_finish_exams = $finish_exam_repo->findBy(array(
            "user" => $user_id,
            "course" => $course_id
        ));

        $suma_calificaciones = 0;
        foreach ($user_finish_exams as $value) {
            $suma_calificaciones += $value->getScore();
        }

        //Si el arreglo viene vacio, no hizo ningun examen
        if (empty($user_finish_exams)) {
            $result = "No ha hecho ningun examen";
            return $result;
            //De lo conntario se hace la operacion para sacar el promedio
        } else {
            $promedio = $suma_calificaciones / count($user_finish_exams);
            return $promedio;
        }
    }

    public function getName() {
        return 'average_extension';
    }

}
