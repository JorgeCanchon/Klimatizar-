<?php 
require_once('core.php');
include_once 'conectar.php';
$jorge=conectar();
		$jorge->query("UPDATE cliente set visibilidad=0 WHERE codigoCliente='$_REQUEST[id]'")or die($jorge->error);
		$jorge->close();
		header('Location:GestionCliente.php');
 ?>