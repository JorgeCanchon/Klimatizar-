<?php 
include_once 'conectar.php';
$jorge=conectar();
if($jorge->connect_error)
die('Problemas con la conexion a la base de datos');

		$jorge->query("UPDATE obra set visibilidad=0 WHERE idObra='$_REQUEST[codigo]'")or die($jorge->error);
		$jorge->close();
		header('Location: GestionObra.php');
 ?>