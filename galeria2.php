<?php
 
include_once("boostrap2.php");
include_once("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="style_header.css">
    <link rel="stylesheet" href="lightbox.min.css">
</head>
<body>


        

<script src="lightbox-plus-jquery.min.js"></script>
<script src="lightbox.min.js"></script>
<script src="app.js"></script>

<main>
    <div class="contenedorgale">
        
        <div class="banner">
            <h2>Convencete viendo nuestro trabajo</h2>
            
        </div>
    </div>

    <div class="galery-container">
        <div class="galery-card">
        
            <a href="images/<?php 
            
            $query = "select * from galeria where galeria.id=1 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>
                
                
                " data-lightbox="roadtrip">
                <img src="images/<?php 
            
            $query= "select * from galeria where galeria.id=1 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>" alt="">
            </a>

            
        </div>
        <div class="galery-card">
            <a href="images/<?php 
            
            $query = "select * from galeria where galeria.id=2 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>" data-lightbox="roadtrip">
                <img src="images/<?php 
            
            $query = "select * from galeria where galeria.id=2 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>" alt="">
            </a>
        </div>
        <div class="galery-card">
            <a href="images/<?php 
            
            $query = "select * from galeria where galeria.id=3 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>"" data-lightbox="roadtrip">
                <img src="images/<?php 
            
            $query = "select * from galeria where galeria.id=3 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>"" alt="">
            </a>
        </div>
        <div class="galery-card">
            <a href="images/<?php 
            
            $query = "select * from galeria where galeria.id=4 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>"" data-lightbox="roadtrip">
                <img src="images/<?php 
            
            $query = "select * from galeria where galeria.id=4 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>"" alt="">
            </a>
        </div>
        <div class="galery-card">
            <a href="images/<?php 
            
            $query = "select * from galeria where galeria.id=5 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>"" data-lightbox="roadtrip">
                <img src="images/<?php 
            
            $query = "select * from galeria where galeria.id=5 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>"" alt="">
            </a>
        </div>
        <div class="galery-card">
            <a href="images/<?php 
            
            $query = "select * from galeria where galeria.id=6 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>"" data-lightbox="roadtrip">
                <img src="images/<?php 
            
            $query = "select * from galeria where galeria.id=6 ";
            $resultado= mysqli_query($con,$query);
            foreach($resultado as $row){
                echo $row['foto'];
            }
                ?>"" alt="">
            </a>
        </div>
    </div>


</main>
</body>
</html>

               