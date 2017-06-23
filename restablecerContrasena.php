<?php 
require_once('conectar.php');
include "contrasena.php";
$contrasena=generaPass();
$para=$_POST['correo'];
$usuario=$_POST['usuario'];
$fecha=getdate();
$new=$fecha['year']."-".$fecha['mon']."-".$fecha['mday'];
$asunto='Restablecer contraseña usuario Klimatizar';
$mensaje="\n Usuario:$docu \n Clave: $contrasena \n Fecha:$new";
$cabeceras = 'From: jorgecanchon@gmail.com' . "\r\n" .
             'Reply-To: remitente@dominio.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
//Conexion para comprobar el usuario y correo
// del usuario a reestablecer contraseña
$jorge=conectar();
if($registro=$jorge->query("SELECT u.Usuario,e.correo FROM usuario u
INNER JOIN empleado e
ON e.Documento=u.Empleado_Documento
WHERE e.correo='$para' AND u.Usuario='$usuario'"))
{
		if (($registro->num_rows)>0) 
		{
			$newPassword=password_hash($contrasena,PASSWORD_BCRYPT);
			if ($jorge->query("UPDATE usuario SET
				Contrasena='$newPassword'
				WHERE Usuario='$usuario'
				")) 
			{
				if((mail($para, $asunto, $mensaje, $cabeceras)))
					{
								$jorge->close();
							echo '<script type="text/javascript">	
												alert("Contraseña restablecida");
												 window.location="../loguin.php";
												</script>'; 
					}else{
										$jorge->close();	
							echo '<script type="text/javascript">	
												alert("No se pudo restablecer la contraseña");
												 window.location="../loguin.php";
												</script>';
						}	
			}else{
				echo '<script type="text/javascript">	
												alert("No se pudo restablecer la contraseña :/");
												 window.location="../loguin.php";
												</script>';
			}		
		}else{
			$jorge->close();
			echo '<script type="text/javascript">	
												alert("No se pudo restablecer la contraseña");
												 window.location="../loguin.php";
												</script>';
		}
}else{
	$jorge->close();
			echo '<script type="text/javascript">	
							alert("Error al restablecer la contraseña");
							 window.location="../loguin.php";
							</script>'; 

		}
		$jorge->close();
?>