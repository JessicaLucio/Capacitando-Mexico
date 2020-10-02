<?php

namespace AdminBundle\Entity;

/**
 * File
 */
class File {

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
    private $file;

    /**
     * @var \AdminBundle\Entity\Course
     */
    private $course;

    /**
     * @var \AdminBundle\Entity\Unidad
     */
    private $unidad;
    
    /**
     * @var \AdminBundle\Entity\Topic
     */
    private $topic;

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
     * @return File
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
     * Set file
     *
     * @param string $file
     *
     * @return File
     */
    public function setFile($file) {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile() {
        return $this->file;
    }

    /**
     * Set course
     *
     * @param \AdminBundle\Entity\Course $course
     *
     * @return File
     */
    public function setCourse(\AdminBundle\Entity\Course $course = null) {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \AdminBundle\Entity\Course
     */
    public function getCourse() {
        return $this->course;
    }

    /**
     * Set unidad
     *
     * @param \AdminBundle\Entity\Unidad $unidad
     *
     * @return File
     */
    public function setUnidad(\AdminBundle\Entity\Unidad $unidad = null) {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return \AdminBundle\Entity\Unidad
     */
    public function getUnidad() {
        return $this->unidad;
    }
    
    /**
     * Set topic
     *
     * @param \AdminBundle\Entity\Topic $topic
     *
     * @return File
     */
    public function setTopic(\AdminBundle\Entity\Topic $topic = null) {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \AdminBundle\Entity\Topic
     */
    public function getTopic() {
        return $this->topic;
    }

    /**
     * @var boolean
     */
    private $logotipo;


    /**
     * Set logotipo
     *
     * @param boolean $logotipo
     *
     * @return File
     */
    public function setLogotipo($logotipo)
    {
        $this->logotipo = $logotipo;

        return $this;
    }

    /**
     * Get logotipo
     *
     * @return boolean
     */
    public function getLogotipo()
    {
        return $this->logotipo;
    }
}
