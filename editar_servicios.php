<?php
   include_once("sesiones.php");
   include_once("boostrap.php");
   $entrar="";
   $id=$_REQUEST['id'];

   include_once("conexion.php");
   $consulta="select * from servicios
   where id='$id' ";
   $resultado=mysqli_query($con,$consulta);

   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
   }


   if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['id'];
    $titulo1=$_POST['titulo1'];
    $desc1=$_POST['descripcion1'];
    $titulo2=$_POST['titulo2'];
    $desc2=$_POST['descripcion2'];
    $titulo3=$_POST['titulo3'];
    $desc3=$_POST['descripcion3'];

   
    

       $consulta="update servicios set titulo1='$titulo1',descripcion1='$desc1',titulo2='$titulo2',descripcion2='$desc2',titulo3='$titulo3',descripcion1='$desc3'   where id='$id'";

       $resultado=mysqli_query($con,$consulta);

       if ($resultado){
        /*  echo "<script>
                    alert('.:: Registro Actualizado con Exito ::.');
                    location.href='administrar.php';
                </script>"; */
                $entrar="actualizar5";
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

    <h1 align="center"> .:: Actualizar Apartado Servicios ::.</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center">
            <tr>
                <td><label for="nombrelbl">Titulo 1:</label></td>
                <td><input class="form-control" type="text" name="titulo1"  required placeholder="Titulo" autofocus value="<?php echo $fila['titulo1'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción 1:</label></td>
                <td><input class="form-control" type="text" name="descripcion1"  required placeholder="Telefono"  value="<?php echo $fila['descripcion1'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Titulo 2:</label></td>
                <td><input class="form-control" type="text" name="titulo2"  required placeholder="Titulo" autofocus value="<?php echo $fila['titulo2'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción 2:</label></td>
                <td><input class="form-control" type="text" name="descripcion2"  required placeholder="Telefono"  value="<?php echo $fila['descripcion2'] ?>"></td>
            </tr>
            <tr>
            <tr>
                <td><label for="nombrelbl">Titulo 3:</label></td>
                <td><input class="form-control" type="text" name="titulo3"  required placeholder="Titulo" autofocus value="<?php echo $fila['titulo3'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción 3:</label></td>
                <td><input class="form-control" type="text" name="descripcion3"  required placeholder="Telefono"  value="<?php echo $fila['descripcion3'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary"   name="enviar" Value="Guardar"   ></td>
                <td><input type="reset"  class="btn btn-outline-primary"   name="borrar" Value="Borrar"   ></td>
            </tr>
        </table>
        <input type="hidden" name="id" Value="<?php echo $fila['id'] ?> "  >
    </form>
    <a href="inicio.php" class="btn btn-outline-secondary">Regresar</a>
</body>
</html>
<?php

include_once("alertas.php")
?>