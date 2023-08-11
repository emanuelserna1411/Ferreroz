<?php
class usuarioModel
{
    
    public function __construct(){}

    public function insertar($nombre,$correo,$password)
    {
        $con = mysqli_connect("localhost","root","","ferreroz");
        $consulta = "INSERT INTO usuarios VALUES('$nombre','$correo','$password')";
        $cmd = mysqli_query($con,$consulta);
        if(!$cmd)
        {
            echo'error al ingresar el usuario';
        }
        else
        {
            header("location:registro.html");
        }
        
    }

    public function ingresar($correo,$clave)
    {
        session_start();
        $con = mysqli_connect("localhost","root","","ferreroz");
        $consulta = "SELECT*FROM usuarios WHERE correo like '$correo'";
        $cmd = mysqli_query($con,$consulta);
        $tabla = mysqli_fetch_array($cmd);

        if(!$tabla)
        {
            echo'este usuario no se encuentra registrado';
        }
        else
        {
            $_SESSION["usuario"] = $tabla["correo"];
            if($tabla["clave"]==$clave)
            {
                header("location:principal.php");
            }
            else
            {
                header("location:login.php");   
            }
        }


    }
}
?>