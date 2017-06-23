<?php 
require_once 'core.php';
include 'conectar.php';
 ?>
 <?php 
 $nit=$_POST['NIT'];
$jorge=conectar();
$registros=$jorge->query("select NIT from proveedor where NIT ='" . $nit . "'")or die($jorge->error);
if ($registros==true) {
	$row=$registros->fetch_array();
	if($row['NIT']==$nit){ 
		  header('Location: verProveedor2.php');
			exit();
	}else
	{
	$jorge->query("insert into proveedor (nombreProveedor,NIT,direccion,telefono,contactoVenta,correo,celular) values('$_REQUEST[nombre]','$_REQUEST[NIT]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[contacto]','$_REQUEST[correo]','$_REQUEST[celular]')")or die($jorge->error);
	}
}
{
	 header('Location:verProveedor2.php');
			exit();
}	
$jorge->close();
  ?>
