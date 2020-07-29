<?php

class noticias
{
    private $idNoticia;
    private $tituloNoticia;
    private $descripcionNoticia;
    private $imagenNoticia;

    /**
     * noticias constructor.
     * @param $idNoticia
     * @param $tituloNoticia
     * @param $descripcionNoticia
     * @param $imagenNoticia
     */
    public function __construct($idNoticia=NULL, $tituloNoticia=NULL, $descripcionNoticia=NULL, $imagenNoticia=NULL)
    {
        $this->idNoticia = $idNoticia;
        $this->tituloNoticia = $tituloNoticia;
        $this->descripcionNoticia = $descripcionNoticia;
        $this->imagenNoticia = $imagenNoticia;
    }

    /**
     * @return null
     */
    public function getIdNoticia()
    {
        return $this->idNoticia;
    }

    /**
     * @param null $idNoticia
     */
    public function setIdNoticia($idNoticia)
    {
        $this->idNoticia = $idNoticia;
    }

    /**
     * @return null
     */
    public function getTituloNoticia()
    {
        return $this->tituloNoticia;
    }

    /**
     * @param null $tituloNoticia
     */
    public function setTituloNoticia($tituloNoticia)
    {
        $this->tituloNoticia = $tituloNoticia;
    }

    /**
     * @return null
     */
    public function getDescripcionNoticia()
    {
        return $this->descripcionNoticia;
    }

    /**
     * @param null $descripcionNoticia
     */
    public function setDescripcionNoticia($descripcionNoticia)
    {
        $this->descripcionNoticia = $descripcionNoticia;
    }

    /**
     * @return null
     */
    public function getImagenNoticia()
    {
        return $this->imagenNoticia;
    }

    /**
     * @param null $imagenNoticia
     */
    public function setImagenNoticia($imagenNoticia)
    {
        $this->imagenNoticia = $imagenNoticia;
    }
}