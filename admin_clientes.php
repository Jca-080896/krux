<?php include_once("sesiones.php");
include_once("boostrap.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script_eventos.js"></script>
</head>
<body>
<h1 align="center">Administrar Eventos</h1>

<tr>
<td><a class="btn btn-outline-primary" href="menu.php" role="button">Registrar </a> </td>
    <td><a class="btn btn-outline-primary" href="cliente_nuevo.php" role="button">Nuevo </a> </td>
    <td><a class="btn btn-primary" href="admin_clientes.php" role="button">Administrar </a></td>
</tr>

<div class="row">
			<div class="col-md-12 mt-4">
				<section ">
			<input type=" text" class="form-control" name="busqueda" id="busqueda" placeholder="buscar...">
				</section>
				<section id="tabla_resultado" class="">

				</section>

			</div>

		</div>
</body>
</html>