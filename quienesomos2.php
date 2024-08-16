<?php
 
include_once("boostrap2.php");
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Quiénes somos?</title>
    <link rel="stylesheet" href="style_header.css">
</head>
<body>
 
<div style="background-image: url(img/fondo3.jpg); height: 400px; background-size: cover;">
<?php
                         include_once("conexion.php");
                        $consulta="select * from somos";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
<section class="banner">
        <h2><?php echo $fila['titulo']?></h2>
    </section>
</div>
    

    <section class="nosotros">
        <div class="content-nosotros">
            <div class="mx800p">
                <h3><?php echo $fila['subtitulo']?></h3>
                <p><?php echo $fila['texto']?></p>
                <a href="contacto2.php" class="btn-nosotros">Contactanos</a>

            </div>
        </div>
    </section>
    <?php
			}
		}
	?>
</body>
</html>