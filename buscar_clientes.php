<?php 

include_once("conexion.php");
include_once("sesiones.php");


$tabla="";
$query="select * from clientes order by id";

if(isset($_POST['clientes']))
{
    $q=$con->real_escape_string($_POST['clientes']);
    $query="select * from clientes where
    id like '%".$q."%' OR
    nombre like '%".$q."%' OR
    ape1 like '%".$q."%' OR
    ape2 like '%".$q."%' OR
    email like '%".$q."%' OR
    telefono like '%".$q."%' 
    ";
}

$buscar=$con->query($query);
if($buscar->num_rows > 0)
{
    $tabla.=
    ' 
            <table class="table table-striped" >
                <thead>
                    <tr>
                    </tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido paterno</th>
                    <th scope="col">Apellido materno</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    
                    
                </thead>
    
    ';



while($fila= $buscar->fetch_assoc())
{
    $tabla.=
    '	
     <tr>
	            
				<td>'.$fila['id'].'</td>
                <td>'.$fila['nombre'].'</td>
                <td>'.$fila['ape1'].'</td>
                <td>'.$fila['ape2'].'</td>
                <td>'.$fila['email'].'</td>
				<td>'.$fila['telefono'].'</td>

				
                <td class="table_data" colspan="4" >
                
                
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