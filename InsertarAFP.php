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
 $id=$_POST['nombreAFP'];
$jorge=conectar();
$registros=$jorge->query("SELECT nombreAFP FROM afp WHERE nombreAFP ='" .$_REQUEST[nombreAFP]. "'")
or die($jorge->error);

	if ($registros==true) {
		$row=$registros->fetch_array();
		if($row['nombreAFP']==$id)
		{
			echo '<script>alert("AFP ingresada ya existente");
			window.location="GestionAFP.php";</script>';
		}else
			{
				$jorge->query("INSERT INTO afp (nombreAFP) values('$_REQUEST[nombreAFP]')") or die($jorge->error);
				$jorge->close();
				header('Location:GestionAFP.php');
				exit();
			}
	}else
		{
			header('Location:GestionAFP.php');
			exit();
		}

$jorge->close();
  ?>
 <br>	
</body>
</html>