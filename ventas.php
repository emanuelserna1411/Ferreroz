<?php
include("View/header.php");
?>

<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cabecera">
                    <h1>Ventas</h1>
                    <div class="d-flex">
                        <a href="principal.php"><button class="btn btn-outline-primary">Nueva venta +</button></a>
                        <div class="ms-4 d-flex">
                            <input class="form-control mr-sm-2" type="search" name="" id="" placeholder="buscar">
                            <button class="btn btn-dark"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <th>codigo venta</th>
                    <th>codigo producto</th>
                    <th>producto</th>
                    <th>cantidad</th>
                    <th>precio unitario</th>
                    <th>Total</th>
                    <th>acciones</th>
                    <?php
                   $con = mysqli_connect("localhost","root","","ferreroz");
                   $consulta = "SELECT*FROM lineaventa";
                   $cmd = mysqli_query($con,$consulta);
                   $tabla = mysqli_fetch_array($cmd);

                   while($tabla)
                   {
                    echo'<tr>';
                    echo '<td>'.$tabla[0].'</td>';
                    echo'<td>'.$tabla[1].'</td>';
                    echo'<td>'.$tabla[2].'</td>';
                    echo'<td>'.$tabla[3].'</td>';
                    echo'<td>'.$tabla[4].'</td>';
                    echo'<td>'.$tabla[5].'</td>';
                    echo'<td><a class="btn btn-primary" href="editarventa.php?codV='.$tabla[0].'&&cod='.$tabla[1].'&&prod='.$tabla[2].'&&cant='.$tabla[3].'&&prec='.$tabla[4].'&&total='.$tabla[5].'">Editar</a> |'
                    .' <a href="eliminarventa.php?id='.$tabla[1].'&&codV='.$tabla[0].'" class="btn btn-danger">Eliminar</a></td>';
                    echo'</tr>';
                        $tabla = mysqli_fetch_array($cmd);
                   }


                   ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>