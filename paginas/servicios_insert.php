<?php
include('../class/class_servicios_dal.php');


if (isset($_POST['area'])) {
    //echo "hooa entraste a lo de insert";
    $area = $_POST['area'];
    $asunto = $_POST['asunto'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    //echo " ".$area." ".$asunto." ".$tel." ".$email;
    $objeto = new servicios_dal();
    $res = $objeto->insert_servicio($area, $asunto, $tel, $email);

    if ($res == 1) {
        echo "Solicitud de servicio enviada";
    }
    else {
        echo "Solicitud de servicio no enviada";
    }
}

?>