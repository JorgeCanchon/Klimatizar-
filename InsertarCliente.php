<?php 
require_once 'core.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingreso</title>
</head>
<body>
<?php 
include "conectar.php";
 ?>
 <?php
 $id=$_POST['nombreCliente'];
$jorge=conectar();
$registros=$jorge->query("SELECT nombreCliente FROM cliente WHERE nombreCliente ='" .$_REQUEST[nombreCliente]. "'")
or die($jorge->error);

	if ($registros==true) {
		$row=$registros->fetch_array();
		if($row['nombreCliente']==$id)
		{
			echo '<script>alert("Cliente ingresado ya existente");
			window.location="GestionCliente.php";</script>';
		}else
			{
				$jorge->query("INSERT INTO cliente (nombreCliente,direccion,telefono) values('$_REQUEST[nombreCliente]','$_REQUEST[direccion]','$_REQUEST[telefono]')") or die($jorge->error);
				$jorge->close();
				header('Location:GestionCliente.php');
				exit();
			}
	}else
		{
			header('Location:GestionCliente.php');
			exit();
		}

$jorge->close();
  ?>
 <br>	
</body>
</html>