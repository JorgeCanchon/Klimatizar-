<?php 
error_reporting(0);
require_once 'core.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KLIMATIZAR-PROVEEDOR</title>
</head>
<body>
<?php 
include 'conectar.php';
 ?>
 <?php 
$jorge=conectar();
$jorge->query("UPDATE proveedor SET visibilidad=0 where NIT='" . $_REQUEST['nit']. "'")or die($jorge->error);
$jorge->close();
header('Location:verProveedor2.php');
  ?>	
</body>
</html>