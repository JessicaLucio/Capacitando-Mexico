<?php

namespace AdminBundle\Entity;

/**
 * Exam
 */
class Exam {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    public function __toString() {
        return $this->getName();
    }

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
     * @return Exam
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
     * @var \AdminBundle\Entity\Unidad
     */
    private $unidad;

    /**
     * Set unidad
     *
     * @param \AdminBundle\Entity\Unidad $unidad
     *
     * @return Exam
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

}
