<?php

class sugerencias
{
    private $idSugerencia;
    private $remitenteSugerencia;
    private $emailRemitenteSugerencia;
    private $telRemitenteSugerencia;
    private $tituloSugerencia;
    private $asuntoSugerencia;

    /**
     * sugerencias constructor.
     * @param $idSugerencia
     * @param $remitenteSugerencia
     * @param $emailRemitenteSugerencia
     * @param $telRemitenteSugerencia
     * @param $tituloSugerencia
     * @param $asuntoSugerencia
     */
    public function __construct($idSugerencia = NULL, $remitenteSugerencia = NULL, $emailRemitenteSugerencia = NULL,
                                $telRemitenteSugerencia = NULL, $tituloSugerencia = NULL, $asuntoSugerencia = NULL)
    {
        $this->idSugerencia = $idSugerencia;
        $this->remitenteSugerencia = $remitenteSugerencia;
        $this->emailRemitenteSugerencia = $emailRemitenteSugerencia;
        $this->telRemitenteSugerencia = $telRemitenteSugerencia;
        $this->tituloSugerencia = $tituloSugerencia;
        $this->asuntoSugerencia = $asuntoSugerencia;
    }

    /**
     * @return null
     */
    public function getIdSugerencia()
    {
        return $this->idSugerencia;
    }

    /**
     * @param null $idSugerencia
     */
    public function setIdSugerencia($idSugerencia)
    {
        $this->idSugerencia = $idSugerencia;
    }

    /**
     * @return null
     */
    public function getRemitenteSugerencia()
    {
        return $this->remitenteSugerencia;
    }

    /**
     * @param null $remitenteSugerencia
     */
    public function setRemitenteSugerencia($remitenteSugerencia)
    {
        $this->remitenteSugerencia = $remitenteSugerencia;
    }

    /**
     * @return null
     */
    public function getEmailRemitenteSugerencia()
    {
        return $this->emailRemitenteSugerencia;
    }

    /**
     * @param null $emailRemitenteSugerencia
     */
    public function setEmailRemitenteSugerencia($emailRemitenteSugerencia)
    {
        $this->emailRemitenteSugerencia = $emailRemitenteSugerencia;
    }

    /**
     * @return null
     */
    public function getTelRemitenteSugerencia()
    {
        return $this->telRemitenteSugerencia;
    }

    /**
     * @param null $telRemitenteSugerencia
     */
    public function setTelRemitenteSugerencia($telRemitenteSugerencia)
    {
        $this->telRemitenteSugerencia = $telRemitenteSugerencia;
    }

    /**
     * @return null
     */
    public function getTituloSugerencia()
    {
        return $this->tituloSugerencia;
    }

    /**
     * @param null $tituloSugerencia
     */
    public function setTituloSugerencia($tituloSugerencia)
    {
        $this->tituloSugerencia = $tituloSugerencia;
    }

    /**
     * @return null
     */
    public function getAsuntoSugerencia()
    {
        return $this->asuntoSugerencia;
    }

    /**
     * @param null $asuntoSugerencia
     */
    public function setAsuntoSugerencia($asuntoSugerencia)
    {
        $this->asuntoSugerencia = $asuntoSugerencia;
    }
}