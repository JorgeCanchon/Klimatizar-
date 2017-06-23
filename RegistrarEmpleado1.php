<?php 
require_once 'core.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar Empleado</title>
</head>
<body>
<?php 
include "contrasena.php";
include "conectar.php";
?>	
<?php 
$docu=$_POST['documento'];
$jorge=conectar();
$luis=conectar();
$contraseña=generaPass();
$pass= password_hash($contraseña,PASSWORD_BCRYPT);
$rol=$_REQUEST['idRol'];
$registros=$jorge->query("select Documento from empleado where Documento ='" . $docu . "'")
or die($jorge->error);
if ($registros==true) {
	$row=$registros->fetch_array();
	if($row[0]== $docu){
	
echo '<script type="text/javascript">	
					alert("Documento existente");
					 window.location="GestionEmple.php";
					</script>'; 
			exit();
		}elseif ($rol==1 || $rol==2) {
			$jorge->query("insert into empleado(Documento,NombreCompleto,Direccion,Telefono,Correo,FechaNacimiento,Cargo_codigoCargo,EPS_idEPS,ARL_idARL,AFP_idAFP)
			values
			('$_REQUEST[documento]','$_REQUEST[nombreCompleto]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[correo]','$_REQUEST[fecha]','$_REQUEST[codigoCargo]','$_REQUEST[idEPS]','$_REQUEST[idARL]','$_REQUEST[idAFP]')") or
			die($jorge->error);
			$luis->query("insert into usuario(Usuario,Contrasena,Empleado_Documento,codRol)
				values ('$docu','$pass','$docu',$rol)") or die($luis->error);
			
$para=$_POST['correo'];
$asunto='Usuario Klimatizar';
$mensaje="Usuario:$docu \n Clave: $contraseña";
$cabeceras = 'From: jorgecanchon@gmail.com' . "\r\n" .
             'Reply-To: remitente@dominio.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
mail($para, $asunto, $mensaje, $cabeceras);
			header('Location: GestionEmple.php');
			
		}else{
			$jorge->query("insert into empleado(Documento,NombreCompleto,Direccion,Telefono,Correo,FechaNacimiento,Cargo_codigoCargo,EPS_idEPS,ARL_idARL,AFP_idAFP)
			values
			('$_REQUEST[documento]','$_REQUEST[nombreCompleto]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[correo]','$_REQUEST[fecha]','$_REQUEST[codigoCargo]','$_REQUEST[idEPS]','$_REQUEST[idARL]','$_REQUEST[idAFP]')") or
			die($jorge->error);
				header('Location: GestionEmple.php');
		}
}else
{
	header('Location:GestionEmple.php');
	exit();
}
$jorge->close();

  ?>
</body>
</html>