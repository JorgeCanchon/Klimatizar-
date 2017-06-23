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
 $id=$_POST['nombreCargo'];
$jorge=conectar();
$registros=$jorge->query("select NombreCargo from cargo where NombreCargo ='" .$_REQUEST[nombreCargo]. "'")
or die($jorge->error);

	if ($registros==true) {
		$row=$registros->fetch_array();
		if($row['NombreCargo']==$id)
		{
			echo '<script>alert("Cargo ingresado ya existente");
			window.location="Cargo1.php";</script>';
		}else
			{
				$jorge->query("insert into cargo(NombreCargo,Descripcion) values('$_REQUEST[nombreCargo]','$_REQUEST[descripcion]')") or die($jorge->error);
				$jorge->close();
				header('Location:Cargo1.php');
				exit();
			}
	}else
		{

			header('Location:Cargo1.php');
			exit();
		}

$jorge->close();
  ?>
 <br>	
</body>
</html>