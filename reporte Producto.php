<?php 
require_once 'core.php';
 ?>
<?php
error_reporting(0); 
include_once 'conectarOOP.php';
header('Content-type: application/vnd.ms-word');
header("Content-Disposition: attachment; filename=Producto.doc");
 header("Pragma: no-cache");
header("Expires: 0");
 ?>	
 <style type="text/css">
 		 .tablalistado{
      background-color: white;
      border-collapse: collapse;
      box-shadow: 0px 0px 8px #000;
      margin: auto;
    }
    .tablalistado th{
      border:1px solid #6A9E98;
    }
    .tablalistado td{
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffdd73; 
    }
 </style>	
 <img src="../images/LOGOKLIMACOL.jpg" />
 <h1>LISTADO DE PRODUCTOS</h1>
 <?php 
$reporte=new ReporteProducto();
$reporte->listar();
 ?>
 <?php 
/**
* 
*/
require_once 'conectarOOP.php';
class ReporteProducto
{
	private $conec;
	function __construct()
	{
		try
		{
			$this->conec=Conexion::conectar();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function listar(){
		$registro=($this->conec)->query("SELECT * FROM ViewReporteProducto")or die(($this->conec)->error);
		 echo '<table class="tablalistado">';
echo '<tr><th>Codigo</th><th>Nombre</th><th>Unidad</th><th>Valor unitario</th><th>Cantidad</th></tr>';
while ($row=$registro->fetch_array()) {
	echo '<tr>';
	echo '<td>';
	echo $row['codigoProducto'];
	echo '</td>';
	echo '<td>';
	echo $row['nombreProducto'];
	echo '</td>';
	echo '<td>';
	echo $row['unidad'];
	echo '</td>';
	echo '<td>';
	echo $row['valorUnitario'];
	echo '</td>';
	echo '<td>';
	echo $row['cantidad'];
	echo '</td>';
	echo '</tr>';
}
echo '</table>';
$reporte->desconectar();
	}
}
  ?>
