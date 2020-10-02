<?php

namespace AdminBundle\Entity;

/**
 * Unidad
 */
class Unidad
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;
    
    
    /**
     * @var \BackendBundle\Entity\Course
     */
    private $course;
    
    public function __toString() {
        return $this->getName();
    }


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
     * Set name
     *
     * @param string $name
     *
     * @return Unidad
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

    /**
     * Set course
     *
     * @param \AdminBundle\Entity\Course $course
     *
     * @return Unidad
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
