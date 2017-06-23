<?php
require_once 'core.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar AFP</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>	
 <?php 
$jorge=conectar();

if($jorge->query("CALL modificarCliente('$_REQUEST[nombreCliente]',$_REQUEST[codigo],'$_REQUEST[telefono]','$_REQUEST[direccion]')"
			)
)	
{
echo '<script>
alert("Informacion modificada con exito");
	window.location="GestionCliente.php";</script>';
}else{
	echo '<script>alert("Error al modificar la informacion");
	window.location="GestionCliente.php";</script>';
}
$jorge->close();

  ?>
</body>
</html>