<?php 
error_reporting(0);
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
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
$jorge->query("delete from proveedor where NIT='" . $_REQUEST['nit']. "'")or die($jorge->error);
$jorge->close();
header('Location:verProveedor2.php');
  ?>	
</body>
</html>