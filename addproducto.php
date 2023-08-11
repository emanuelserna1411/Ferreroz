<?php
//capturamos los datos del form agregarpord.html
$producto = $_POST["producto"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
//llamamos al controlador
$con = mysqli_connect("localhost","root","","ferreroz");
$consulta = "INSERT INTO productos VALUES(null,'$producto',$cantidad,$precio)";
$cmd = mysqli_query($con,$consulta);
if($cmd)
{
    header("location:productos.php");
}
?>