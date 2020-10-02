<?php

namespace AdminBundle\Entity;

/**
 * QuestionAdmin
 */
class QuestionAdmin {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $numberquestion;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return QuestionAdmin
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @var \AdminBundle\Entity\Exam
     */
    private $exam;

    /**
     * Set exam
     *
     * @param \AdminBundle\Entity\Exam $exam
     *
     * @return QuestionAdmin
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
     * Set numberquestion
     *
     * @param string $numberquestion
     *
     * @return QuestionAdmin
     */
    public function setNumberquestion($numberquestion) {
        $this->numberquestion = $numberquestion;

        return $this;
    }

    /**
     * Get numberquestion
     *
     * @return string
     */
    public function getNumberquestion() {
        return $this->numberquestion;
    }

}
