<?php 
require_once('core.php');
include_once 'conectar.php';
$jorge=conectar();
		$jorge->query("UPDATE afp set visibilidad=0 WHERE idAFP='$_REQUEST[id]'")or die($jorge->error);
		$jorge->close();
		header('Location:GestionAFP.php');
 ?>