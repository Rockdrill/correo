<?php 
if (isset($_GET['usuario']) AND isset($_GET['ticket'])) 
{
  
$destinatario =$_GET['correousuario'];
$remitente    =$_GET['correosoporte'];
$asunto       = "Ticket Registrado N°".$_GET['ticket']; 
$cuerpo =' 
<!DOCTYPE html>
<html lang="es">
<head>
<title>Ticket Asignado</title>
<style>

body{font-family: arial;   font-weight: bold;}

th{	text-align: left;}
</style>
</head>
<body>
<h1>Asignación de Ticket</h1>
<h2>Hola '.$_REQUEST[usuario].' el ticket '.$_GET[ticket].'
fue asignado a '.$_REQUEST[usuariosporte].'
Estara coordinando contigo la solución de tu inconveniente.
<br>
Atentamente.
<br>
Área de TI
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
$headers .= "Cc: $_GET[correosoporte]\r\n";

//direcciones que recibirón copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);

header('Location: http://192.168.1.8/sistemas/consulta/seguimiento');
}
else
{
  header('Location: http://www.incomica.com/wp-content/uploads/2014/01/no-existe-el-infierno.jpg');
}



?>

