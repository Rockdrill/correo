<?php 
if (isset($_GET['usuario']) AND isset($_GET['ticket'])) 
{
  
$destinatario =$_GET['correousuario'];
$remitente    =$_GET['correosoporte'];
$asunto       = "Ticket Solucionado N°".$_GET['ticket']; 
$cuerpo =' 
<html> 
<head> 
<title>Ticket Solucionado</title>
<link rel="stylesheet" href="estilos.css">
</head> 
<body> 
<h1>Solución de Ticket N° '.$_GET[ticket].'</h1>
<hr>
Hola '.$_GET[usuario].', el ticket N° '.$_GET[ticket].'  con el detalle:
<br>'.$_GET[detalle].'<br>
Ha sido solucionado con el siguiente detalle:
<br>
'.$_GET[solucion].'
<p>Favor de verificar la solución y confirmar por este medio.</p>
<hr>
Atentamente. <br> @soporte_'.$_GET[empresa].'
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

header('Location: http://192.168.1.7/sistemas/respuesta/correo-enviado');
}
else
{
  header('Location: http://www.incomica.com/wp-content/uploads/2014/01/no-existe-el-infierno.jpg');
}



?>

