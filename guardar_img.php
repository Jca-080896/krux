<?php
include_once("sesiones.php");
include_once("boostrap.php");


include_once("conexion.php");
if ($_REQUEST['opcion'] == '1') { 


    

    if (isset($_POST['guardar'])) {
        $imagen = $_FILES['imagen']['name'];


        

        if (isset($imagen) && $imagen != "") {
            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];


            

            if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'jpg')))) {
                $_SESSION['mensaje'] = 'solo se permiten archivos jpeg,gif,jpg';
                $_SESSION['tipo'] = 'danger';
                header('location: galeria.php');

                
            } else {

                
                $query = "update galeria set foto='$imagen' where galeria.id=1";
                $resultado = mysqli_query($con, $query);
                if ($resultado) {
                    
                    move_uploaded_file($temp, 'images/' . $imagen);
                    $_SESSION['mensaje'] = 'se ha subido correctamente';
                    $_SESSION['tipo'] = 'success';
                    header('location: galeria.php');
                } else {
                    
                    $_SESSION['mensaje'] = 'ocurrio algun error';
                    $_SESSION['tipo'] = 'danger';
                }
            }
        }
    }
 
} 
else if ($_REQUEST['opcion'] == '2') { 


    

    if (isset($_POST['guardar'])) {
        $imagen = $_FILES['imagen']['name'];


        

        if (isset($imagen) && $imagen != "") {
            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];


            

            if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'jpg')))) {
                $_SESSION['mensaje'] = 'solo se permiten archivos jpeg,gif,jpg';
                $_SESSION['tipo'] = 'danger';
                header('location: galeria.php');

                
            } else {

                
                $query = "update galeria set foto='$imagen' where galeria.id=2";
                $resultado = mysqli_query($con, $query);
                if ($resultado) {
                    
                    move_uploaded_file($temp, 'images/' . $imagen);
                    $_SESSION['mensaje'] = 'se ha subido correctamente';
                    $_SESSION['tipo'] = 'success';
                    header('location: galeria.php');
                } else {
                    
                    $_SESSION['mensaje'] = 'ocurrio algun error';
                    $_SESSION['tipo'] = 'danger';
                }
            }
        }
    }
 
} 
else if ($_REQUEST['opcion'] == '3') { 


    

    if (isset($_POST['guardar'])) {
        $imagen = $_FILES['imagen']['name'];


        

        if (isset($imagen) && $imagen != "") {
            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];


            

            if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'jpg')))) {
                $_SESSION['mensaje'] = 'solo se permiten archivos jpeg,gif,jpg';
                $_SESSION['tipo'] = 'danger';
                header('location: galeria.php');

                
            } else {

                
                $query = "update galeria set foto='$imagen' where galeria.id=3";
                $resultado = mysqli_query($con, $query);
                if ($resultado) {
                    
                    move_uploaded_file($temp, 'images/' . $imagen);
                    $_SESSION['mensaje'] = 'se ha subido correctamente';
                    $_SESSION['tipo'] = 'success';
                    header('location: galeria.php');
                } else {
                    
                    $_SESSION['mensaje'] = 'ocurrio algun error';
                    $_SESSION['tipo'] = 'danger';
                }
            }
        }
    }
 
} 
else if ($_REQUEST['opcion'] == '4') { 


    

    if (isset($_POST['guardar'])) {
        $imagen = $_FILES['imagen']['name'];


        

        if (isset($imagen) && $imagen != "") {
            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];


            

            if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'jpg')))) {
                $_SESSION['mensaje'] = 'solo se permiten archivos jpeg,gif,jpg';
                $_SESSION['tipo'] = 'danger';
                header('location: galeria.php');

                
            } else {

                
                $query = "update galeria set foto='$imagen' where galeria.id=4";
                $resultado = mysqli_query($con, $query);
                if ($resultado) {
                    
                    move_uploaded_file($temp, 'images/' . $imagen);
                    $_SESSION['mensaje'] = 'se ha subido correctamente';
                    $_SESSION['tipo'] = 'success';
                    header('location: galeria.php');
                } else {
                    
                    $_SESSION['mensaje'] = 'ocurrio algun error';
                    $_SESSION['tipo'] = 'danger';
                }
            }
        }
    }
 
} 
else if ($_REQUEST['opcion'] == '5') { 


    

    if (isset($_POST['guardar'])) {
        $imagen = $_FILES['imagen']['name'];


        

        if (isset($imagen) && $imagen != "") {
            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];


            

            if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'jpg')))) {
                $_SESSION['mensaje'] = 'solo se permiten archivos jpeg,gif,jpg';
                $_SESSION['tipo'] = 'danger';
                header('location: galeria.php');

                
            } else {

                
                $query = "update galeria set foto='$imagen' where galeria.id=5";
                $resultado = mysqli_query($con, $query);
                if ($resultado) {
                    
                    move_uploaded_file($temp, 'images/' . $imagen);
                    $_SESSION['mensaje'] = 'se ha subido correctamente';
                    $_SESSION['tipo'] = 'success';
                    header('location: galeria.php');
                } else {
                    
                    $_SESSION['mensaje'] = 'ocurrio algun error';
                    $_SESSION['tipo'] = 'danger';
                }
            }
        }
    }
 
} 

else if ($_REQUEST['opcion'] == '6') { 


    

    if (isset($_POST['guardar'])) {
        $imagen = $_FILES['imagen']['name'];


        

        if (isset($imagen) && $imagen != "") {
            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];


            

            if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'jpg')))) {
                $_SESSION['mensaje'] = 'solo se permiten archivos jpeg,gif,jpg';
                $_SESSION['tipo'] = 'danger';
                header('location: galeria.php');

                
            } else {

                
                $query = "update galeria set foto='$imagen' where galeria.id=6";
                $resultado = mysqli_query($con, $query);
                if ($resultado) {
                    
                    move_uploaded_file($temp, 'images/' . $imagen);
                    $_SESSION['mensaje'] = 'se ha subido correctamente';
                    $_SESSION['tipo'] = 'success';
                    header('location: galeria.php');
                } else {
                    
                    $_SESSION['mensaje'] = 'ocurrio algun error';
                    $_SESSION['tipo'] = 'danger';
                }
            }
        }
    }
 
} 
    
