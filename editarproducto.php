<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <!--css-->
    <link rel="stylesheet" href="css/registro.css">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--icons-->
    <link rel="stylesheet" href="https://kit.fontawesome.com/111ce10282.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/111ce10282.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        $cod = $_GET["cod"];
        $prod = $_GET["prod"];
        $cant = $_GET["cant"];
        $prec = $_GET["prec"];
    ?>
<div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="t-venta">
                    <h1>Editar</h1>
                </div>
                <form action="updateProducto.php" method="post">
                    <div class="codigo">
                        <label for="disabledTextInput" class="form-label">codigo producto</label>
                        <input type="text" name="codproducto" class="form-control" id="nombre" value="<?php echo($cod)?>" readonly>
                    </div>
                    <div class="Nombre">
                        <label for="disabledTextInput" class="form-label">producto</label>
                        <input type="text" name="producto" class="form-control" id="nombre" value="<?php echo($prod)?>">
                    </div>
                    <div class="Cantidad">
                        <label for="disabledTextInput" class="form-label">Cantidad</label>
                        <input type="text" name="cantidad" class="form-control" id="nombre" value="<?php echo($cant)?>">
                    </div>
                    <div class="Precio">
                        <label for="disabledTextInput" class="form-label">Precio unitario</label>
                        <input type="text" name="precio" class="form-control" id="nombre" value="<?php echo($prec)?>">
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <button class="btn btn-primary" type="submit">Editar</button>
                    </div>
                    <div class="d-grid gap-2 mt-2">
                        <a href="productos.php" class="btn btn-secondary">Cancelar</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>