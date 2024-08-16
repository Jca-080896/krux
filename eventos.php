
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
    <title>Document</title>
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet"> 

</head>
<body>
<div class="container p-4 col-md-8">
		<div class="row">

			<div class="col">
				<table class="table table-bordered text-center shadow-lg p-3 mb-5 mt-4 bg-body rounded" >
					<thead>
						<tr>
							<th>Id</th>
							<th>Paquete</th>
							<th>Hora</th>
							<th>Fecha</th>
							<th>Descripcion</th>
                            <th>Detalles</th>
						</tr>
					</thead>
					<tbody>
					 <?php
                         include_once("conexion.php");
                        $consulta="select * from eventos";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
			
			  <tr>
	            
				<td class=""><?php echo $fila['id'] ?></td>
                <td class=""><?php echo $fila['id_paq'] ?></td>
                <td class=""><?php echo $fila['hora'] ?></td>
                <td class=""><?php echo $fila['fecha'] ?></td>
				
				<td class=""><?php echo $fila['descripcion'] ?></td>

				
                <td class="" colspan="4" >
                <a class="btn btn-success" role="button" href="ver.php?id=<?php echo $fila['id'] ?>"><i class="bi bi-eye-fill"></i></a>
				
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
</body>
</html>

