<?php

namespace AdminBundle\Entity;

/**
 * FinishExamUpload
 */
class FinishExamUpload
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $score;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set score
     *
     * @param string $score
     *
     * @return FinishExamUpload
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }
    /**
     * @var \AdminBundle\Entity\UploadExam
     */
    private $exam;

    /**
     * @var \AdminBundle\Entity\User
     */
    private $user;


    /**
     * Set exam
     *
     * @param \AdminBundle\Entity\UploadExam $exam
     *
     * @return FinishExamUpload
     */
    public function setExam(\AdminBundle\Entity\UploadExam $exam = null)
    {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return \AdminBundle\Entity\UploadExam
     */
    public function getExam()
    {
        return $this->exam;
    }

    /**
     * Set user
     *
     * @param \AdminBundle\Entity\User $user
     *
     * @return FinishExamUpload
     */
    public function setUser(\AdminBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AdminBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
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
     * @return FinishExamUpload
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
    /**
     * @var string
     */
    private $readed;


    /**
     * Set readed
     *
     * @param string $readed
     *
     * @return FinishExamUpload
     */
    public function setReaded($readed)
    {
        $this->readed = $readed;

        return $this;
    }

    /**
     * Get readed
     *
     * @return string
     */
    public function getReaded()
    {
        return $this->readed;
    }
}
