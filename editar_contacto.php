<?php
   include_once("sesiones.php");
   include_once("boostrap.php");
   $entrar="";
   $id=$_REQUEST['id'];

   include_once("conexion.php");
   $consulta="select * from contacto
   where id='$id' ";
   $resultado=mysqli_query($con,$consulta);

   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
   }


   if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['id'];
    $titulo=$_POST['titulo'];
    $desc=$_POST['descripcion'];
    $tel=$_POST['telefono'];
    $email=$_POST['email'];
   
    

       $consulta="update contacto set titulo='$titulo',descripcion='$desc',telefono='$tel',email='$email' where id='$id'";

       $resultado=mysqli_query($con,$consulta);

       if ($resultado){
        /*  echo "<script>
                    alert('.:: Registro Actualizado con Exito ::.');
                    location.href='administrar.php';
                </script>"; */
                $entrar="actualizar3";
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

    <h1 align="center"> .:: Actualizar Contactanos ::.</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center">
            <tr>
                <td><label for="nombrelbl">Titulo:</label></td>
                <td><input class="form-control" type="text" name="titulo"  required placeholder="Titulo" autofocus value="<?php echo $fila['titulo'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción:</label></td>
                <td><input class="form-control" type="text" name="descripcion"  required placeholder="Descripción"  value="<?php echo $fila['descripcion'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Telefono:</label></td>
                <td><input class="form-control" type="text" name="telefono"  required placeholder="Telefono"  value="<?php echo $fila['telefono'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Email:</label></td>
                <td><input class="form-control" type="text" name="email"  required placeholder="Email"  value="<?php echo $fila['email'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary"   name="enviar" Value="Guardar"   ></td>
                <td><input type="reset"  class="btn btn-outline-primary"   name="borrar" Value="Borrar"   ></td>
            </tr>
        </table>
        <input type="hidden" name="id" Value="<?php echo $fila['id'] ?> "  >
    </form>
    <a href="contacto.php" class="btn btn-outline-secondary">Regresar</a>
</body>
</html>
<?php

include_once("alertas.php")
?>