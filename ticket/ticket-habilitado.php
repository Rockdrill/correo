<?php

if (!$_POST['usuario']) 
{
header('Location: https://i.ytimg.com/vi/Yis0hBj3RW4/maxresdefault.jpg');
}
else
{

$responsable  =$_POST['usuario'];
$destinatario =$_POST['correo'];
$remitente    = "ticket@rockdrillgroup.com";
$asunto       = "Habilitar Ingreso de Ticket"; 
$cuerpo =' 
<html>
<head>
<title>Habilitar Ingreso de Ticket</title>
<style>

body{font-family: arial;   font-weight: bold;}

</style>
</head>
<body>
<h2>Hola '.$_POST['usuario'].',se habilito el ingreso al administrador de Ticket.</h2>
<h2>
<p>
-Para  poder acceder, debes ingresar al siguiente
<a href="http://192.168.1.7/sistemas">enlace</a>.
</p>
</h2>
<hr>
@admin_ticket
<p>Favor de no responder este mensaje,es un correo automatico</p>
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

echo "correo enviado";

}
?>

