<?php 
require_once('core.php');
include_once 'conectar.php';
$jorge=conectar();
		$jorge->query("UPDATE eps set visibilidad=0 WHERE idEPS='$_REQUEST[codigo]'")or die($jorge->error);
		$jorge->close();
		header('Location:GestionEPS.php');
 ?>