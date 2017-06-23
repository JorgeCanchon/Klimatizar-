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
 $id=$_POST['nombreARL'];
$jorge=conectar();
$registros=$jorge->query("SELECT nombreARL FROM arl WHERE nombreARL ='" .$_REQUEST[nombreARL]. "'")
or die($jorge->error);

	if ($registros==true) {
		$row=$registros->fetch_array();
		if($row['nombreARL']==$id)
		{
			echo '<script>alert("ARL ingresada ya existente");
			window.location="GestionARL.php";</script>';
		}else
			{
				$jorge->query("INSERT INTO arl (nombreARL) values('$_REQUEST[nombreARL]')") or die($jorge->error);
				$jorge->close();
				header('Location:GestionARL.php');
				exit();
			}
	}else
		{
			header('Location:GestionARL.php');
			exit();
		}

$jorge->close();
  ?>
 <br>	
</body>
</html>