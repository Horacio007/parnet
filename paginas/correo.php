<?php 

    if (isset($_POST['empresa'])) {
        ini_set('display_errors',1);
        error_reporting(E_ALL);
        $empresa = $_POST['empresa'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $tarea = $_POST['tarea'];

        $mensaje = "De: ".$nombre."\nTeléfono: ".$telefono."\nCorreo: ".$email."\nMensaje: ".$tarea;
        $header = "From: ".$email."\r\n";

        mail('jose097543@gmail.com', $empresa, $mensaje, $header);

        echo "Correo enviado";

    }else{
        echo 'Ocurrio un error';
    }
    
?>