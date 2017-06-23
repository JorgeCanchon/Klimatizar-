 <?php 
 $codigo=$_REQUEST['codigo'];
include 'conectar.php';
$jorge=conectar();
$luis=conectar();
$registros=$jorge->query("select idObra from obra where idObra='".$codigo. "'")or die($jorge->error);
if ($registros==true) 
{
	$row=$registros->fetch_array();
	if ($row[0]==$codigo) 
		{	
			
			header("Location:GestionObra.php");
			
		}else
			{
				$luis->query("insert into obra(idObra,contratante,nombreObra,fechaInicio,fechaFin)
					values ('$codigo','$_REQUEST[contratante]','$_REQUEST[nombreObra]','$_REQUEST[fechaInicio]','$_REQUEST[fechaFin]')")
				or die($luis->error);
				echo '<script>
alert("Informacion agregada con exito");
window.location="GestionObra.php";
				</script>';
					
			}
}else
	{
	 header('Location:RegistrarObra.php');
	 exit();
	}
	$jorge->close();
	$luis->close();
  ?>
