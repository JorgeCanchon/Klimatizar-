<?php 
require_once('core.php');
require_once('conectar.php');
$jorge=conectar();
if($jorge->query("DELETE FROM proveedor_producto WHERE Producto_codigoProducto=$_GET[codigo] AND Proveedor_NIT='$_GET[nit]'")){
echo '<script>alert("Eliminado con exito");
window.location="producto.php";
</script>';
}else{
	echo '<script>alert("Error al eliminar el proveedor");
	window.location="producto.php";</script>';
}
$jorge->close();
 ?>