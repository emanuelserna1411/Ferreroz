<?php
$destino = $_POST["email"];
$asunto = "Nueva contraseña";
$newPassword = generateRandomString();
$header = "Enviado de Ferroz inc.";
$mensaje = "Su nueva contraseña es: ".$newPassword;
$mail = mail($destino,$asunto, $mensaje,$header);

if($mail)
{
    echo"<script>alert('correo enviado exitosamente!')</script>";
    header("location:login.php");
}


function generateRandomString($length = 10) { 
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
} 
?>
