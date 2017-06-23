<?php 
require_once 'core.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Proveedor</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>	
 <?php 
$jorge=conectar();

if($jorge->query(" UPDATE proveedor 
SET nombreProveedor='$_REQUEST[nombreP]',
direccion='$_REQUEST[Direccion]',
telefono='$_REQUEST[Telefono]',
contactoVenta='$_REQUEST[contacto]',
correo='$_REQUEST[Correo]',
celular='$_REQUEST[celu]'
where NIT='$_REQUEST[nitP]'")
	)
{
	echo '<script>alert("Informacion modificada con exito");
	window.location="verProveedor2.php";</script>';
}else{
	echo '<script>alert("Error al modificar informacion");
	window.location="verProveedor2.php";</script>';
}
$jorge->close();
  ?>
</body>
</html>