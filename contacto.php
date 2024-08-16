
<?php
 include_once("sesiones.php");
include_once("boostrap.php");
  
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
<h1 align="center" >Gestionar Apartado Contactanos</h1>
    <!-- en esta paret inicia la vista qque tendria el usuario admin -->
    <body>

<?php if ($priv=="admin"){ ?>

<div class="container p-4 col-md-8">
		<div class="row">
			
			<div class="col">
				<table class="table table-bordered text-center shadow-lg p-3 mb-5 mt-4 bg-body rounded" >
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Descipción</th>
                            <th>Teléfono</th>
							<th>Email</th>
                            <th>Editar info</th>
						</tr>
					</thead>
					<tbody>
					 <?php
                         include_once("conexion.php");
                        $consulta="select * from contacto";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
			
			  <tr>
                <td class=""><?php echo $fila['titulo'] ?></td>
                <td class=""><?php echo $fila['descripcion'] ?></td>
				<td class=""><?php echo $fila['telefono'] ?></td>
                <td class=""><?php echo $fila['email'] ?></td>
                

				
        <td class="" colspan="4" >
        <a class="btn btn-warning" role="button" href="editar_contacto.php?id=<?php echo $fila['id'] ?>"><i class="bi bi-pencil-square "></i></a>
        </td>

           

				
			</tr>
	       <?php
			}
		}
	?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
  <?php } ?>
</body>
</html>