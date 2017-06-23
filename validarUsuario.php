<?php 
include "conectar.php";
 ?>
 <?php 
$usuario=$_POST['nombreUsuario'];
$password=$_POST['password'];
if(empty($usuario)||empty($password))
{
 header('Location:../loguin.php');	
 exit();
}
?>
<?php 
$jorge=conectar();
$registro=$jorge->query("SELECT Usuario,Contrasena,codRol,visibilidad FROM usuario WHERE Usuario='" . $usuario . "'")
or die($jorge->error);
		if($registro==true)
		{
			$row=$registro->fetch_array();
			
				if(($validar=password_verify($password, $row['Contrasena']))&($row['Usuario']==$usuario) & ($row['visibilidad']==1)){
					session_start();
					 $_SESSION['estado']=1;
				$j=$jorge->query("SELECT empleado.Documento, empleado.NombreCompleto AS Nombre FROM empleado INNER JOIN usuario ON usuario.Empleado_Documento=empleado.Documento WHERE Usuario='" . $usuario . "'");
				$jo=$j->fetch_array();
				$_SESSION['usuario']=$jo['Nombre'];
				$_SESSION['empleado']=$jo['Documento'];
				if ($row['codRol']==2) {
					header("Location:../ingeniero/PrincipalIngeniero.php");
				}else{
				header("Location:Principal.php");
				}
				}
			else
			{
					$_SESSION['estado']=0;
					echo '<script type="text/javascript">	
					alert("Usuario o contraseña incorrecta");
					window.location="../loguin.php";
					</script>'; 
					}

		}else
		{
			$_SESSION['estado']=0;
			header("Location:../loguin.php");
		}
  ?>

