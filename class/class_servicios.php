<?php

class servicios
{
    private $idServicio;
    private $areaId;
    private $descripcionServicio;
    private $telServicio;
    private $emailServicio;

    public function __construct($idServicio=NULL, $areaId=NULL, $descripcionServicio=NULL, $telServicio=NULL, $emailServicio=NULL)
    {
        $this->idServicio = $idServicio;
        $this->areaId = $areaId;
        $this->descripcionServicio = $descripcionServicio;
        $this->telServicio = $telServicio;
        $this->emailServicio = $emailServicio;
    }

    public function getIdServicio()
    {
        return $this->idServicio;
    }

    public function setIdServicio($idServicio)
    {
        $this->idServicio = $idServicio;
    }

    public function getAreaId()
    {
        return $this->areaId;
    }

    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;
    }

    public function getDescripcionServicio()
    {
        return $this->descripcionServicio;
    }

    public function setDescripcionServicio($descripcionServicio)
    {
        $this->descripcionServicio = $descripcionServicio;
    }

    public function getTelServicio()
    {
        return $this->telServicio;
    }

    public function setTelServicio($telServicio)
    {
        $this->telServicio = $telServicio;
    }

    public function getEmailServicio()
    {
        return $this->emailServicio;
    }

    public function setEmailServicio($emailServicio)
    {
        $this->emailServicio = $emailServicio;
    }
}