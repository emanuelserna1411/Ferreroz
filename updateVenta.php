<?php
    $codV = $_POST["codVenta"];
    $cod = $_POST["codproducto"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];
    $total = $_POST["total"];
    //llamamos al controlador
    $con = mysqli_connect("localhost","root","","ferreroz");
    $consulta = "UPDATE lineaventa set codVenta = $codV, codproducto = $cod, producto ='$producto', cantidad=$cantidad, precioU = $precio, total=$total where codproducto like $cod and codVenta like $codV";
    $cmd = mysqli_query($con,$consulta);
    if($cmd)
    {
        header("location:ventas.php");
    }
?>