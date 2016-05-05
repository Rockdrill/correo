<?php 

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
<h2>Hola,este es un mensaje automatico del aplicativo
de reservas de salas.</h2></br>
<h4>
Actualmente eres el responsable de aprobar las salas reservadas.<br>
Tienes que ingresar al este <a href="http://192.168.1.7/salas/">enlace</a>
e ir  a la pestaña administrador.
</h4>
<hr>
Gracias.
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
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);

//header('Location: http://192.168.1.8/sistemas/consulta/asignar?id=ok');

echo "mensaje enviado";



?>

