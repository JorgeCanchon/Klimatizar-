<?php 
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
include 'conectar.php';
 ?>
 <?php 
$jorge=conectar();
$jorge->query("SET FOREIGN_KEY_CHECKS=0");

$registros=$jorge->query("select  Proveedor_NIT from proveedor_producto")or die($jorge->error);
$row=$registros->fetch_array();
if ($row['Proveedor_NIT']==$_REQUEST['proveedor']) {
header("Location:producto.php");
}else
{
	$jorge->query("insert into proveedor_producto (Producto_codigoProducto,Proveedor_NIT)
    values('$_REQUEST[producto]','$_REQUEST[proveedor]')")or die($jorge->error);
$jorge->close();
header("Location:producto.php");
exit();
}
  ?>