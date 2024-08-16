<?php
   include_once("sesiones.php");
   include_once("boostrap.php");
   $entrar="";
  
   
   include_once("conexion.php");
   $consulta="select * from eventos join clientes on eventos.id_clientes=clientes.id join paquetes on eventos.id_paq=paquetes.id";
   $resultado=mysqli_query($con,$consulta);

   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
   }


   if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $cliente=$_POST['cliente'];
    $paquete=$_POST['paquete'];
    $hora=$_POST['hra'];
	$fecha=$_POST['fecha'];
	$calle=$_POST['calle'];
	$colonia=$_POST['colonia'];
	$numero=$_POST['numero'];
	$codigo_postal=$_POST['codigo_postal'];
	$descripcion=$_POST['descripcion'];
   
    
	
	
     $consulta="update clientes set calle='$calle',col_fracc='$colonia',num_ext='$numero',codigo_postal='$codigo_postal' where clientes.id='$cliente' ";
	   $consulta3="update registro set calle2='$calle',colonia='$colonia',num='$numero',cp='$codigo_postal' where registro.cliente='$cliente' ";
		$consulta2="insert into eventos values(null,'$cliente','$paquete','$hora','$fecha','$descripcion')";
		

       $resultado=mysqli_query($con,$consulta) or die(mysqli_error($con));
	   $resultado3=mysqli_query($con,$consulta3) or die(mysqli_error($con));
	   $resultado2=mysqli_query($con,$consulta2) or die(mysqli_error($con));
       if ($resultado && $resultado2){
		
		$consulta4="delete from clientes where clientes.id='$cliente'";
   $resultado4=mysqli_query($con,$consulta4);
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
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Inicio</title>
	<script src="script_eventos.js"></script>
	<script src="script_clientes.js"></script>
	<!-- <link rel="stylesheet" href="style_header.css"> -->

</head>

<body>



	<h1 align="center">Registrar Evento</h1>

	


<tr>
<td><a class="btn btn-primary" href="menu.php" role="button">Registrar </a> </td>
    <td><a class="btn btn-outline-primary" href="cliente_nuevo.php" role="button">Nuevo </a> </td>
    <td><a class="btn btn-outline-primary" href="admin_clientes.php" role="button">Administrar </a></td>
</tr>
	<div class="container p-4">
		<div class="row">
			<div class="col-md-4">

				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="text-center shadow-lg p-3 mb-5 mt-4 bg-body rounded">
					<div class="form-group">

						<label for="" class="form-label">Cliente:</label>

						<select name="cliente" class="form-select" aria-label="Default select example" autofocus>
							<option selected>Seleccione el cliente</option>
							<?php
							include_once('conexion.php');

							$query = "select * from clientes";
							$ejecutar = mysqli_query($con, $query);


							foreach ($ejecutar as $fila) :

							?>

								<option value="<?php echo $fila['id'] ?>">
									<?php echo $fila['id'] ?>.- <?php echo $fila['nombre'] ?> <?php echo $fila['ape1'] ?>
									<?php echo $fila['ape2'] ?></option>


							<?php
							endforeach

							?>
						</select>





					</div>
					<div class="form-group">
						<label for="" class="form-label">Paquete:</label>
						<select name="paquete" class="form-select" aria-label="Default select example">
							<option selected>Seleccione el paquete</option>
							<?php
							include_once('conexion.php');

							$query = "select * from paquetes";
							$ejecutar = mysqli_query($con, $query);


							foreach ($ejecutar as $fila) :

							?>

								<option value="<?php echo $fila['id'] ?>"><?php echo $fila['titulo'] ?></option>


							<?php
							endforeach

							?>
						</select>
					</div>
					<div class="form-group">
						<label for="" class="form-label">Hora:</label>
						<input type="time" min="10:00" max="18:00" name="hra" class="form-control" placeholder="Hora del evento" autofocus>
					</div>
					<div class="form-group">
						<label for="" class="form-label">Fecha:</label>
						<?php
						$fechamin = date("Y-m-d")
						?>
						<input type="date" name="fecha" class="form-control" placeholder="Fecha:" min="<?= $fechamin ?>">
					</div>
					<div class="row">
						<div class="col-md-6 mt-4">
							<div class="form-group">
								<label for="" class="form-label">Calle: </label>
								<input type="text" name="calle" class="form-control" placeholder="Calle" autofocus>
							</div>

						</div>
						<div class="col-md-6 mt-4">
							<div class="form-group">
								<label for="" class="form-label">Colonia: </label>
								<input type="text" name="colonia" class="form-control" placeholder="Colonia" autofocus>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mt-4">
							<div class="form-group">
								<label for="" class="form-label">Numero: </label>
								<input type="text" name="numero" class="form-control" placeholder="No." autofocus>
							</div>

						</div>
						<div class="col-md-6 mt-4">
							<div class="form-group">
								<label for="" class="form-label">Codigo postal: </label>
								<input type="text" name="codigo_postal" class="form-control" placeholder="Codigo Postal">
							</div>
						</div>
					</div>


					<div class="form-group mt-4">
						<label for="" class="form-label mt-2 ">Descripcion</label>

						<textarea name="descripcion" class="" cols="30" rows="2"></textarea>
					</div>

					
					<input type="submit" class="btn btn-success mt-3" name="enviar" value="Guardar Registro">
					<input type="hidden" name="id" Value="<?php echo $fila['id'] ?> "  >
					  
				</form>
				

			</div>
			<div class="col-md-8 mt-4">
			<h2>Peticiones</h2>
			<section>
			<input type=" text" class="form-control" name="busqueda2" id="busqueda2" placeholder="buscar...">
			</section>
			<section id="tabla_resultado2" class="">

			</section>

		</div>





		</div>



		

	</div>




</body>

</html>

<?php

include_once("alertas.php")
?>