<?php

if (!$_GET['fecha']) 
{
header('Location: https://i.ytimg.com/vi/Yis0hBj3RW4/maxresdefault.jpg');
}
else
{

$responsable="Flor Carranza";
$destinatario ="luis.claudio@rockdrillgroup.com";
$remitente    = "salas@rockdrillgroup.com";
$asunto       = "Reservas Pendientes por aprobar"; 
$cuerpo =' 
<html>
<head>
<title>Reservas Emitidas</title>
<style>

body{font-family: arial;   font-weight: bold;}

</style>
</head>
<body>
<h2>Hola '.$responsable.',se ha  reservado una nueva sala.</h2>
<h2>
<p>-La fecha de reserva es el  '.$_GET[fecha].' y la Sala # '.$_GET[sala].'.
<p>
-Para  poder aprobar  esa nueva reserva, debes ingresar al siguiente
<a href="http://192.168.1.7/salas">enlace</a> e ir a la pestaña administrador.
</p>
</h2>
<hr>
@admin_reservas
</body>
</html>
'; 

$headers .= 'From: '.$remitente."\r\n".
'Reply-To: '.$remitente."\r\n" .
'X-Mailer: PHP/' . phpversion();

//para el envío en formato HTML 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF-8\r\n"; 

//dirección del remitente 
//$headers .= "From: Luis Claudio <luis.claudio@overprimegroup.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibión copia 
//$headers .= "Cc: $_GET[correosoporte]\r\n";

//direcciones que recibirón copia oculta 
$headers .= "Bcc: luis.claudio@rockdrillgroup.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);

//header('Location: http://192.168.1.8/sistemas/consulta/asignar?id=ok');

//echo "mensaje enviado";

header('Location: http://192.168.1.7/salas/pages/mensaje');

}
?>

