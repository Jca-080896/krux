<?php
include_once "conexion.php";
$email=$_POST['email'];
$bytes = random_bytes(5);

$token = bin2hex($bytes);

include "mail_reset.php";
if($enviado){
    $con->query("insert into password(email,token,codigo)
    values('$email','$token','$codigo')")or die ($con->error);
    echo "<p>Verifica tu email para restablecer tu contraseña</p>";    

}



?>