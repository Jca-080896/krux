<?php 
include_once("conexion.php");

$id = $_POST['id'];
$foto = $_FILES['foto'];


$tmp-name = $foto['tmp-name'];
$directorio_destino ="images";

$img_file = $foto['name'];
$img_type = $foto['type'];

if(((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) strpos($img_type, "png")))
{

    $destino = $dirctorio_destino , '/' , $img_file;
    mysqli_query($con, "insert into galeria values ('$id','$foto');");
    if (move_uploaded_file($tmp-name, $destino)){
        return true;
    }
}
return false;

?>