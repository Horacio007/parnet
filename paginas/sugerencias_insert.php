<?php
include('../class/class_sugerencias_dal.php');

if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $remitente = $_POST['remitente'];
    $email = $_POST['email'];
    $tel = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $objeto = new sugerencias_dal();
    $resultado = $objeto->insert_sugerencia($titulo, $remitente, $email, $tel, $mensaje);

    if ($resultado == 1) {
        echo "sugerencia insertada";
    } else {
        echo "sugerencia no insertada";
    }
}else{
    echo "Ocurrio un error";
}

?>