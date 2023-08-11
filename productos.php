<?php
session_start();
$usuario = $_SESSION["usuario"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <!--css-->
    <link rel="stylesheet" href="css/registro.css">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--icons-->
    <link rel="stylesheet" href="https://kit.fontawesome.com/111ce10282.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/111ce10282.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #cecede;">
<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">Ferreroz</a>
          <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <li class="nav-item ">
              <a class="nav-link active text-light ms-4" aria-current="page" href="ventas.php">Ventas</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active text-light ms-4" aria-current="page" href="productos.php">inventatio</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active text-light ms-4" aria-current="page" href="principal.php">punto venta</a>
            </li>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item ">
                <a class="nav-link active text-light" aria-current="page" href="#"></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active text-light" aria-current="page" href="#"><?php echo($_SESSION["usuario"]);?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="cerrarsesion.php">Cerrar Sesion<i class="fa-sharp fa-solid fa-power-off"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div>
              <h2>Productos</h2>
              <a href="agregarprod.html"><input type="button" class="btn btn-outline-success" value="Agregar producto+"></a>
            </div>
            <form action="buscarprod.php" method="post">
                <label for="">Nombre del producto: </label>
                <input type="text" name="producto">
                <button class="btn btn-dark"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <th>codigo</th>
                    <th>nombre</th>
                    <th>cantidad</th>
                    <th>precio unitario</th>
                    <th>acciones</th>
                   <?php
                   $con = mysqli_connect("localhost","root","","ferreroz");
                   $consulta = "SELECT*FROM productos";
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