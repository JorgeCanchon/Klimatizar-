<?php
require_once 'core.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Contraseña</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>	
 <?php 
$jorge=conectar();

if($jorge->query("update empleado set
				NombreCompleto='$_REQUEST[nombreCompleto]',Direccion='$_REQUEST[Direccion]',
				Telefono='$_REQUEST[Telefono]',Correo='$_REQUEST[Correo]',
				FechaNacimiento='$_REQUEST[FechaN]',Cargo_codigoCargo='$_REQUEST[Cargo]',EPS_idEPS='$_REQUEST[idEPS]',
				ARL_idARL='$_REQUEST[idARL]',AFP_idAFP='$_REQUEST[idAFP]'
				where Documento='$_REQUEST[Documento]'"
			)
	){
	  echo '<script>alert("Informacion modificada con exito");
	window.location="GestionEmple.php";</script>';
}else{
	  echo '<script>alert("Error al modificar la informacion");
	window.location="GestionEmple.php";</script>';
}
$jorge->close();
  ?>
</body>
</html>
