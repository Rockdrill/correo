<?php 

if (isset($_POST['usuario']) and isset($_POST['email']) and isset($_POST['path'])) 
{
 
$destinatario = $_POST['email'];
$remitente    ="oc@overprimegroup.com";
$asunto       = "Ordenes de Compra por Firmar"; 
$cuerpo =' 
<html> 
<head> 
<title>Ordenes de Compra por Firmar</title>
</head> 
<body> 
<h1>Ordenes de Compra por Firmar</h1> 
<p> 
'. $_POST['mensaje'].'.
</p> 
<p>
Este mensaje se genera de manera automática,no responder por favor.
</p>
</body> 
</html> 
'; 

$headers .= 'From: '.$_POST['email']."\r\n".
'Reply-To: '.$_POST['email']."\r\n" .
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
//$headers .= "Cc: wilder.garcia@codrise.com\r\n";
//$headers .= "Cc: martha.peralta@codrise.com\r\n";
//$headers .= "Cc: elvis.janampa@codrise.com\r\n"; 

//direcciones que recibirón copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);

header('Location: '.$_POST['path'].'?ok');
}

else
{
   header('Location: http://www.incomica.com/wp-content/uploads/2014/01/no-existe-el-infierno.jpg');

}











?>