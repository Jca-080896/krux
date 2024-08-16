
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
    <title>Paquetes y Precios</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet"> 


</head>
<h1 align="center" >Gestionar Apartado Paquetes y Precios</h1>

<body>

<?php if ($priv=="admin"){ ?>

<div class="container p-4 col-md-8">
		<div class="row">
			
			<div class="col">
				<table class="table table-bordered text-center shadow-lg p-3 mb-5 mt-4 bg-body rounded" >
					<thead>
						<tr>
							<th>Núm</th>
							<th>Titulo</th>
							<th>Precio</th>
							<th>Descipción 1</th>
							<th>Descipción 2</th>
							<th>Descipción 3</th>
							<th>Descipción 4</th>
							<th>Descipción 5</th>
							<th>Descipción 6</th>
							<th>Descipción 7</th>
							<th>Editar paquete</th>
						</tr>
					</thead>
					<tbody>
					 <?php
                         include_once("conexion.php");
                        $consulta="select * from paquetes";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
			
			  <tr>
	            
		<td class=""><?php echo $fila['id'] ?></td>
        <td class=""><?php echo $fila['titulo'] ?></td>
        <td class=""><?php echo $fila['precio'] ?></td>
		<td class=""><?php echo $fila['desc1'] ?></td>
		<td class=""><?php echo $fila['desc2'] ?></td>
		<td class=""><?php echo $fila['desc3'] ?></td>
		<td class=""><?php echo $fila['desc4'] ?></td>
		<td class=""><?php echo $fila['desc5'] ?></td>
		<td class=""><?php echo $fila['desc6'] ?></td>
		<td class=""><?php echo $fila['desc7'] ?></td>


				
        <td class="" colspan="4" >
        <a class="btn btn-warning" role="button" href="editar_paq.php?id=<?php echo $fila['id'] ?>"><i class="bi bi-pencil-square "></i></a>
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
