<?php
 
include_once("boostrap2.php");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos-principal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet"> 
    
</head>
<body>
    
   

<main>
        <section class="contenedor sobre-nosotros">
        <?php
                         include_once("conexion.php");
                        $consulta="select * from inicio";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
            <h2 class="titulo">Haz tu fiesta con nosotros</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/monsters_illustrations.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span><?php echo $fila['titulo1']?></h3>
                    <p><?php echo $fila['texto1']?></p>
                    <h3><span>2</span><?php echo $fila['titulo2']?></h3>
                    <p><?php echo $fila['texto2']?></p>
                </div>
            </div>
            <?php
			}
		}
	?>
        </section>
        <section class="about-services">
        <?php
                         include_once("conexion.php");
                        $consulta="select * from servicios";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/rocket_silver.png" alt="">
                        <h3><?php echo $fila['titulo1']?></h3>
                        <p><?php echo $fila['descripcion1']?></p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/conversation_illustration_png.png" alt="">
                        <h3><?php echo $fila['titulo2']?></h3>
                        <p><?php echo $fila['descripcion2']?></p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/workers_illustration.png" alt="">
                        <h3><?php echo $fila['titulo3']?></h3>
                        <p><?php echo $fila['descripcion3']?></p>
                    </div>
                </div>
            </div>
            <?php
			}
		}
	?>
        </section>
    </main>

    <footer>
    <?php
            include_once("conexion.php");
                $consulta="select * from contacto where id=1";
                $resultado=mysqli_query($con,$consulta);

                if (mysqli_num_rows($resultado)>0){
                    while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Teléfono</h4>
                <p><?php echo $fila['telefono']?></p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p><?php echo $fila['email']?></p>
            </div>
            <div class="content-foo">
                <h4>Ubicación</h4>
                <p>Dirección: José María Patoni (Libramiento San Ignacio) 220, Col. José Revueltas, 34030 Durango, Dgo.</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; KRUX | eventos infantiles</h2>

        <?php
			}
		}
	?>
    </footer>

</body>
</html>