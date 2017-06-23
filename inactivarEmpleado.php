<?php
require_once 'core.php';
include ('conectar.php');
$jorge=conectar();
$registro=$jorge->query("select Usuario from usuario")or die($jorge->error);
$row=$registro->fetch_array();
if ($row['Usuario']==$_REQUEST['Documento']) {
	$jorge->query("update empleado set visibilidad=0 where Documento=$_REQUEST[Documento]") or die($jorge->error);
	$jorge->query("update usuario set visibilidad=0 where Usuario=$_REQUEST[Documento]")or die($jorge->error);
}else
{
$jorge->query("update empleado set visibilidad=0 where Documento=$_REQUEST[Documento]") or die($jorge->error);
$jorge->close();
}
	header('Location:GestionEmple.php');
 ?>