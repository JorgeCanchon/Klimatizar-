<?php 
require_once 'core.php';
?>
<?php
$password=$_REQUEST['actual'];
$password1=$_REQUEST['nueva']; 
include "conectar.php";
$jorge=conectar();
$registro=$jorge->query("select Empleado_Documento,Contrasena  from usuario where Empleado_Documento='" . $_SESSION['empleado'] . "'")or die($jorge->error);
$row=$registro->fetch_array();
if ($validar=password_verify($password, $row['Contrasena']))
 {
	$luis=conectar();
	$newPassword=password_hash($password1,PASSWORD_BCRYPT);
	$id=$_SESSION['empleado'] ;
	$luis->query("update usuario set Contrasena='$newPassword' where Empleado_Documento='$id'")or die($luis->error);
	$luis->close();
	$jorge->close();
	echo '<script type="text/javascript">	
					alert("contraseña modificada");
					window.location="cerrarSesion.php";
		</script>'; 
}else
{
	echo '<script type="text/javascript">	
					alert("contraseña actual incorrecta");
					window.location="modificarContrasena1.php";
		</script>'; 
}
?>