<?php
include('../class/class_productos_dal.php');

if (isset($_POST['nombre'])) {

    $nombre= $_POST["nombre"];
    $descripcion = $_POST['descripcion'];
    $imagen = $_POST['imagen'];
    $costo= $_POST["costo"];
    $stock = $_POST["stock"];
    $area_id = $_POST["area"];
    $objeto = new productos_dal();
    $resultado = $objeto->insert_producto($nombre,$descripcion, $imagen, $costo, $stock, $area_id);

    if ($resultado == 1) {
        echo "Producto insertada";
    } else {
        echo "Producto no insertada";
    }
}

?>