<?php
   include_once("sesiones.php");
   include_once("boostrap.php");
   $entrar="";
   $id=$_REQUEST['id'];

   include_once("conexion.php");
   $consulta="select * from paquetes
   where id='$id' ";
   $resultado=mysqli_query($con,$consulta);

   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
   }


   if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['id'];
    $titulo=$_POST['titulo'];
    $precio=$_POST['precio'];
    $desc1=$_POST['desc1'];
    $desc2=$_POST['desc2'];
    $desc3=$_POST['desc3'];
    $desc4=$_POST['desc4'];
    $desc5=$_POST['desc5'];
    $desc6=$_POST['desc6'];
    $desc7=$_POST['desc7'];
   
   
    

       $consulta="update paquetes set titulo='$titulo',precio='$precio',desc1='$desc1', desc2='$desc2', desc3='$desc3', desc4='$desc4', desc5='$desc5', desc6='$desc6', desc7='$desc7'  where id='$id'";

       $resultado=mysqli_query($con,$consulta);

       if ($resultado){
        /*  echo "<script>
                    alert('.:: Registro Actualizado con Exito ::.');
                    location.href='administrar.php';
                </script>"; */
                $entrar="actualizar2";
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

    <h1 align="center"> .:: Actualizar Paquetes ::.</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center">
            <tr>
                <td><label for="nombrelbl">Titulo:</label></td>
                <td><input class="form-control" type="text" name="titulo"  required placeholder="Titulo" autofocus value="<?php echo $fila['titulo'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Precio:</label></td>
                <td><input class="form-control" type="number" name="precio"  required placeholder="Precio"  value="<?php echo $fila['precio'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción:</label></td>
                <td><input class="form-control" type="text" name="desc1"  required placeholder="Descripcion"  value="<?php echo $fila['desc1'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción:</label></td>
                <td><input class="form-control" type="text" name="desc2" placeholder="Descripcion"  value="<?php echo $fila['desc2'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción:</label></td>
                <td><input class="form-control" type="text" name="desc3" placeholder="Descripcion"  value="<?php echo $fila['desc3'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción:</label></td>
                <td><input class="form-control" type="text" name="desc4" placeholder="Descripcion"  value="<?php echo $fila['desc4'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción:</label></td>
                <td><input class="form-control" type="text" name="desc5" placeholder="Descripcion"  value="<?php echo $fila['desc5'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción:</label></td>
                <td><input class="form-control" type="text" name="desc6" placeholder="Descripcion"  value="<?php echo $fila['desc6'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Descripción:</label></td>
                <td><input class="form-control" type="text" name="desc7" placeholder="Descripcion"  value="<?php echo $fila['desc7'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary"   name="enviar" Value="Guardar"   ></td>
                <td><input type="reset"  class="btn btn-outline-primary"   name="borrar" Value="Borrar"   ></td>
            </tr>
        </table>
        <input type="hidden" name="id" Value="<?php echo $fila['id'] ?> "  >
    </form>
    <a href="Paquetesyprecios.php" class="btn btn-outline-secondary">Regresar</a>
</body>
</html>
<?php

include_once("alertas.php")
?>