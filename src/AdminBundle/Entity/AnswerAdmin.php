<?php

namespace AdminBundle\Entity;

/**
 * AnswerAdmin
 */
class AnswerAdmin
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var boolean
     */
    private $answer;
    
    /**
     * @var string
     */
    private $name;
    
    /**
     * @var \AdminBundle\Entity\QuestionAdmin
     */
    private $question_admin;


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
     * Set answer
     *
     * @param string $answer
     *
     * @return AnswerAdmin
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }
    

    /**
     * Set questionAdmin
     *
     * @param \AdminBundle\Entity\QuestionAdmin $questionAdmin
     *
     * @return AnswerAdmin
     */
    public function setQuestionAdmin(\AdminBundle\Entity\QuestionAdmin $questionAdmin = null)
    {
        $this->question_admin = $questionAdmin;

        return $this;
    }

    /**
     * Get questionAdmin
     *
     * @return \AdminBundle\Entity\QuestionAdmin
     */
    public function getQuestionAdmin()
    {
        return $this->question_admin;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return AnswerAdmin
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
