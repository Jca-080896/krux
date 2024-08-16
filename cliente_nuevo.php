<?php
include_once("sesiones.php");
include_once("boostrap.php");
$entrar = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = $_POST['nombre'];
	$ape1 = $_POST['apellido1'];
	$ape2 = $_POST['apellido2'];
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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Agregar Cliente</h1>

<tr>
<td><a class="btn btn-outline-primary" href="menu.php" role="button">Registrar </a> </td>
    <td><a class="btn btn-primary" href="#" role="button">Nuevo </a> </td>
    <td><a class="btn btn-outline-primary" href="admin_clientes.php" role="button">Administrar </a></td>
</tr>
<div class="container p-4 col-md-6">
    <div class="row">
    <div class="col">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="text-center shadow-lg p-3 mb-5 mt-4 bg-body rounded">
    <div class="form-group">

        <div class="row">
            <div class="col-md-4 mt-4">
                <div class="form-group">
                    <label for="" class="form-label">Nombre: </label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                </div>

            </div>
            <div class="col-md-4 mt-4">
                <div class="form-group">
                    <label for="" class="form-label">Apellido Paterno: </label>
                    <input type="text" name="apellido1" class="form-control" placeholder="Apellido Paterno" autofocus>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="form-group">
                    <label for="" class="form-label">Apellido Materno: </label>
                    <input type="text" name="apellido2" class="form-control" placeholder="Apellido Materno" autofocus>
                </div>
            </div>
        </div>

    </div>
    
    <div class="row">
        <div class="col-md-6 mt-4">
            <div class="form-group">
                <label for="" class="form-label">Email: </label>
                <input type="email" name="email" class="form-control" placeholder="Email" autofocus>
            </div>

        </div>
        <div class="col-md-6 mt-4">
            <div class="form-group">
                <label for="" class="form-label">Telefono: </label>
                <input type="text" name="tel" class="form-control" placeholder="Telefono" autofocus>
            </div>
        </div>
    </div>
    <input type="submit" class="btn btn-success mt-3" name="enviar" value="Guardar Registro">
</form>

</div>

    </div>
</div>



</body>


</html>
<?php

include_once("alertas.php")
?>