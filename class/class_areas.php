<?php

class areas
{
    private $idArea;
    private $nombreArea;

    public function __construct($idArea = NULL, $nombre = NULL)
    {
        $this->idArea = $idArea;
        $this->nombreArea = $nombre;
    }

    public function getIdArea()
    {
        return $this->idArea;
    }

    public function setIdArea($idArea)
    {
        $this->idArea = $idArea;
    }

    public function getNombreArea()
    {
        return $this->nombreArea;
    }

    public function setNombreArea($nombreArea)
    {
        $this->nombreArea = $nombreArea;
    }
}