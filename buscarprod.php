
<?php
include("View/header.php");
?>
    <div class="col-sm-12">
        <table class="table table-striped">
            <th>codigo</th>
            <th>nombre</th>
            <th>cantidad</th>
            <th>precio unitario</th>
            <th>acciones</th>
            <?php
                $producto = $_POST["producto"];
                $con = mysqli_connect("localhost","root","","ferreroz");
                $consulta = "SELECT*FROM productos where nombre like '$producto'";
                $cmd = mysqli_query($con,$consulta);
                $tabla = mysqli_fetch_array($cmd);

                while($tabla)
                {
                    echo'<tr>';
                    echo'<td>'.$tabla["codproducto"].'</td>';
                    echo'<td>'.$tabla["nombre"].'</td>';
                    echo'<td>'.$tabla["cantidad"].'</td>';
                    echo'<td>'.$tabla["preciounitario"].'</td>';
                    echo'<td><a class="btn btn-primary" href="editarproducto.php?cod='.$tabla[0].'&&prod='.$tabla[1].'&&cant='.$tabla[2].'&&prec='.$tabla[3].'">Editar</a> |'
                    .' <a href="eliminarproducto.php?id='.$tabla["codproducto"].'" class="btn btn-danger">Eliminar</a></td>';
                    echo'</tr>';
                    $tabla = mysqli_fetch_array($cmd);
                   }
                   ?>
            </table>
        </div>
    </div>
</body>
</html>
