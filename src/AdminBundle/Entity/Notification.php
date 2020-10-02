<?php

namespace AdminBundle\Entity;

/**
 * Notification
 */
class Notification
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $remitente;

    /**
     * @var string
     */
    private $destinatario;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var string
     */
    private $readed;


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
     * Set remitente
     *
     * @param string $remitente
     *
     * @return Notification
     */
    public function setRemitente($remitente)
    {
        $this->remitente = $remitente;

        return $this;
    }

    /**
     * Get remitente
     *
     * @return string
     */
    public function getRemitente()
    {
        return $this->remitente;
    }

    /**
     * Set destinatario
     *
     * @param string $destinatario
     *
     * @return Notification
     */
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return string
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Notification
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set readed
     *
     * @param string $readed
     *
     * @return Notification
     */
    public function setReaded($readed)
    {
        $this->readed = $readed;

        return $this;
    }

    /**
     * Get readed
     *
     * @return string
     */
    public function getReaded()
    {
        return $this->readed;
    }
    /**
     * @var string
     */
    private $readed_remitente;


    /**
     * Set readedRemitente
     *
     * @param string $readedRemitente
     *
     * @return Notification
     */
    public function setReadedRemitente($readedRemitente)
    {
        $this->readed_remitente = $readedRemitente;

        return $this;
    }

    /**
     * Get readedRemitente
     *
     * @return string
     */
    public function getReadedRemitente()
    {
        return $this->readed_remitente;
    }
}
