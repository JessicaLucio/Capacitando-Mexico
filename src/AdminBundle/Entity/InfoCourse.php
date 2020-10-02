<?php

namespace AdminBundle\Entity;

/**
 * InfoCourse
 */
class InfoCourse
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $body;
    
    /**
     * @var \BackendBundle\Entity\Course
     */
    private $course;


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
     * Set body
     *
     * @param string $body
     *
     * @return InfoCourse
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set course
     *
     * @param \AdminBundle\Entity\Course $course
     *
     * @return InfoCourse
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
