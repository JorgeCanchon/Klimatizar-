<?php 
error_reporting(0);
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
include 'conectar.php';
 ?>
 <?php 
$jorge=conectar();
$jorge->query("insert into producto (codigoProducto,nombreProducto,cantidad,unidad,valorUnitario)
	values('$_REQUEST[codigo]','$_REQUEST[nombre]',$_REQUEST[cantidad],'$_REQUEST[unidad]','$_REQUEST[valor]')")or die($jorge->error);
$jorge->close();
header("Location:producto.php");
  ?>