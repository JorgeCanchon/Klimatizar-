<?php 
require_once('core.php');
include_once 'conectar.php';
$jorge=conectar();
		$jorge->query("UPDATE arl set visibilidad=0 WHERE idARL='$_REQUEST[id]'")or die($jorge->error);
		$jorge->close();
		header('Location:GestionARL.php');
 ?>