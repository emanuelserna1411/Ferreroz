<?php
include('Model/usuarioModel.php');
class usuarioController
{
    public function __construct()
    {

    } 

    public function insertar($nombre,$correo,$password)
    {
        $objModel = new usuarioModel();
        $objModel->insertar($nombre,$correo,$password);
    }

    public function ingresar($correo,$clave)
    {
        $objModel = new usuarioModel();
        $objModel->ingresar($correo,$clave);
    }
}
?>