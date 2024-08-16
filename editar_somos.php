<?php
   include_once("sesiones.php");
   include_once("boostrap.php");
   $entrar="";
   $id=$_REQUEST['id'];

   include_once("conexion.php");
   $consulta="select * from somos
   where id='$id' ";
   $resultado=mysqli_query($con,$consulta);

   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
   }


   if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['id'];
    $titulo=$_POST['titulo'];
    $sub=$_POST['subtitulo'];
    $desc=$_POST['texto'];

   
    

       $consulta="update somos set titulo='$titulo',subtitulo='$sub',texto='$desc' where id='$id'";

       $resultado=mysqli_query($con,$consulta);

       if ($resultado){
        /*  echo "<script>
                    alert('.:: Registro Actualizado con Exito ::.');
                    location.href='administrar.php';
                </script>"; */
                $entrar="actualizar4";
       }
       else{

                  $entrar="error3";
       }


   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::Actualizar Contacto::.</title>
    
</head>
<body>

    <h1 align="center"> .:: Actualizar Apartado Quienes somos ::.</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center">
            <tr>
                <td><label for="nombrelbl">Titulo:</label></td>
                <td><input class="form-control" type="text" name="titulo"  required placeholder="Titulo" autofocus value="<?php echo $fila['titulo'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Subtitutlo:</label></td>
                <td><input class="form-control" type="text" name="subtitulo"  required placeholder="Descripción"  value="<?php echo $fila['subtitulo'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción:</label></td>
                <td><input class="form-control" type="text" name="texto"  required placeholder="Telefono"  value="<?php echo $fila['texto'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary"   name="enviar" Value="Guardar"   ></td>
                <td><input type="reset"  class="btn btn-outline-primary"   name="borrar" Value="Borrar"   ></td>
            </tr>
        </table>
        <input type="hidden" name="id" Value="<?php echo $fila['id'] ?> "  >
    </form>
    <a href="quienesomos.php" class="btn btn-outline-secondary">Regresar</a>
</body>
</html>
<?php

include_once("alertas.php")
?>