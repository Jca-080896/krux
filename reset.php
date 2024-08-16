<?php
if(isset($_GET['email']) && isset($_GET['token'])){
    $email=$_GET['email'];
    $token=$_GET['token'];
}else{
    header("location: ./login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer</title>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>
    
<div>
      <h1 align="center">Restablecer tu contrasña</h1>
      <h1 align="center"><img src="img/logo.jpeg" widht="300px" height="300px"> </h1>
      
      <form action="verificartoken.php" method="post">
        <table align="center">
              <tr>
                <td>
                    <label for="" class="form-label">codigo</label>
                  <input type="text"  class="form-control" placeholder="codigo" name="codigo" >

                  <input type="hidden"  class="form-control" placeholder="codigo" name="codigo" value="<?php echo $email;?>" >
                  <input type="hidden"  class="form-control" placeholder="codigo" name="codigo" value="<?php echo $token;?>">
                </td>
              </tr>
             
              <tr>
               <td>
                  
               </td>
             </tr>
             <tr>
               <td colspan="2">
                   <input type="submit" class="btn btn-primary" name="enviar" value="Enviar" >
                   
                </td>
             </tr>
             
          </table>
      </form>
     </div>
    </body>
</html>

