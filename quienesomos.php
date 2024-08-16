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
    <title>¿Quiénes somos?</title>
    <link rel="stylesheet" href="style_header.css">
</head>
<h1 align="center" >Gestionar Apartado ¿Quiénes somos?</h1>
<body>

<?php if ($priv=="admin"){ ?>

<div class="container p-4 col-md-8">
		<div class="row">
			
			<div class="col">
				<table class="table table-bordered text-center shadow-lg p-3 mb-5 mt-4 bg-body rounded" >
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Subtitulo</th>
                            <th>Descripción</th>
						</tr>
					</thead>
					<tbody>
					 <?php
                         include_once("conexion.php");
                        $consulta="select * from somos";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
			
			  <tr>
                <td class=""><?php echo $fila['titulo'] ?></td>
                <td class=""><?php echo $fila['subtitulo'] ?></td>
				<td class=""><?php echo $fila['texto'] ?></td>
   
                

				
        <td class="" colspan="4" >
        <a class="btn btn-warning" role="button" href="editar_somos.php?id=<?php echo $fila['id'] ?>"><i class="bi bi-pencil-square "></i></a>
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
</html>