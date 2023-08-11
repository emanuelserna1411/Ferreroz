<?php
include('Controller/usuarioController.php');
$nom = $_POST["nombre"];
$correo = $_POST["correo"];
$password = $_POST["clave"];

$objCont = new usuarioController();
$objCont->insertar($nom,$correo,$password);
?>