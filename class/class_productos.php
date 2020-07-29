<?php

class productos
{
    private $idProducto;
    private $nombreProducto;
    private $descripcionProducto;
    private $imagen;
    private $costo;
    private $stock;
    private $areaId;

    /**
     * productos constructor.
     * @param $idProducto
     * @param $nombreProducto
     * @param $imagen
     * @param $costo
     * @param $stock
     * @param $areaId
     */
    public function __construct($idProducto = NULL, $nombreProducto = NULL, $descripcionProducto= NULL, $imagen = NULL, $costo = NULL, $stock = NULL, $areaId = NULL)
    {
        $this->idProducto = $idProducto;
        $this->nombreProducto = $nombreProducto;
        $this->descripcionProducto = $descripcionProducto;
        $this->imagen = $imagen;
        $this->costo = $costo;
        $this->stock = $stock;
        $this->areaId = $areaId;
    }

    /**
     * @return null
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * @param null $idProducto
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;
    }

    /**
     * @return null
     */
    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    /**
     * @param null $nombreProducto
     */
    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;
    }

    /**
     * @return null
     */
    public function getDescripcionProducto()
    {
        return $this->descripcionProducto;
    }

    /**
     * @param null $nombreProducto
     */
    public function setDescripcionProducto($descripcionProducto)
    {
        $this->descripcionProducto = $descripcionProducto;
    }


    /**
     * @return null
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param null $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @return null
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * @param null $costo
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    /**
     * @return null
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param null $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return null
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * @param null $areaId
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;
    }
}