<?php 
require_once('core.php');
include_once 'conectar.php';
$jorge=conectar();
		$jorge->query("UPDATE cargo set visibilidad=0 WHERE codigoCargo='$_REQUEST[codigo]'")or die($jorge->error);
		$jorge->close();
		header('Location: Cargo1.php');
 ?>