<?php
require_once 'core.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Cargo</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>	
 <?php 
$jorge=conectar();

if($jorge->query("CALL modificarCargo('$_REQUEST[nombreCargo]','$_REQUEST[Descripcion]',$_REQUEST[codigo])"
			)){
echo '<script>alert("Informacion modificada con exito");
	window.location="Cargo1.php";</script>';
}else{
echo '<script>alert("Error al modificar la informacion");
	window.location="Cargo1.php";</script>';
}
$jorge->close();
  ?>
</body>
</html>