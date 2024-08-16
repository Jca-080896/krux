
<?php
 include_once("sesiones.php");
include_once("boostrap.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="style_header.css">
</head>
    <!-- en esta paret inicia la vista qque tendria el usuario admin -->
    <body>

<?php if ($priv=="admin"){ ?>

<div class="container p-4 col-md-8">
<h1 align="center" >Gestionar Apartado Inicio</h1>
		<div class="row">
			<div class="col">
				<table class="table table-bordered text-center shadow-lg p-3 mb-5 mt-4 bg-body rounded" >
					<thead>
						<tr>
							<th>Titulo 1</th>
							<th>Descipción 1</th>
                            <th>Titulo 2</th>
							<th>Descripcion 2</th>
                            <th>Editar info</th>
						</tr>
					</thead>
					<tbody>
					 <?php
                         include_once("conexion.php");
                        $consulta="select * from inicio";
                        $resultado=mysqli_query($con,$consulta);
                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
			  <tr>
                <td class=""><?php echo $fila['titulo1'] ?></td>
                <td class=""><?php echo $fila['texto1'] ?></td>
				<td class=""><?php echo $fila['titulo2'] ?></td>
                <td class=""><?php echo $fila['texto2'] ?></td>
                

				
        <td class="" colspan="4" >
        <a class="btn btn-warning" role="button" href="editar_inicio.php?id=<?php echo $fila['id'] ?>"><i class="bi bi-pencil-square "></i></a>
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
    <div class="container p-4 col-md-8">
    <h1 align="center" >Gestionar Apartado Servicios</h1>
		<div class="row">
			<div class="col">
				<table class="table table-bordered text-center shadow-lg p-3 mb-5 mt-4 bg-body rounded" >
					<thead>
						<tr>
							<th>Titulo 1</th>
							<th>Descipción 1</th>
                            <th>Titulo 2</th>
							<th>Descripción 2</th>
                            <th>Titulo 3</th>
                            <th>Descripción 3</th>
                            <th>Editar info</th>
						</tr>
					</thead>
					<tbody>
					 <?php
                         include_once("conexion.php");
                        $consulta="select * from servicios";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
			  <tr>
                <td class=""><?php echo $fila['titulo1'] ?></td>
                <td class=""><?php echo $fila['descripcion1'] ?></td>
				<td class=""><?php echo $fila['titulo2'] ?></td>
                <td class=""><?php echo $fila['descripcion2'] ?></td>
                <td><?php echo $fila ['titulo3']?></td>
                <td><?php echo $fila['descripcion3']?></td>
                

				
        <td class="" colspan="4" >
        <a class="btn btn-warning" role="button" href="editar_servicios.php?id=<?php echo $fila['id'] ?>"><i class="bi bi-pencil-square "></i></a>
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