<?php

namespace AdminBundle\Entity;

/**
 * SupplementaryReading
 */
class SupplementaryReading
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
    private $url;
    
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
     * @return SupplementaryReading
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
     * Set url
     *
     * @param string $url
     *
     * @return SupplementaryReading
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set course
     *
     * @param \AdminBundle\Entity\Course $course
     *
     * @return SupplementaryReading
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
     * @return SupplementaryReading
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
