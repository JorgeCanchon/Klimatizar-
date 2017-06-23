<?php 
require_once 'core.php';
include 'conectar.php';
 ?>
 <?php 
$jorge=conectar();
/*
$jorge->query("SET FOREIGN_KEY_CHECKS=0");
$con=0;
echo $_REQUEST['proveedor'] ."/ "."1-900013663-4"."".$_REQUEST['codigo'] ;
*/
$registros=$jorge->query("SELECT Proveedor_NIT FROM proveedor_producto WHERE Producto_codigoProducto=$_REQUEST[codigo]")or die($jorge->error);
while($row=$registros->fetch_array()){
	for ($i=0; $i < count($row); $i++) { 
	$vec[$i]=$row['Proveedor_NIT'];
	}
}
for ($i=0; $i <count($vec) ; $i++) { 
	$con++;
}
if ($con>0) {
header("Location:producto.php");
}else
{
	$jorge->query("INSERT INTO proveedor_producto (Producto_codigoProducto,Proveedor_NIT)
    values('$_REQUEST[codigo]','$_REQUEST[proveedor]')")or die($jorge->error);
$jorge->close();
header("Location:producto.php");
exit();
}
  ?>