<?php
require_once 'core.php';
 $codigo=$_POST['codigo'];
include 'conectar.php';
$luis=conectar();
$registros=$jorge->query("select codigoObra from obra where codigoObra='".$codigo. "'")or die($jorge->error);
if ($registros==true) 
{
	$row=$registros->fetch_array();
	if ($row[0]==$codigo) 
		{
			header("Location:RegistrarObra.php");
			exit();
		}else
			{
				$luis->query("insert into obra(codigoObra,contratante,nombreObra)
					values ('$codigo','$_REQUEST[contratante]','$_REQUEST[NombreObra]')")
				or die($luis->error);
		 }
 }else
	{
	 header('Location:RegistrarObra.php');
	 exit();
	}
	$luis->close();
  ?>