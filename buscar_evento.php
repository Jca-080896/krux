 <?php 

include_once("conexion.php");
include_once("sesiones.php");


$tabla="";
$query="select * from eventos join registro on eventos.id_clientes=registro.cliente join paquetes on paquetes.id=eventos.id_paq order by id_evento";


if(isset($_POST['eventos']))
{
    $q=$con->real_escape_string($_POST['eventos']);
    $query="select * from eventos join registro on eventos.id_clientes=registro.cliente join paquetes on paquetes.id=eventos.id_paq where
    id_evento like '%".$q."%' OR
    id_clientes like '%".$q."%' OR
    
    nom like '%".$q."%' OR
    ap1 like '%".$q."%' OR
    ap2 like '%".$q."%' OR
    
    hora like '%".$q."%' OR
    fecha like '%".$q."%' OR
    titulo like '%".$q."%' 
    


    ";
}

$buscar=$con->query($query);
if($buscar->num_rows > 0 )
{
    $tabla.=
    ' 
            <table class="table table-striped" >
                <thead>
                    <tr>
                    </tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Paquete</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Lugar del evento</th>
                    
                    <th scope="col">Acciones</th>
                    
                </thead>
    
    ';



while($fila= $buscar->fetch_assoc())
{
    $tabla.=
    '	
     <tr>
	            
				<td>'.$fila['id_evento'].'</td>
                <td>'.$fila['nom'].' '.$fila['ap1'].' '.$fila['ap2'].'</td>
                <td>'.$fila['titulo'].'</td>
                <td>'.$fila['hora'].'</td>
                <td>'.$fila['fecha'].'</td>
				<td>'.$fila['calle2'].' '.$fila['num'].' '.$fila['colonia'].' '.$fila['cp'].'</td>
				

				
                <td class="table_data" colspan="4" >
                
                <a class="btn btn-success" role="button" href="ver.php?id='.$fila['id_evento'].'"><i class="bi bi-eye-fill"></i></a>
				<a class="btn btn-warning" role="button" href="editar.php?id='.$fila['id_evento'].'"><i class="bi bi-pencil-square "></i></a>
                <a class="btn btn-danger" role="button" href="eliminar.php?id='.$fila['id_evento'].'"><i class="bi bi-trash3-fill"></i></a>
				
                </td>

           

				
			</tr>
	       
        ';
                    
      

}



			
                
$tabla.='</table>';
}else{
    $tabla="no se encontraron coincidencias";
}

echo $tabla;

?> 