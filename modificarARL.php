<?php
require_once 'core.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar ARL</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>	
 <?php 
$jorge=conectar();

if($jorge->query("CALL modificarARL('$_REQUEST[nombreARL]',$_REQUEST[codigo])"
			)
)	
{
echo '<script>
alert("Informacion modificada con exito");
	window.location="GestionARL.php";</script>';
}else{
	echo '<script>alert("Error al modificar la informacion");
	window.location="GestionARL.php";</script>';
}
$jorge->close();

  ?>
</body>
</html>