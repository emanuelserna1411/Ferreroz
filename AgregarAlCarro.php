<?php
$codVenta = $_POST["codVenta"];
$producto = $_POST["producto"];
$ccliente = $_POST["ccliente"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precioU"];

$con = mysqli_connect("localhost","root","","ferreroz");
$consulta = "SELECT * FROM productos WHERE nombre like '$producto'";
$cmd = mysqli_query($con,$consulta);
$tabla = mysqli_fetch_array($cmd);

if($tabla)
{
    if($cantidad<=$tabla[2])
    {
        $nuevaCantiddad = $tabla[2]-$cantidad;
        $consulta = "UPDATE productos set cantidad=$nuevaCantiddad where codproducto like $tabla[0]";
        $cmd = mysqli_query($con,$consulta);
        if($cmd)
        {
            $consulta = "INSERT INTO lineaventa (codVenta, codproducto, producto, cantidad, precioU) VALUES ($codVenta,$tabla[0],'$producto',$cantidad,$precio)";
            $cmd = mysqli_query($con,$consulta);

            if($cmd)
            {
                header("location:principal.php");
            }
            
        }
    }
    else
    {
        echo'No hay la cantidad suficiente en inventario!, ingrese un monto mas pequeño';
    }
    $consulta = "INSERT INTO lineaventa (codVenta, codproducto, producto, cantidad, precioU) VALUES ($codVenta,$tabla[0],$producto,$cantidad,$precio)";
}

?>