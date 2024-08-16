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
    <title>Galeria</title>
    <link rel="stylesheet" href="style_header.css">
    <link rel="stylesheet" href="lightbox.min.css">
</head>

<body>

    <!-- en esta paret inicia la vista que tendria el usuario admin -->



    <h1 align="center">Sistema de Gestión Krux</h1>

    <div class="container p-4 col-md-6">
        <div class="row ">
            <div class="col">
                <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
                    <form action="guardar_img.php" method="post" class="text-center " enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="form-label">ELige contenedor de la foto</label>
                            <a class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <i class="bi bi-info-circle"></i>
                            </a>

                            <div class="col text-center">
                                <div class="collapse" id="collapseExample" colmd-8>
                                    <div class="card card-body ">
                                        <div>
                                            <i class="bi bi-1-square"></i>
                                            <i class="bi bi-2-square"></i>
                                            <i class="bi bi-3-square"></i>

                                        </div>

                                        <div>
                                            <i class="bi bi-4-square"></i>
                                            <i class="bi bi-5-square"></i>
                                            <i class="bi bi-6-square"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <select class="form-select" name="opcion" aria-label="Default select example">
                                <option selected>Selecciona el contenedor </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>


                            </select>
                        </div>

                        <div class="form-group ">
                            <label for="exampleFormControlInput1" class="form-label">ELige la imagen:</label>

                            <input type="file" name="imagen" class="form-control">
                        </div>


                        <input value="Guardar Imagen" type="submit" name="guardar" class="btn btn-success mt-3">
                    </form>
                    <?php  if(isset($_SESSION['mensaje'])){ ?>
                    <div class="alert alert-<?php echo $_SESSION['tipo']?> alert-dismissible fade show" role="alert">
                        <strong><?php echo $_SESSION['mensaje']; ?></strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>
                </div>


            </div>
        </div>

    </div>











</body>

</html>