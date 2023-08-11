<?php
$codproducto = $_GET["id"];
//llamamos al controlador de productos e invocamos la accion de eliminar.
$con = mysqli_connect("localhost","root","","ferreroz");
$consulta = "DELETE FROM productos WHERE codproducto like $codproducto";
$cmd = mysqli_query($con,$consulta);

if($cmd)
{
    header("location:productos.php");
}
?>