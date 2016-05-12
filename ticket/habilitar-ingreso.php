<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Habilitar Ingreso</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<form action="ticket-habilitado.php" method="POST">
<div class="form-group">
<label for="">Usuario</label>
<input type="text" name="usuario" required="">
</div>


<div class="form-group">
<label for="">Correo usuario</label>
<input type="email" name="correo" id="" value="@rockdrillgroup.com" required="">
</div>

<button  class="btn btn-primary">Habilitar</button>
	

</form>




</div>
</div>
</div>

</body>
</html>