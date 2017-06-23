<?php
require_once 'core.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar EPS</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>	
 <?php 
$jorge=conectar();

if($jorge->query("CALL modificarEPS('$_REQUEST[nombreEPS]',$_REQUEST[codigo])"
			)
)	
{
echo '<script>alert("Informacion modificada con exito");
	window.location="GestionEPS.php";</script>';
}else{
	echo '<script>alert("Error al modificar la informacion");
	window.location="GestionEPS.php";</script>';
}
$jorge->close();

  ?>
</body>
</html>