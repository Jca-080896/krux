<?php
	  include_once("sesiones.php"); 
    include_once("boostrap.php");
    $entrar="";
  
    if ($_SERVER["REQUEST_METHOD"]=="POST")
     {
        $matricula=$_POST['matricula'];
        $nombre=$_POST['nombre'];
        $espec=$_POST['espec'];
  
        include_once('conectar_utd.php');
  
        $consulta="insert into alumnos values('$matricula','$nombre','$espec')";
  
        $resultado=mysqli_query($con,$consulta);
  
        if ($resultado)
        {
    /*    echo "<script>
                alert('Registro insertado Exitosamente');
                  location.href='insertar.php';
          </script>"; */ 
          $entrar="insert";
        }
        else
        {
          
      /*    echo "<script>
                  alert('Registro No insertado, intentelo de nuevo');
                  location.href='insertar.php';
                </script>";  */
          $entrar="error2";
        }
  
     }
  

?>