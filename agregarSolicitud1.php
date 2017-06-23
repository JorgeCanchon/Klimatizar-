<?php 
require_once('conectar.php');
require_once('core.php');
$jorge=conectar();
$jorge->query("SET FOREIGN_KEY_CHECKS = 0");
$jorge->query("INSERT INTO solicituddematerial
	(idSolicitud,codigoCliente,codDocumento,codigoObra,observaciones)
	VALUES($_POST[idSolicitud],$_POST[codigoCliente],'$_POST[docu]','$_POST[codigoObra]','$_POST[observacion]') ")or die($jorge->error);
$jorge->query("SET FOREIGN_KEY_CHECKS = 1");
$a=$_POST['idSolicitud'];
$_SESSION['solicitud']=$a;
header("Location:agregarSolicitudProducto.php");
 ?>
