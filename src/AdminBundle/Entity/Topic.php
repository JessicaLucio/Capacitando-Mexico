<?php

namespace AdminBundle\Entity;

/**
 * Topic
 */
class Topic
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
     * @var string
     */
    private $body;
    
    /**
     * @var \BackendBundle\Entity\Course
     */
    private $course;
    
    /**
     * @var \BackendBundle\Entity\Unidad
     */
    private $unidad;


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
     * @return Topic
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
     * Set body
     *
     * @param string $body
     *
     * @return Topic
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
     * @return Topic
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
     * Set unidad
     *
     * @param \AdminBundle\Entity\Unidad $unidad
     *
     * @return Topic
     */
    public function setUnidad(\AdminBundle\Entity\Unidad $unidad = null)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return \AdminBundle\Entity\Unidad
     */
    public function getUnidad()
    {
        return $this->unidad;
    }
    public function __toString() {
        return $this->getName();
    }
}
