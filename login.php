<?php

session_start();

if (isset($_SESSION))
{
    session_destroy();
}
//vriable para las alertas
$entrar="";


if ($_SERVER["REQUEST_METHOD"]=="POST")
{
   $us=$_POST['nombre'];
   $ps=$_POST['pass'];

   include_once('conexion.php');

   $consulta="select username,password,privilegios from usuarios where username='$us' and password='$ps'";

   $resultado=mysqli_query($con,$consulta);

   if (mysqli_num_rows($resultado)>0)
   {
       if ($fila=mysqli_fetch_assoc($resultado))
       {
           $priv=$fila['privilegios'];
           // $names=$fila['names'];

           session_start();
           $_SESSION['username']=$us;
           $_SESSION['password']=$ps;
           $_SESSION['privilegios']=$priv;
           // $_SESSION['names']=$names;

           //Entre al menu de opciones 
          // echo "Usuario y contraseña correctas -Bienvenido al sistema-";

          if ($priv=="admin"){
            // echo "<script>
              //   alert('-Bienvenido- $names');
               //  location.href='menu.php';
             //  </script>";

             $entrar="admin";

          }
         else{
        //     echo "<script>
          //       alert('-Bienvenido- $names');
        //        location.href='aadministrar.php';
          //     </script>";
          $entrar="estandar";
         }

       }
   }
   else
   {
       //echo "Usuario y contraseña incorrectas por favor verifique ...";
      //echo "<script>
     //         alert('Usuario y contraseña incorrectas por favor verifique ...');
         //     location.href='login.php';
           // </script>";
           $entrar="error1";
   }

}




  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>
    
<div>
      <h1 align="center">ACCESO AL SISTEMA</h1>
      <h1 align="center"><img src="img/logo.jpeg" widht="300px" height="300px"> </h1>
      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table align="center">
              <tr>
                <td>
                  <input type="text"  class="form-control" placeholder="Usuario" name="nombre" required >
                </td>
              </tr>
              <tr>
                <td>
                <input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
                </td>
              </tr>  
              <tr>
               <td>
                  <a href="restablecer.php"> Olvide mi contraseña</a>
               </td>
             </tr>
             <tr>
               <td colspan="2">
                   <input type="submit" class="btn btn-primary" name="enviar" value="Enviar" >
                   
                </td>
             </tr>
             
          </table>
      </form>
      <a href="index.php" class="btn btn-outline-secondary">Regresar</a>
    </div>
    <!-- <script >
        document.querySelector('body')
.addEventListener('mousemove',eyeball);
function eyeball(){
    var eye = document.querySelectorAll
    ('.eye');
    eye.forEach(function(eye){
        let x =(eye.getBoundingClientRect()
        .left) + (eye.clientWidth / 2);

        let y =(eye.getBoundingClientRect()
        .top) + (eye.clientHeight / 2);

        let radian = Math.atan2(event.pageX - x,
            event.pageY - y);
            let rot = (radian * (180 / Math.PI)*
            -1) + 270;
            eye.style.transform = "rotate(" + rot + "deg)";
    })
}

    </script> -->
</body>
</html>

<?php

include_once("alertas.php");
?>

