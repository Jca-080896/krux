
<?php
// Varios destinatarios
$para  = '$email' . ', '; // atención a la coma


// título
$título = 'Recordatorio de cumpleaños para Agosto';
$codigo=rand(1000-9999);
// mensaje
$mensaje = '
<html>
<head>
  <title>Recuperacion</title>
</head>
<body>
  <p>¡Estos son los cumplea</p>
  <h1>'.$codigo.'</h1>
  <p><a href="http://localhost:8080/appweb/parcial2/proyectos/proyecto-krux/reset.php?email='.$email.'&token='.$token.'" >para restablecer da click aqui</a>

</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales

/*
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
// Enviarlo

$enviado =false;
if(mail($para,$titulo,$mensaje,$cabeceras)){
    $enviado=true;
}

?>
