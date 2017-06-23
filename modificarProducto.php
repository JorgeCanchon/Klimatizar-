<?php 
require_once 'core.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Producto</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>	
 <?php 
$jorge=conectar();

if($jorge->query(" UPDATE producto
SET nombreProducto='$_REQUEST[nombreP]',
cantidad='$_REQUEST[cantidad]',
valorUnitario='$_REQUEST[valor]',
unidad='$_REQUEST[unidad]'
where idProducto='$_REQUEST[codigo]'")
	)
{
	echo '<script>alert("Informacion modificada con exito");
	window.location="producto.php";</script>';
}else{
	echo '<script>alert("Error al modificar informacion");
	window.location="producto.php";</script>';
}
$jorge->close();
  ?>
</body>
</html>