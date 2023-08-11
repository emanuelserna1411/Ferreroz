<?php
    $cod = $_POST["codproducto"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];
    //llamamos al controlador
    $con = mysqli_connect("localhost","root","","ferreroz");
    $consulta = "UPDATE productos SET nombre = '$producto', cantidad = $cantidad,preciounitario=$precio WHERE codproducto = $cod";
    $cmd = mysqli_query($con,$consulta);
    if($cmd)
    {
        header("location:productos.php");
    }
?>