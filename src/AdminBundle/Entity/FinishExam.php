<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FinishExam
 */
class FinishExam {

    /**
     * @var int
     */
    private $id;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @var \AdminBundle\Entity\Exam
     */
    private $exam;

    /**
     * @var \AdminBundle\Entity\User
     */
    private $user;

    /**
     * @var string
     * @ORM\Column(name="score", type="string", length=255, nullable=true)
     */
    private $score;

    /**
     * Set exam
     *
     * @param \AdminBundle\Entity\Exam $exam
     *
     * @return FinishExam
     */
    public function setExam(\AdminBundle\Entity\Exam $exam = null) {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return \AdminBundle\Entity\Exam
     */
    public function getExam() {
        return $this->exam;
    }

    /**
     * Set user
     *
     * @param \AdminBundle\Entity\User $user
     *
     * @return FinishExam
     */
    public function setUser(\AdminBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AdminBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set score
     *
     * @param string $score
     *
     * @return FinishExam
     */
    public function setScore($score) {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getScore() {
        return $this->score;
    }

    /**
     * @var \AdminBundle\Entity\Course
     */
    private $course;


    /**
     * Set course
     *
     * @param \AdminBundle\Entity\Course $course
     *
     * @return FinishExam
     */
    public function setCourse(\AdminBundle\Entity\Course $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \AdminBundle\Entity\Course
     */
    public function getCourse()
    {
        return $this->course;
    }
}
