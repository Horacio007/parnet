<?php
include('../class/class_noticias_dal.php');

if (isset($_POST['nombre'])) {

    $nombre= $_POST["nombre"];
    $descripcion = $_POST['descripcion'];
    $imagen = $_POST['imagen'];
    $objeto = new noticias_dal();
    $resultado = $objeto->insert_noticia($nombre,$descripcion, $imagen);

    if ($resultado == 1) {
        echo "Noticia insertada";
    } else {
        echo "Noticia no insertada";
    }
}

?>