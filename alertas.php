<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.all.min.js"> </script>

<?php if ($entrar == "admin") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '-BIENVENIDO-',
                text: 'al sistema <?php echo $_SESSION['username'] ?>',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'menu.php';
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "estandar") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '-BIENVENIDO-',
                text: 'al sistema <?php echo $_SESSION['username'] ?>',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'principal.php';
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "error1") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '-Usuario o contraseña incorrectos-',
                text: 'por favor no verifique',
                showConfirmButton: false,
                timer: 1500
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "error2") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '-Ups! Ha ocurrido un error-',
                text: ':(',
                showConfirmButton: false,
                timer: 1500
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "insert") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se registro correctamente',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'menu.php';
            })
        }
        mensaje();
    </script>
  

<?php } elseif ($entrar == "actualizar") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se actualizo el registro exitosamente',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'menu.php';
            })
        }
        mensaje();
    </script>

<?php } elseif ($entrar == "borrar") { ?>

    <script>
        function mensaje() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se elimino exitosamente',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                location.href = 'menu.php';
            })
        }
        mensaje();
    </script>

<script>

<?php } elseif ($entrar == "borrar") { ?>
Swal.fire({
  title: '¿Estas seguro que quieres eliminar este registro?',
  showDenyButton: true,
  showCancelButton: true,
  
  denyButtonText: `Eliminar`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('Saved!', '', 'success')
  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})

</script>
<?php } elseif ($entrar == "actualizar2") { ?>

<script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se actualizo el registro exitosamente',
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            location.href = 'Paquetesyprecios.php';
        })
    }
    mensaje();
</script>
<?php } elseif ($entrar == "error3") { ?>

<script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: '-Ups! Ha ocurrido un error-',
            text: ':(',
            showConfirmButton: false,
            timer: 1500
        })
    }
    mensaje();
</script>
<?php } elseif ($entrar == "actualizar3") { ?>

<script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se actualizo el registro exitosamente',
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            location.href = 'contacto.php';
        })
    }
    mensaje();
</script>
<?php } elseif ($entrar == "actualizar4") { ?>

<script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se actualizo el registro exitosamente',
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            location.href = 'quienesomos.php';
        })
    }
    mensaje();
</script>
<?php } elseif ($entrar == "actualizar5") { ?>

<script>
    function mensaje() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se actualizo el registro exitosamente',
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            location.href = 'inicio.php';
        })
    }
    mensaje();
</script>
<?php } ?>






   

