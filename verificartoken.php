<?php
include_once "conexion.php";
$email=$_POST['email'];
$token=$_POST['token'];
$codigo=$_POST['codigo'];
$res=$con->query("select* from passwords where
    email='$email' and token='$token' and codigo='$codigo'") or die ($con->error);

    
    if(mysqli_num_rows($res)>0){
        $fila =mysqli_fetch_row($res);
        die($fila[4]);
    }else{
        echo "codigo incorrecto";
    }





?>