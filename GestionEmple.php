<?php
error_reporting(0);
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Klimatizar-Empleado</title>
      <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">

      <link   rel="shortcut icon" href="../images/LOGO KLIMACOL.jpg" type="image/x-icon">
      <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
  </head>
    <body>
 <div class="container">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="head">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Navegacion</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><i style="margin-top:-15px;margin-left:10px;"  class="fa fa-globe fa-2x"></i></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav" >
      <li  class="active"><a href="Principal.php"><span class="fa fa-home fa-fw"></span>Home</a></li>
      <li  class="active" ><a href="#" data-toggle="dropdown"  ><span  class="fa fa-user "></span>  Gestion de Empleados 
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
            <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Kardex<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Solicitud de material</a></li>
          <li><a tabindex="-1" href="#">Orden de compra</a></li>
          <li><a tabindex="-1" href="#">Remision de material</a></li>
        </ul>
      </li>
      <li><a href="producto.php">Producto</a></li>
      <li><a href="verProveedor1.php">Proveedor</a></li>
    </ul>
      </li> 
      <!--<li  class="active"><a href="#" data-toggle="dropdown" ><span class="fa fa-book fa-fw"> </span>Reportes<span class="caret"></a>
      <ul class="dropdown-menu" role="Menu" >
      <li><a href="reporte Producto.php">Producto</a></li> 
      <li><a href="reporteProveedor.php">Proveedor</a></li>
      <li><a href="#">Kardex</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="">Ficha tecnica</a></li>
    </ul>
    </li>-->
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
    <ul class="nav navbar-nav">
     <li><i style="margin-top:10px;margin-left:15px; " class="fa fa-power-off fa-2x" aria-hidden="true" data-toggle="dropdown"></i>
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="#"  data-toggle="dropdown">Informacion Personal</a></li> 
    <li><a href="modificarContrasena1.php">Cambiar contraseña</a></li>
    <li><a href="#">fvgbhj</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
  </ul>
      </li> 
      </ul>
        </div><!--/.container-fluid -->
      </nav> 
      </div>
  <br>
  <br>
  <br>
    <div class="container">
      <div class="col-md-2 col-md-offset-10">
        <button class="btn btn-primary" data-toggle="modal" data-target="#inst_Persona"> 
          Agregar
          <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
        </button>
      </div><!-- /.span -->
    </div>
  <br>
  <br>

  <section class="contenedor">
  <fieldset>
  <legend><h1 style="color:black;">LISTADO EMPLEADOS</h1></legend> 
<?php 
include 'function.php';
 ?>
<?php 
$jorge=conectar();
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
      $limit = 5; //if you want to dispaly 10 records per page then you have to change here
      $startpoint = ($page * $limit) - $limit;
      $statement = " empleado  order by NombreCompleto asc"; //you have to pass your query over here

$registros=$jorge->query(" SELECT * FROM ViewConsultaEmpleado LIMIT {$startpoint} , {$limit}");
echo '<div class="table-responsive">';
echo '<table class="table table-bordered table-hover">';
echo '<tr><th><center>DOCUMENTO</center></th><th><center>NOMBRE</center></th><th><center>DIRECCION</center></th><th><center>TELEFONO</center></th><th><center>E-MAIL</center></th><th><center>FECHA NACIMIENTO</center></th><th><center>CARGO</center></th><th><center>EPS</center></th><th><center>ARL</center></th><th><center>AFP</center></th><th width="7%"> </th></tr>';
while ($reg=$registros->fetch_array())
{
  echo '<tr>';
  echo '<td>';
  ECHO '<center>';
  echo $reg['Documento'];
  echo '</td>';
  echo '<td>';
  ECHO '<center>';
  echo $reg['Nombre'];
  echo '</td>';
  echo '<td>';
  echo $reg['Direccion'];
  echo '</td>';
  echo '<td>';
  echo $reg['Telefono'];
  echo '</td>';
  echo '<td>';
  echo $reg['Correo'];
  echo '</td>';
  echo '<td>';
  echo $reg['FechaNacimiento'];
  echo '</td>';
  echo '<td>';
  echo $reg['Cargo'];
  echo '</td>';
  echo '<td>';
  echo $reg['EPS'];
  echo '</td>';
  echo '<td>';
  echo $reg['ARL'];
  echo '</td>';
  echo '<td>';
  echo $reg['AFP'];
  echo '</td>';
  
  ?>
  <td>
        <a href="" id="<?php echo $reg["Documento"];?>" class="btn btn-sm btn-warning btn-editar" data-toggle="modal" data-target="#modificarEmpleado"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <button id="<?php echo $reg["Documento"];?>" name="eliminar" class="btn btn-sm btn-danger">
    <i class="fa fa-trash-o" aria-hidden="true"></i>
    </button>
    </td>
  <?php
  echo '</tr>';
}
echo '</table>';
echo " </div>";
echo '<br>';
echo '<div id="pagingg">';
echo pagination($statement,$limit,$page);
echo "</div>";
$jorge->close();

 ?>

  <br>
  <br>
  <br>
<br>
<br>
<center>
<form action="consultaEmpleado1.php">
  <input type="submit" value="volver" style="border-radius:5px;margin-left:155px;" class="btn btn-primary">
</form>
</center>
</fieldset>  
</section>
  <?php  
     include('../Crud/md_modificarEmple.php');
  include('../Crud/md_agregar.php');
  ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/modals.js"></script>
    <script>
    $(document).ready(function(){
      $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });
    </script>
</body>
</html>
