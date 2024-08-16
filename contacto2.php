
<?php
 
include_once("boostrap2.php");



$entrar = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = $_POST['nombre'];
	$ape1 = $_POST['ape1'];
	$ape2 = $_POST['ape2'];
	$email = $_POST['email'];
	$telefono = $_POST['tel'];
	
    
    
	


	include_once('conexion.php');

	$consulta = "insert into clientes values(null,'$nombre','$ape1','$ape2','$email','$telefono','','','','')";


   

	$resultado = mysqli_query($con, $consulta) or die(mysqli_error($con));

    
    $consulta2 = "insert into registro values(null,'$nombre','$ape1','$ape2','$email','$telefono','','','','')";


   

	$resultado2 = mysqli_query($con, $consulta2) or die(mysqli_error($con));

	if ($resultado) {
		/*    echo "<script>
                alert('Registro insertado Exitosamente');
                  location.href='insertar.php';
          </script>"; */
		$entrar = "insert";
	} else {

		/*    echo "<script>
                  alert('Registro No insertado, intentelo de nuevo');
                  location.href='insertar.php';
                </script>";  */
		$entrar = "error2";
	}
}


?>
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="style_header.css">
</head>
<body>

    
        <main>
        <div class="container-form">
        <div class="info-form">
            <?php
            include_once("conexion.php");
                $consulta="select * from contacto where id=1";
                $resultado=mysqli_query($con,$consulta);

                if (mysqli_num_rows($resultado)>0){
                    while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
                <h2><?php echo $fila['titulo']?></h2>
                <p><?php echo $fila['descripcion']?></p>
                <a href="#"><img src="img/ecommerce_icons_6.png" alt=""><?php echo $fila['telefono']?></a>
                <a href="#"><img src="img/ecommerce_icons_12.png" alt=""><?php echo $fila['email']?></a>
                <a href="#"><img src="img/ecommerce_icons_10.png" alt="">Durango, México.</a>
                <?php
			}
		}
	?>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="nombre" placeholder="Tu Nombre" class="campo">
                <input type="text" name="ape1" placeholder="Tu Apellido Paterno" class="campo">
                <input type="text" name="ape2" placeholder="Tu Apellido Materno" class="campo">
                <input type="email" name="email" placeholder="Tu Email" class="campo">
                <input type="text" name="tel" placeholder="Tu Telefono" class="campo">
                
                <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7285.807121507948!2d-104.6214632786605!3d24.069700437731523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb6594dac1afb%3A0x3f79e51b24fd1292!2sDurango%2C%2034000%20Durango%2C%20Dgo.!5e0!3m2!1ses-419!2smx!4v1656273877155!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </form>
        </div>
    </main>

                </body>