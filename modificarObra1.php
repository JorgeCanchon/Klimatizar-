<?php 
require_once 'core.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Obra</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>	
 <?php 
$jorge=conectar();
 
if($jorge->query("UPDATE obra set
				contratante='$_REQUEST[contratante]',
				nombreObra='$_REQUEST[nombreObra]',
				fechaInicio='$_REQUEST[fechaInicio]',
				fechaFin='$_REQUEST[fechaFin]'
				WHERE codigoObra='$_REQUEST[codi]'")
	){
echo '<script>
alert("Informacion modificada con exito");
window.location="GestionObra.php";
	</script>';
}else
{

	echo '<script>
alert("Problemas al modificar la informacion");
window.location="GestionObra.php";
	</script>';
}
$jorge->close();
  ?>
</body>
</html>