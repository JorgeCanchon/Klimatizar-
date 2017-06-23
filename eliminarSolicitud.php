<?php 
include_once 'core.php';
require_once 'conectar.php';
$idSoli=$_REQUEST['id'];
$jorge=conectar();
$registro=$jorge->query("SELECT t.idTramite FROM tramiteproducto t INNER JOIN solicitud_tramite s ON s.codigoTramite=t.idTramite WHERE s.codigoSolicitud=$idSoli ORDER BY idTramite  ") or die($jorge->error);
while ($row=$registro->fetch_array()) {
	$codigo=$row['idTramite'];
}
		if($jorge->query("UPDATE tramiteproducto SET visibilidad=0 WHERE idTramite IN(SELECT codigoTramite FROM solicitud_tramite WHERE codigoSolicitud=$idSoli and codigoTramite<=$codigo)") && $jorge->query("UPDATE solicituddematerial SET visibilidad=0 WHERE idSolicitud=$idSoli")){
				$jorge->close();
						echo '<script>alert("Eliminada con exito");
		window.location="solicitudMaterial.php";
		</script>';
		}else{
			$jorge->close();
			echo '<script>alert("Error al eliminar la solicitud");
			window.location="solicitudMaterial.php";</script>';
		}
 ?>