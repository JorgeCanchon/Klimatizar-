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
 $id=$_POST['nombreEPS'];
$jorge=conectar();
$registros=$jorge->query("SELECT nombreEPS FROM eps WHERE nombreEPS ='" .$_REQUEST[nombreEPS]. "'")
or die($jorge->error);

	if ($registros==true) {
		$row=$registros->fetch_array();
		if($row['nombreEPS']==$id)
		{
			echo '<script>alert("EPS ingresada ya existente");
			window.location="GestionEPS.php";</script>';
		}else
			{
				$jorge->query("INSERT INTO eps (nombreEPS) values('$_REQUEST[nombreEPS]')") or die($jorge->error);
				$jorge->close();
				header('Location:GestionEPS.php');
				exit();
			}
	}else
		{
			header('Location:GestionEPS.php');
			exit();
		}

$jorge->close();
  ?>
 <br>	
</body>
</html>