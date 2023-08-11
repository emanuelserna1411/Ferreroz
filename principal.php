<?php
error_reporting(0);
session_start();
$usuario = $_SESSION["usuario"];
if($usuario==null || $usuario=="")
{
  header("location:login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
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
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="t-venta">
                    <h1>Punto de venta</h1>
                </div>
                <form action="principal.php" method="post">
                  <div class="Nombre">
                        <label for="disabledTextInput" class="form-label">codigo venta</label>
                        <input type="text" name="codVenta" class="form-control" id="nombre">
                    </div>
                    <div class="Nombre">
                        <label for="disabledTextInput" class="form-label">producto</label>
                        <input type="text" name="producto" class="form-control" id="nombre">
                    </div>
                    <div class="Nombre">
                        <label for="disabledTextInput" class="form-label">Cantidad</label>
                        <input type="number" name="cantidad" class="form-control" id="nombre">
                    </div>
                    <div class="Nombre">
                        <label for="disabledTextInput" class="form-label">Precio</label>
                        <input type="text" name="precioU" class="form-control" id="nombre">
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button class="btn btn-primary" type="submit">Agregar al carrito <i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                </form>
                <?php
                $codVenta = $_POST["codVenta"];
                $producto = $_POST["producto"];
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
                                echo'Exito!';
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
            </div>
            <div class="col-sm-12">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Productos</label>
                    <table class="table">
                        <th>codigo producto</th>
                        <th>nombre</th>
                        <th>cantidad</th>
                        <th>precio unitario</th>
                        <th>SubTotal</th>
                        <th>acciones</th>
                        <?php
                         $con = mysqli_connect("localhost","root","","ferreroz");
                         $consulta = "SELECT*FROM lineaVenta where codVenta like $codVenta";
                         $cmd = mysqli_query($con,$consulta);
                         $tabla = mysqli_fetch_array($cmd);
                         $total = 0;
      
                         while($tabla)
                         {
                              echo'<tr>';
                              echo'<td>'.$tabla[1].'</td>';
                              echo'<td>'.$tabla[2].'</td>';
                              echo'<td>'.$tabla[3].'</td>';
                              echo'<td>'.$tabla[4].'</td>';
                              echo'<td>'.$tabla[5].'</td>';
                              echo'<td><a class="btn btn-primary" href="editarventa.php?codV='.$tabla[0].'&&cod='.$tabla[1].'&&prod='.$tabla[2].'&&cant='.$tabla[3].'&&prec='.$tabla[4].'&&total='.$tabla[5].'">Editar</a> |'
                              .' <a href="eliminarventa.php?id='.$tabla[1].'&&codV='.$tabla[0].'" class="btn btn-danger">Eliminar</a></td>';
                              echo'</tr>';
                              $total = $total+$tabla[5];
                              $tabla = mysqli_fetch_array($cmd);
                         }
                        ?>
                    </table>
                  </div>
                  <div class="total">
                    <h3 id="total">Total:<?php echo($total);?></h3>
                  </div>
            </div>
        </div>
      </div>
</body>
</html>