<?php 
error_reporting(0);
require_once 'core.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KLIMATIZAR-PRODUCTO</title>
</head>
<body>
<?php 
include 'conectar.php';
 ?>
 <?php 
$jorge=conectar();
$jorge->query("UPDATE producto SET visibilidad=0 where idProducto='" . $_REQUEST['codigo']. "'")or die($jorge->error);
$jorge->close();
header('Location:producto.php');
  ?>	
</body>
</html>