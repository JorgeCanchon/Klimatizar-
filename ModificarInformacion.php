<?php
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
include 'conectar.php';
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
              <!--Gestion de empleados-->
                <li  class="active" ><a href="#" data-toggle="dropdown"  ><span  class="fa fa-user"></span>  Gestion de Empleados 
      <span class="caret"></span></a>
    <ul class="dropdown-menu" role="Menu" >
   <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Empleado<span  class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="GestionEmple.php">Listado</a></li>
            <li role="separator" class="divider"></li>
          <li><a tabindex="-1" href="cosultaEmpleado.php">Buscar codigo</a></li>
        </ul>
      </li>
               <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">cargo<span  class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="Cargo1.php">Listado</a></li>
            <li role="separator" class="divider"></li>
          <li><a tabindex="-1" href="consultaCargo.php">Buscar Documento</a></li>
        </ul>
      </li>
      </li>
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
<?php 
$jorge=conectar();
$registro=$jorge->query("select * from ViewConsultaEmpleado where Documento='" . $_SESSION['empleado'] . "'");
if($reg=$registro->fetch_array())
{
 ?>
<div class="container">
  <div class="jumbotron">
      <form method="POST" action="ModificarInformacion1.php" >
      <legend>
        Modificar Informacion  <strong><?php echo $_SESSION['usuario']; ?></strong>
      </legend>
      <fieldset>
      <div class="form-group"> 
     <label>Documento</label>
        <input value="<?php echo $reg['Documento']?>" class="form-control" disabled>
     </div>
      <div class="form-group"> 
      <label>Usuario</label>
      <input type="text" class="form-control"  name="usuario" value="<?php echo $_SESSION['empleado']; ?>">
      </div>
     <div class="form-group"> 
     <label>NombreCompleto</label>
        <input type="text" value="<?php echo $reg['Nombre']?>" class="form-control" title="Ingrese solo letras" id="nombreCompleto" name="nombreCompleto" pattern="[a-z A-Z]{1,100}" required >
     </div>
     <div class="form-group">
     <label>Direccion</label>
     <input type="text" value="<?php echo $reg['Direccion']?>" class="form-control" name="Direccion" id="direccion" pattern="[a-z A-Z0-9]{1,45}" required>
    </div>
    <div class="form-group">
     <label>Telefono</label>
     <input type="tel" value="<?php echo $reg['Telefono']?>" class="form-control" name="Telefono" id="telefono" pattern="[0-9]{7,25}" required>
     </div>
  <div class="form-group">
     <label>Correo</label>
    <input type="email" value="<?php echo $reg['Correo']?>" class="form-control" name="Correo" id="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
            </div>
  <div class="form-group">
     <label>Fecha Nacimiento</label>
     <input type="date" class="form-control"  value="<?php echo $reg['FechaNacimiento']?>" name="FechaN" id="fechaN" required>
    </div>
    <div class="form-group">
     <label>Cargo</label>
     <select class="form-control"  name="Cargo" required>          
    <?php 
      $jorge=conectar();
      $registros=$jorge->query("select codigoCargo,NombreCargo from cargo")
      or die($jorge->error);
      while ($reg2=$registros->fetch_array()) {
        if ($reg2['NombreCargo']==$reg['Cargo']) {
          echo "<option value=\"".$reg2['codigoCargo']."\"selected>".$reg2['NombreCargo']."</option>";
        }else
          echo "<option value=\"".$reg2['codigoCargo']."\">".$reg2['NombreCargo']."</option>";
        }
    ?>
  </select>
  </div>
  <div class="form-group">
  <label>EPS</label>
  <select name="idEPS" class="form-control" >
    <?php 
      $jorge=conectar();
      $registros=$jorge->query("select idEPS,nombreEPS from eps")
      or die($jorge->error);
      while ($reg2=$registros->fetch_array()) {
        if ($reg2['nombreEPS']==$reg['EPS']) {
          echo "<option value=\"".$reg2['idEPS']."\"selected>".$reg2['nombreEPS']."</option>";
        }
          echo "<option value=\"".$reg2['idEPS']."\">".$reg2['nombreEPS']."</option>";
            }
    ?>
  </select>
  </div>
    <div class="form-group">
<label>ARL</label>
<select name="idARL" class="form-control" >
  <?php 
    $jorge=conectar();
    $registros=$jorge->query("select idARL,nombreARL from arl")
    or die($jorge->error);
    while ($reg2=$registros->fetch_array()) {
      if ($reg2['nombreARL']==$reg['ARL']) {
        echo "<option value=\"".$reg2['idARL']."\"selected>".$reg2['nombreARL']."</option>";
      }
        echo "<option value=\"".$reg2['idARL']."\">".$reg2['nombreARL']."</option>";
        }
  ?>
</select>
</div>
  <div class="form-group">
<label>AFP</label>
<select name="idAFP" class="form-control">
               <?php 
              $jorge=conectar();
              $registros=$jorge->query("select idAFP,nombreAFP from AFP")
              or die($jorge->error);
              while ($reg2=$registros->fetch_array()) {
                if ($reg2['nombreAFP']==$reg['AFP']) {
                  echo "<option value=\"".$reg2['idAFP']."\"selected>".$reg2['nombreAFP']."</option>";
                }
                echo "<option value=\"".$reg2['idAFP']."\">".$reg2['nombreAFP']."</option>";
              }
                ?>
                </select>
   <input type="hidden" name="Documento" value="<?php echo $_REQUEST['Documento']; ?>">
   <br>
   <center>
   <input type="submit" value="Enviar"  class="btn btn-primary">
   </center>
 </div>
</div>
</form>
      </div>
<?php 
}else{
  $jorge->close();
}  
 ?>
<form action="Principal.php">
<center>
  <input type="submit" value="volver"  class="btn btn-primary">
  </center>
</form>
</div> <!-- /container -->
</div>
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
