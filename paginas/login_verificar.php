<?php
include('../class/class_admin_dal.php');

$user = $_POST["usuario"];
$password = $_POST["psdw"];


$objeto = new admin_dal();
$resultado = $objeto->exists_usuario($user,$password);
if ($resultado == 1) {
	header("Location:../index2.php");
} else {
	echo 'contraseña incorrecta';
}
?>