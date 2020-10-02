<?php

namespace AdminBundle\Entity;

/**
 * UploadExam
 */
class UploadExam
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
     * @return UploadExam
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
     * @var \AdminBundle\Entity\Course
     */
    private $course;

    /**
     * @var \AdminBundle\Entity\Unidad
     */
    private $unidad;


    /**
     * Set course
     *
     * @param \AdminBundle\Entity\Course $course
     *
     * @return UploadExam
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
     * @return UploadExam
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
}
