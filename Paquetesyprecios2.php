
<?php

include_once("boostrap2.php");
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes y Precios</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet"> 


</head>

<body>

<div style="background-image: url(img/fondo3.jpg); height: 400px; background-size: cover;">

<div class="container p-4">
  <div class="row mt-5 ">
    <div class="col-sm-4 mt-5 ">
      <div>
      </div>
    <div class="card shadow-lg p-3 mb-5 mt-4 bg-body rounded text-center ">
    
        <div class="card-body">
        <?php
                         include_once("conexion.php");
                        $consulta="select * from paquetes where id=3";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
        <div class="card-header text-bg-primary rounded bg-opacity-75" ><h4 class="card-title text-center"><?php echo $fila['titulo'] ?></h4></div>
        
        <h1 class="card-title text-center p-4 text-primary">$<?php echo $fila['precio']?></h1>
        <p class="card-text"><?php echo $fila['desc1']?></p>
        <p class="card-text"><?php echo $fila['desc2']?></p>
        <p class="card-text"><?php echo $fila['desc3']?></p>
        <p class="card-text"><?php echo $fila['desc4']?></p>
        <p class="card-text"><?php echo $fila['desc5']?></p>
        <p class="card-text"><?php echo $fila['desc6']?></p>
        <p class="card-text"><?php echo $fila['desc7']?></p>
          <a type="button" href="contacto2.php" name="paquete1" class="btn btn-primary" >Contactanos ahora</a>

          <?php
			}
		}
	?>
        </div>
    </div>
</div>
    

  <div class="col-sm-4 mt-5">
    <div class="card shadow-lg p-3 mb-5  bg-body rounded text-center ">
      <div class="card-body">
      <?php
                         include_once("conexion.php");
                        $consulta="select * from paquetes where id=1";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
      <div class="card-header text-bg-danger rounded bg-opacity-75" ><h4 class="card-title text-center"><?php echo $fila['titulo']?></h4></div>
      <h1 class="card-title text-center p-4 text-danger">$<?php echo $fila['precio']?></h1>
        <p class="card-text"><?php echo $fila['desc1']?></p>
        <p class="card-text"><?php echo $fila['desc2']?></p>
        <p class="card-text"><?php echo $fila['desc3']?></p>
        <p class="card-text"><?php echo $fila['desc4']?></p>
        <p class="card-text"><?php echo $fila['desc5']?></p>
        <p class="card-text"><?php echo $fila['desc6']?></p>
        <p class="card-text"><?php echo $fila['desc7']?></p>
        

        <a type="button" href="contacto2.php" name="paquete2" class="btn btn-danger" >Contactanos ahora</a>
        <?php
			}
		}
	?>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mt-5">
    <div class="card shadow-lg p-3 mb-5 mt-4 bg-body rounded text-center ">
      <div class="card-body">
      <?php
                         include_once("conexion.php");
                        $consulta="select * from paquetes where id=2";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
      <div class="card-header text-bg-success rounded bg-opacity-75" ><h4 class="card-title text-center "><?php echo $fila['titulo']?></h4></div>
      
      <h1 class="card-title text-center p-4 text-success">$<?php echo $fila['precio']?></h1>
        <p class="card-text"><?php echo $fila['desc1']?></p>
        <p class="card-text"><?php echo $fila['desc2']?></p>
        <p class="card-text"><?php echo $fila['desc3']?></p>
        <p class="card-text"><?php echo $fila['desc4']?></p>
        <p class="card-text"><?php echo $fila['desc5']?></p>
        <p class="card-text"><?php echo $fila['desc6']?></p>
        <p class="card-text"><?php echo $fila['desc7']?></p>

        <a type="button" href="contacto2.php" name="paquete3" class="btn btn-success" >Contactanos ahora</a>
        <?php
			}
		}
	?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>
