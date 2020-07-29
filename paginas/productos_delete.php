<?php
include('../class/class_productos_dal.php');

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $objeto = new productos_dal();
    $resultado = $objeto->delete_producto($id);

    if ($resultado == 1) {
        echo "Producto eliminado";
    } else {
        echo "Producto no eliminado";
    }
}

?>