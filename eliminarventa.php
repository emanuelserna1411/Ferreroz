<?php
$codproducto = $_GET["id"];
$codVenta = $_GET["codV"];
//llamamos al controlador de productos e invocamos la accion de eliminar.
$con = mysqli_connect("localhost","root","","ferreroz");
$consulta = "DELETE FROM lineaventa WHERE codproducto like $codproducto and codVenta like $codVenta";
$cmd = mysqli_query($con,$consulta);

if($cmd)
{
    header("location:ventas.php");
}
?>
?>