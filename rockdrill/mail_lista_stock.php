<?php 
if (isset($_GET['usuario'])) 
{
  
$destinatario ="nancy.escola@rockdrillgroup.com";
$remitente    ="reservas@rockdrillgroup.com";
$asunto       = "Lista de Compra"; 
$cuerpo =' 
<html> 
<head> 
<title>Lista de Compra</title>
<style>
.enlaceboton {    
font-family: verdana, arial, sans-serif; 
font-size: 12pt; 
font-weight: bold; 
padding: 10px; 
background-color: #00AAFF; 
color: #fff; 
text-decoration: none; 
} 
.enlaceboton:link, 
.enlaceboton:visited { 
border-top: 1px solid #00AAFF; 
border-bottom: 2px solid #00AAFF; 
border-left: 1px solid #00AAFF; 
border-right: 2px solid #00AAFF; 
border-radius: 5px;
} 



</style>

</head> 
<body> 
<b>
<h1>Lista de Compra Nueva(Stock) - Modulo de Reservas Rockdrill</h1> 
<p> 
El  Usuario '. $_GET[usuario].'	 acaba de generar una nueva lista de compra,con articulos que
no tienen Stock,para poder  consultar la información generada puede acceder a  la ruta
<a href="http://192.168.1.7/rockdrill/adm-reserva/" 
target="_blank">Administrador Modulo de Reservas</a> o descargar la lista del siguiente enlace:
</p> 
<p><a href="http://192.168.1.7/rockdrill/reserva/pdf/excel-lista-de-compra"
target="_blank" class="enlaceboton">Descargar Lista</a></p>
<hr>
<p>@soporte_reservas</p>
<p>Slds Coordiales.</p>

<hr>
</b>
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
$headers .= "Cc: jose.peralta@rockdrillgroup.com\r\n";
$headers .= "Cc: jorge.guillermo@rockdrillgroup.com\r\n";
$headers .= "Cc: luis.mayoria@rockdrillgroup.com\r\n";
$headers .= "Cc: luis.claudio@rockdrillgroup.com\r\n";

//direcciones que recibirón copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);

header('Location: http://192.168.1.7/rockdrill/reserva/consulta/carga-excel?msj='.'ok');
}
else
{
  header('Location: http://www.incomica.com/wp-content/uploads/2014/01/no-existe-el-infierno.jpg');
}



?>