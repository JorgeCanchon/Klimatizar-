<?php 
require_once 'core.php';
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Klimatizar-Empleado</title>
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css"> 
    <link rel="shortcut icon" href="../images/LOGOKLIMACOL.jpg" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">  
  </head>
    <body>
      <div class="container">
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
            <ul class="nav navbar-nav">
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
          <li><a tabindex="-1" href="cosultaEmpleado.php">Buscar Empleado</a></li>
        </ul>
      </li>
                          <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Cargo<span  class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="Cargo1.php">Listado</a></li>
            <li role="separator" class="divider"></li>
          <li><a tabindex="-1" href="consultaCargo.php">Buscar Cargo</a></li>
        </ul>
      </li>

                </ul>
              </li>
  </li>
  <!--Termina Gestion de Empleados-->
                  <li  class="active"><a data-toggle="dropdown"  href="#"><span class="fa fa-cog fa-spin fa-1x fa-fw"></span>Obra<span class="caret"></span></a>
                <ul class="dropdown-menu" role="Menu" >
                <li><a href="GestionObra.php">Listado</span></a></li> 
                 <li><a href="">Buscar obra</a></li>
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
                  <li><a href="#">Obra</a></li>
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

                  <!--Producto-->

                  <li  class="active" ><a href="#" data-toggle="dropdown" >Producto<span class="caret"></a>
              <ul class="dropdown-menu" role="Menu" >
                  <li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">Producto<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="producto.php">Listado</a></li>
                        <li><a tabindex="-1" href="#">Buscar producto</a></li>
                      </ul>
                  </li>
                  <li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">Proveedor<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="verProveedor2.php">Listado</a></li>
                        <li><a tabindex="-1" href="consultaProveedor1.php">Buscar proveedor</a></li>
                      </ul>
                  </li>
              </ul>
                  </li>
      <ul class="nav navbar-nav">
     <li><i style="margin-top:10px;margin-left:15px; " class="fa fa-power-off fa-2x" aria-hidden="true" data-toggle="dropdown"></i>
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="ModificarInformacion.php" ><?php echo $_SESSION['usuario']; ?></a></li> 
    <li><a href="modificarContrasena1.php">Cambiar contraseña</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
  </ul>
      </li> 
      </ul>
          </div><!--/.nav-collapse -->
          </nav>
        </div><!--/.container-fluid -->
<?php 
include 'conectar.php';
$jorge=conectar();
$registro=$jorge->query("SELECT u.usuario ,empleado.Documento,empleado.NombreCompleto AS Nombre, empleado.Direccion,
 empleado.Telefono, empleado.Correo, empleado.FechaNacimiento, 
cargo.NombreCargo AS Cargo,
 eps.nombreEPS AS EPS, arl.nombreARL AS ARL, afp.nombreAFP AS AFP,empleado.visibilidad
FROM empleado  
INNER JOIN cargo ON cargo.codigoCargo=empleado.Cargo_codigoCargo 
INNER JOIN eps ON eps.idEPS=empleado.EPS_idEPS
INNER JOIN arl ON arl.idARL=empleado.ARL_idARL
INNER JOIN afp ON afp.idAFP=empleado.AFP_idAFP 
INNER JOIN usuario u ON empleado.Documento=u.Empleado_Documento
WHERE empleado.visibilidad=1 AND Documento='" . $_SESSION['empleado'] . "'");
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
      <input type="text" class="form-control"  name="usuario" value="<?php echo $reg['usuario']; ?>">
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
              $registros=$jorge->query("select idAFP,nombreAFP from afp")
              or die($jorge->error);
              while ($reg2=$registros->fetch_array()) {
                if ($reg2['nombreAFP']==$reg['AFP']) {
                  echo "<option value=\"".$reg2['idAFP']."\"selected>".$reg2['nombreAFP']."</option>";
                }
                echo "<option value=\"".$reg2['idAFP']."\">".$reg2['nombreAFP']."</option>";
              }
                ?>
                </select>
 </div>
    <input type="hidden" name="Documento" value="<?php echo $_REQUEST['Documento']; ?>">
   <br>
   <center>
   <input type="submit" value="Enviar"  class="btn btn-primary">
   </center>
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
