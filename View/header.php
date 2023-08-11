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