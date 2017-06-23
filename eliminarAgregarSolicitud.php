<?php 
require_once('core.php');
require_once('conectar.php');
$idSoli=$_REQUEST['id'];
$codigo=$_REQUEST['codigo'];
if ($codigo==0) {
	$jorge=conectar();
		if($jorge->query("DELETE FROM solicituddematerial WHERE idSolicitud=$idSoli")){
		echo '<script>alert("Cancelado con exito");
		window.location="solicitudMaterial.php";
		</script>';
		}else{
			echo '<script>alert("Error al cancelar la solicitud");
			window.location="solicitudMaterial.php";</script>';
		}
}else{
	//SET FOREIGN_KEY_CHECKS = 0;
	$jorge=conectar();
	$jorge->query("SET FOREIGN_KEY_CHECKS = 0");
			$jorge->query("SET FOREIGN_KEY_CHECKS = 0");
		if($jorge->query("DELETE FROM tramiteproducto WHERE idTramite IN(SELECT codigoTramite FROM solicitud_tramite WHERE codigoSolicitud=$idSoli and codigoTramite<=$codigo)")&&$jorge->query("DELETE FROM solicitud_tramite WHERE codigoSolicitud=$idSoli and codigoTramite<=$codigo") && $jorge->query("DELETE FROM solicituddematerial WHERE idSolicitud=$idSoli")){
				$jorge->query("SET FOREIGN_KEY_CHECKS = 1");
						echo '<script>alert("cancelada con exito");
		window.location="solicitudMaterial.php";
		</script>';
		}else{
			echo '<script>alert("Error al cancelar la solicitud");
			window.location="solicitudMaterial.php";</script>';
		}
	}
$jorge->close();
 ?>