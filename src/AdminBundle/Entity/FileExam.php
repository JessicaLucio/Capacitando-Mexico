<?php

namespace AdminBundle\Entity;

/**
 * FileExam
 */
class FileExam
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $file;


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
     * Set file
     *
     * @param string $file
     *
     * @return FileExam
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
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
     * @return FileExam
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
     * @return FileExam
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
    /**
     * @var \AdminBundle\Entity\User
     */
    private $remitente;

    /**
     * @var \AdminBundle\Entity\User
     */
    private $destinatario;


    /**
     * Set remitente
     *
     * @param \AdminBundle\Entity\User $remitente
     *
     * @return FileExam
     */
    public function setRemitente(\AdminBundle\Entity\User $remitente = null)
    {
        $this->remitente = $remitente;

        return $this;
    }

    /**
     * Get remitente
     *
     * @return \AdminBundle\Entity\User
     */
    public function getRemitente()
    {
        return $this->remitente;
    }

    /**
     * Set destinatario
     *
     * @param \AdminBundle\Entity\User $destinatario
     *
     * @return FileExam
     */
    public function setDestinatario(\AdminBundle\Entity\User $destinatario = null)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return \AdminBundle\Entity\User
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }
}
