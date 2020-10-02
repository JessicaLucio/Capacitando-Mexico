<?php

namespace AdminBundle\Entity;

/**
 * Course
 */
class Course
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
     * @var \BackendBundle\Entity\CategoryCourse
     */
    private $categoryCourse;
    
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
     * @return Course
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
     * Set categoryCourse
     *
     * @param \AdminBundle\Entity\CategoryCourse $categoryCourse
     *
     * @return Course
     */
    public function setCategoryCourse(\AdminBundle\Entity\CategoryCourse $categoryCourse = null)
    {
        $this->categoryCourse = $categoryCourse;

        return $this;
    }

    /**
     * Get categoryCourse
     *
     * @return \AdminBundle\Entity\CategoryCourse
     */
    public function getCategoryCourse()
    {
        return $this->categoryCourse;
    }
    /**
     * @var string
     */
    private $image;


    /**
     * Set image
     *
     * @param string $image
     *
     * @return Course
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
