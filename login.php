<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
        <!--styles-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <!--js-->
        <script src="js/login.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container col-sm-12">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="img d-flex">
                    <img src="img/loginsvg.svg" class="imgastronauta">
                </div>
                <form action="ingresar.php" method="post" class="formulario  d-block">
                    <div class="email d-block">
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        <input type="text" name="correo" class="inputForm" id="correo">
                    </div>
                    <div class="password d-block">
                        <label for="exampleInputPassword1" class="form-label">contraseña</label>
                        <input type="password" name="clave" class="inputForm" id="clave">
                    </div>
                    <label><input type="checkbox" id="viewPassword" onclick="viewPass()">Ver contraseña</label>
                    <div class="button1 d-block">
                        <input type="submit" value="Iniciar sesion" class="btn btn-dark" onclick="validar()">
                    </div>
                    <div class="button2 d-block">
                        <a href="registro.html"><input type="button" value="Registrarse" class="btn btn-dark"></a>
                    </div>
        
                    <a href="recuperar.html">olvide mi contraseña</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>