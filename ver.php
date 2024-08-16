<?php
  include_once("sesiones.php");
  

  $id=$_REQUEST['id'];
  
  include_once('conexion.php');

 $consulta="select * from eventos join registro on eventos.id_clientes=registro.cliente
                                    join paquetes on paquetes.id=eventos.id_paq
                                    where id_evento='$id' ";
 $resultado=mysqli_query($con,$consulta);

 if($fila=mysqli_fetch_assoc($resultado)){
 }

 if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $eventos_id=$_POST['id_evento'];
    $clientes_id=$_POST['id_clientes'];
    $paquetes_id=$_POST['id_paq'];
    $hora=$_POST['hora'];
    $fecha=$_POST['fecha'];
    $nombre=$_POST['nom'];
    $ape1=$_POST['ap1'];
    $ape2=$_POST['ap2'];
    $telefono=$_POST['tel'];
    $calle=$_POST['calle2'];
    $col_fracc=$_POST['colonia'];
    $nu_ext=$_POST['num'];
    $codigo_postal=$_POST['cp'];
    $titulo=$_POST['titulo'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['paquetes.descripcion'];
    

    
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>



<body>
<h1 align="center">Detalles del evento: </h1>

			
<div class="container p-4 col-md-4">
		<div class="row ">
			<div class="col">
				<div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
                <form action="" class="text-center "  >
                <div class="form-group">

                <label>folio: </label>
                <label><?php echo $fila['id_evento']  ?>
                        </div>

						
						<div class="form-group ">
						
                        <label>Hora del evento:</label>
    <label><?php echo $fila['hora']  ?></label>
						</div>
                        <div class="form-group ">
						
                        <label>Fecha del evento:</label>
                <label><?php echo $fila['fecha']  ?></label>
						</div>
                        <div class="form-group ">
						<label>Cliente:</label>
                <label><?php echo $fila['id_clientes']?> <?php echo $fila['nom']?> <?php echo $fila['ap1']?> <?php echo $fila['ap2']?></label>
                      
						</div>
                        
                        <div class="form-group ">
						
                        <label>Calle: </label>
                  <label><?php echo $fila['calle2'] ?></label>
						</div>
                        <div class="form-group ">
						<label>Colonia o fraccionamiento:</label>
                  <label><?php echo $fila['colonia'] ?></label>
                      
						</div>
                        <div class="form-group ">
						<label>numero exterior:</label>
                <label><?php echo $fila['num'] ?></label>
                      
						</div>
                        <div class="form-group ">
						<label>Codigo postal:</label>
                <label><?php echo $fila['cp'] ?></label>
                      
						</div>
                        <div class="form-group ">
						
                        <label>Paquete seleccionado:</label>
                <label><?php echo $fila['titulo'] ?></label>
						</div>

                        <div class="form-group ">
						<label>Costo:</label>
                <label><?php echo $fila['precio'] ?></label>
                      
						</div>
                        <div class="form-group ">
						<label>Descripcion:</label>
                <label><?php echo $fila['descripcion'] ?></label>
                      
						</div>
                        



                        
						</form>
                </div>
					
				
			</div>
        </div> 

    </div>      

    <a href="admin_clientes.php" class="btn btn-outline-secondary" class="enlace_menu">Regresar</a>
	           
</body>


</html>






