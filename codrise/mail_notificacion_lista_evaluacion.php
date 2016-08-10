<?php
if (isset($_POST['remitente'])) 
{
  
$destinatario = $_POST['destinatario'];
$remitente    = $_POST['remitente'];
$asunto       = "Lista de Evaluación"; 
$cuerpo =' 
<html> 
<head> 
<title>Lista de Evaluación</title>
</head> 
<body> 
<h2>Notificación Lista de Evaluación</h2>
<hr> 
<p> 
'.$_POST['contenido'].'
</p> 
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
//$headers .= "Cc: wilder.garcia@codrise.com\r\n";
//$headers .= "Cc: martha.peralta@codrise.com\r\n";
//$headers .= "Cc: luis.claudio@codrise.com\r\n"; 

//direcciones que recibirón copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);

header('Location: http://192.168.1.7/pedido/pages/detalle-lista-evaluacion?id='.$_POST['id']);
}

else
{
  header('Location: http://www.incomica.com/wp-content/uploads/2014/01/no-existe-el-infierno.jpg');

}






?>