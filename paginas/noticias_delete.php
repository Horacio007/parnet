<?php
include('../class/class_noticias_dal.php');

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $objeto = new noticias_dal();
    $resultado = $objeto->delete_noticia($id);

    if ($resultado == 1) {
        echo "Noticia eliminada";
    } else {
        echo "Noticia no eliminada";
    }
}

?>