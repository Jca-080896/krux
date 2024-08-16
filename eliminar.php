<?php
   include_once("sesiones.php");
   
   $entrar="";
   $id=$_REQUEST['id'];


   include_once("conexion.php");
   $consulta="delete from eventos where id_evento='$id'";
   $resultado=mysqli_query($con,$consulta);

   if ($resultado){
      /*  echo "<script>
                alert('Registro eliminado con Éxito');
                location.href='administrar.php';
             </script>"; */
             $entrar="borrar";

   }
   else{
     /*   echo "<script>
                alert('Registro NO eliminado... VERIFIQUE');
                location.href='administrar.php';
              </script>";
              
*/
$entrar="error2";

   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    
</head>
<body>

    
</body>
</html>


<?php

include_once("alertas.php")
?>

