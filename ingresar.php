<?php
include('Controller/usuarioController.php');
$correo = $_POST["correo"];
$clave = $_POST["clave"];

$objCont = new usuarioController();
$objCont->ingresar($correo,$clave);

?>