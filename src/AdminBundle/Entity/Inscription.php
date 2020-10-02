<?php

namespace AdminBundle\Entity;

/**
 * Inscription
 */
class Inscription
{
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var \AdminBundle\Entity\Course
     */
    private $course;

    /**
     * @var \AdminBundle\Entity\User
     */
    private $user;


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
     * Set course
     *
     * @param \AdminBundle\Entity\Course $course
     *
     * @return Inscription
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
     * Set user
     *
     * @param \AdminBundle\Entity\User $user
     *
     * @return Inscription
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
}
