<?php 
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Klimatizar_Empleado</title>

      
      <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      <link   rel="shortcut icon" href="../images/LOGO KLIMACOL.jpg" type="image/x-icon">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <style type="text/css">
        body {
          background-color: gray 
        }
            .boton{
        font-size:18px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:white;
        background:#045FB4;
        border:0px;
        width:100px;
        height:30px;
       }
       input:hover {background:#E6E6E6;}       
       input:focus:hover {background: #CEF6F5;
       }
        .contenedor {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  margin: auto;
  background-color:gray solid;
  width:550px;
  height: auto;
  border-radius: 10px;
}

.contenedor-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
      </style>
  </head>
    <body>
   <section class="heade" >
  <div class="head">
    <ul class="nav nav-pills"  >
      <li><img src="../images/LOGO KLIMACOL.jpg" style="border-radius:5px;width: 100px;margin: 10px;"></li>
      <li style="visibility: hidden;">-</li>
      <li  class="active"><a href="Principal.php"><span class="fa fa-home fa-fw"></span>Home</a></li>
      <li  class="active" ><a href="#" data-toggle="dropdown"  ><span  class="fa fa-user bigicon"></span>  Gestion de Empleados 
      <span class="caret"></span></a>
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="Registrar empleado.php" >Registrar Empleado</span></a></li> 
      <li><a  href="RegistrarCargo.php">Registrar Cargo</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Regular link</a></li>
          <li><a class="dropdown-item disabled" href="#">Disabled link</a></li>
          <li><a class="dropdown-item" href="#">Another link</a></li>
        </ul>
      </li>
    <li><a  href="#" class="dropdown-item disabled">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a  href="#">Separated link</a></li>
  </ul>
  </li>
      <li  class="active"><a data-toggle="dropdown"  href="fichaTecnica.php"><span class="fa fa-cog fa-spin fa-1x fa-fw"></span> Ficha Tecnica  <span class="caret"></span></a>
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="#">Registrar obra</span></a></li> 
     <li><a href="fichaTecnica.php">Registrar ficha tecnica</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
      <li  class="active"><a href="#"  data-toggle="dropdown"><span class="fa fa-check-square-o"></span> Kardex <span class="caret"></span></a>
      <ul class="dropdown-menu" role="Menu" >
        <li><a href="solicitudMaterial.php" >Solicitud de material</span></a></li> 
          <li><a  href="RegistrarCargo.php">Orden de compra</a>
              <li><a class="dropdown-item" href="#">Remision de material</a></li>
          </li>
      </ul>
     </li>
      <li  class="active"><a href="#" data-toggle="dropdown" ><span class="fa fa-book fa-fw"> </span> Consulta 
      <span class="caret"></a>
    <ul class="dropdown-menu" role="Menu" >
      <li><a href="consultaEmpleado1.php">Empleado</span></a></li> 
      <li><a href="consultaCargo1.php">Cargo</a></li>
      <li><a href="#">Ficha tecnica</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">kardex</a></li>
      <li><a href="producto.php">Producto</a></li>
      <li><a href="verProveedor1.php">Proveedor</a></li>
    </ul>
      </li> 
       <li  class="active"><a href="#" data-toggle="dropdown" ><span class="fa fa-book fa-fw"> </span>Reportes<span class="caret"></a>
      <ul class="dropdown-menu" role="Menu" >
      <li><a href="reporte Producto.php">Producto</a></li> 
      <li><a href="reporteProveedor.php">Proveedor</a></li>
      <li><a href="#">Kardex</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="">Ficha tecnica</a></li>
    </ul>
    </li>
      <li  class="active" ><a href="#" data-toggle="dropdown" >Producto<span class="caret"></a>
  <ul class="dropdown-menu" role="Menu" >
    <li><a href="producto.php" >Producto</span></a></li> 
      <li><a  href="verProveedor1.php">Proveedor</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Regular link</a></li>
          <li><a class="dropdown-item disabled" href="#">Disabled link</a></li>
          <li><a class="dropdown-item" href="#">Another link</a></li>
        </ul>
      </li>
    <li><a  href="#" class="dropdown-item disabled">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a  href="#">Separated link</a></li>
  </ul>
      </li>
      <li  class="active" style="visibility: hidden;"><a href="#">--</a></li>

<div class="head1" class="derecha">
    <ul class="nav nav-pills">
      <li><img src="../images/sesion1.jpg" style="border-radius:55px;width: 50px;margin: 5px;" data-toggle="dropdown">
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="#"  data-toggle="dropdown">Informacion Personal</a></li> 
    <li><a href="#">sdfgh</a></li>
    <li><a href="#">fvgbhj</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
  </ul>
      </li> 
      </ul>
  </div>  
  </section>
<?php 
include 'conectar.php';
 ?>  
<?php 
$jorge=conectar();
$registro=$jorge->query("select Documento,NombreCompleto,Direccion,Telefono,Correo,FechaNacimiento,Cargo_codigoCargo,EPS_idEPS,ARL_idARL,AFP_idAFP from empleado where Documento=$_REQUEST[Documento]")
or ($jorge->error);
if($reg=$registro->fetch_array())
{
 ?>
   <br>
  <br>
  <br>
  <br>
  <br>
  <section class="contenedor"><center>
<br>
 <form method="POST" action="modificarEmpleado1.php">
   <div>
     <label>Documento</label>
     <label style="width: 200px;margin-left: 50px;border-radius: 5px;"><?php echo $reg['Documento'] ?></label>
     <br>
     <label>NombreCompleto</label>
     <input type="text" name="nombreCompleto" value="<?php echo $reg['NombreCompleto']; ?>" style="width: 200px;margin-left: 13px;border-radius: 5px;" required>
     <br>
     <label>Direccion</label>
     <input type="text" name="Direccion" value="<?php echo $reg['Direccion']; ?>" style="width:200px;margin-left: 65px;border-radius: 5px;">
     <br>
     <label>Telefono</label>
     <input type="number" name="Telefono" value="<?php echo $reg['Telefono']; ?>" style="width: 200px;margin-left: 70px;border-radius: 5px;">
     <br>
     <label>Correo</label>
     <input type="email" name="Correo"  value="<?php echo $reg['Correo']; ?>" style="width: 200px;margin-left: 85px;border-radius: 5px;">
     <br>
     <label>Fecha Nacimiento</label>
     <input type="date" name="FechaN" value="<?php echo $reg['FechaNacimiento']; ?>" style="width: 200px;margin-left: 8px;border-radius: 5px;">
     <br>
     <label>Cargo</label>
     <select name="Cargo" style="width: 200px;height:25px;margin-left: 90px;border-radius: 5px;" required>					
		<?php 
			$jorge=conectar();
			$registros=$jorge->query("select codigoCargo,NombreCargo from cargo")
			or die($jorge->error);
			while ($reg2=$registros->fetch_array()) {
        if ($reg2['codigoCargo']==$reg['Cargo_codigoCargo']) {
          echo "<option value=\"".$reg2['codigoCargo']."\"selected>".$reg2['NombreCargo']."</option>";
        }else
					echo "<option value=\"".$reg2['codigoCargo']."\">".$reg2['NombreCargo']."</option>";
        }
		?>
	</select>
	<br>
	<label>EPS</label>
	<select name="idEPS" style="width: 200px;height:25px;margin-left: 105px;border-radius: 5px;">
		<?php 
			$jorge=conectar();
			$registros=$jorge->query("select idEPS,nombreEPS from eps")
			or die($jorge->error);
			while ($reg2=$registros->fetch_array()) {
        if ($reg2['idEPS']==$reg['EPS_idEPS']) {
          echo "<option value=\"".$reg2['idEPS']."\"selected>".$reg2['nombreEPS']."</option>";
        }
					echo "<option value=\"".$reg2['idEPS']."\">".$reg2['nombreEPS']."</option>";
						}
		?>
	</select>
	<br>
<label>ARL</label>
<select name="idARL" style="width: 200px;height:25px;margin-left: 105px;border-radius: 5px;">
	<?php 
		$jorge=conectar();
		$registros=$jorge->query("select idARL,nombreARL from arl")
		or die($jorge->error);
		while ($reg2=$registros->fetch_array()) {
      if ($reg2['idArl']==$reg['ARLidARL']) {
        echo "<option value=\"".$reg2['idARL']."\"selected>".$reg2['nombreARL']."</option>";
      }
				echo "<option value=\"".$reg2['idARL']."\">".$reg2['nombreARL']."</option>";
				}
	?>
</select>
<br>
<label>AFP</label>
<select name="idAFP" style="width: 200px;height:25px;margin-left: 105px;border-radius: 5px;">
							 <?php 
							$jorge=conectar();
							$registros=$jorge->query("select idAFP,nombreAFP from AFP")
							or die($jorge->error);
							while ($reg2=$registros->fetch_array()) {
                if ($reg2['idAFP']==$reg['AFP_idAFP']) {
                  echo "<option value=\"".$reg2['idAFP']."\"selected>".$reg2['nombreAFP']."</option>";
                }
							  echo "<option value=\"".$reg2['idAFP']."\">".$reg2['nombreAFP']."</option>";
							}
							  ?>
							  </select>
   <input type="hidden" name="Documento" value="<?php echo $_REQUEST['Documento']; ?>">
	<br>
</div>
<br>
<input class="btn btn-primary" type="submit" value="Confirmar" style="margin-left:auto;border-radius:5px;">
<br>
 </form>
 </center>
 <br>
 </section>
 <br>
 <br>
<form action="GestionEmple.php"><center>
  <input type="submit" value="volver" style="border-radius:5px;" class="btn btn-primary">
</center>
</form>
  <?php 
 }else
 $jorge->close(); 
 ?>
</body>
</html>