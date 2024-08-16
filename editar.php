<?php
   include_once("sesiones.php");
   include_once("boostrap.php");
   $entrar="";
   $id=$_REQUEST['id'];
   
   include_once("conexion.php");
   $consulta="select * from eventos join registro on eventos.id_clientes=registro.cliente
   where id_evento='$id'";
   $resultado=mysqli_query($con,$consulta);

   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
   }


   if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['id'];
    $cliente=$_POST['cliente'];
    $hora=$_POST['hora'];
    $fecha=$_POST['fecha'];
    $calle=$_POST['calle'];
    $numero=$_POST['numero'];
    $colonia=$_POST['colonia'];
    $cp=$_POST['cp'];
   
    

       $consulta="update eventos set hora='$hora',fecha='$fecha' where id_evento='$id'";

       $resultado=mysqli_query($con,$consulta);
       $consulta2="update registro set calle2='$calle',num='$numero',colonia='$colonia',cp='$cp' where cliente='$cliente'";

       $resultado2=mysqli_query($con,$consulta2);

       if ($resultado && $resultado2){
        /*  echo "<script>
                    alert('.:: Registro Actualizado con Exito ::.');
                    location.href='administrar.php';
                </script>"; */
                $entrar="actualizar";
       }
       else{
           /* echo "<script>
                    alert('Fallo la actualización, intentelo de nuevo ...');
                    location.href='actualizar.php';
                  </script>"; */
                  $entrar="error";
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

    <h1 align="center"> .:: Actualizar Evento ::.</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center">
            <tr>
                <td><label for="nombrelbl">Hora:</label></td>
                <td><input class="form-control" type="time" name="hora" id="nombrelbl" required placeholder="Hora" autofocus value="<?php echo $fila['hora'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Fecha:</label></td>
                <td><input class="form-control" type="date" name="fecha" id="nombrelbl" required placeholder="Fecha" autofocus value="<?php echo $fila['fecha'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Calle:</label></td>
                <td><input class="form-control" type="text" name="calle" id="nombrelbl" required placeholder="Callle" autofocus value="<?php echo $fila['calle2'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Numero:</label></td>
                <td><input class="form-control" type="text" name="numero" id="nombrelbl" required placeholder="Numero" autofocus value="<?php echo $fila['num'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Colonia:</label></td>
                <td><input class="form-control" type="text" name="colonia" id="nombrelbl" required placeholder="Colonia" autofocus value="<?php echo $fila['colonia'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nombrelbl">Codigo Postal:</label></td>
                <td><input class="form-control" type="text" name="cp" id="nombrelbl" required placeholder="Codigo Postal" autofocus value="<?php echo $fila['cp'] ?>"></td>
            </tr>
            
            <tr>
                <td><input type="submit" class="btn btn-primary"   name="enviar" Value="Guardar"   ></td>
                <td><input type="reset"  class="btn btn-outline-primary"   name="borrar" Value="Borrar"   ></td>
            </tr>
        </table>
        <input type="hidden" name="id" Value="<?php echo $fila['id_evento'] ?> "  >
        <input type="hidden" name="cliente" Value="<?php echo $fila['cliente'] ?> "  >
    </form>
    <a href="admin_clientes.php" class="btn btn-outline-secondary" class="enlace_menu">Regresar</a>
</body>
</html>
<?php

include_once("alertas.php")
?>