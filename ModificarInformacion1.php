<?php 
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Empleado</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>	
 <?php 
$jorge=conectar();

if (($jorge->query("UPDATE usuario SET 
     Usuario='$_REQUEST[usuario]' where Empleado_Documento='$_SESSION[empleado]';
	")) & ($jorge->query("UPDATE empleado SET
				NombreCompleto='$_REQUEST[nombreCompleto]',Direccion='$_REQUEST[Direccion]',
				Telefono='$_REQUEST[Telefono]',Correo='$_REQUEST[Correo]',
				FechaNacimiento='$_REQUEST[FechaN]',Cargo_codigoCargo='$_REQUEST[Cargo]',EPS_idEPS='$_REQUEST[idEPS]',
				ARL_idARL='$_REQUEST[idARL]',AFP_idAFP='$_REQUEST[idAFP]'
				where Documento='$_SESSION[empleado]'"
			)	)) {
	  echo '<script>alert("Informacion modificada con exito");
	window.location="Principal.php";</script>';
}else{
  echo '<script>alert("Error al modificar la informacion");
	window.location="Principal.php";</script>';
}
  $jorge->close();

  ?>
</body>
</html>
