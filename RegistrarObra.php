<?php
require_once 'core.php';
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Klimatizar-Registrar Obra</title>
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<link rel="shortcut icon" type="image/x-icon" href="../images/LOGOKLIMACOL.jpg">
<link rel="stylesheet" href="../css/boostrap.min.css">
<style type="text/css">

body{
	background-color: gray
}
.boton {
	font.size:18px;
	font-family:Verdana,Helvetica;
    font-weight:bold;
    color:white;
    background:#045FB4;
    border:0px;
    width:100px;
    height:30px;
}
input:hover {background: #E6E6E6;
}
input:focus:hover {background: #BDBDBD;
}
.contenedor{
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
    <li><a href="RegistrarObra.php">Registrar obra</span></a></li> 
     <li><a href="fichaTecnica.php">Registrar ficha tecnica</a></li>
     <ul class="dropdown-menu">
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
  <br>
  <br>
  <br>
  <br>
  <br>
  <section class="contenedor">
  <fieldset>
  <br>
  <center> <legend style="color:#000;">Registrar Obra</legend>
  <?php 
   include 'conectar.php';
   ?>
  <br> 
  <form method="POST" action="RegistrarObra1.php" style="align-items: center">
  <br>
  <div>
  <label>
  Codigo Obra	
  </label>	
  <input type="text" id="cod" name="codigoobra" min="0" style="width: 118px; margin-left: 82px;border-radius: 5px;" placeholder="Cogigo Obra" required>
  <span><button onclick="validar()">verificar</button></span>
  <br>
  <label>
  contratante
  </label>
  <input type="text"  style="width: 182px;border-radius: 5px;height: 25px;margin-left:80px; " name="contratante"  placeholder="contratante" required>
  <br>
  <label>
  Nombre Obra
  </label>
  <input type="text" min=0  style="width: 180px;border-radius: 5px;height: 23px;margin-left:65px; " name="NombreObra"  placeholder="Nombre obra" required>	
  <br>
  <br>
  <input class="btn btn-primary" type="submit" class="boton" value="Registrar" style="margin-left:auto;">
  </form>	
  </fieldset>
  </section>
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
  </html>