<?php 
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="shortcut icon" href="../images/LOGO KLIMACOL.jpg" type="image/x-icon">
    <!-- Bootstrap core CSS -->
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
            <a class="navbar-brand" href="#"><i style="margin-top:-5px;margin-left:10px;"  class="fa fa-globe fa-2x"></i></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li  class="active"><a href="Principal.php"><span class="fa fa-home fa-fw"></span>Home</a></li>
              <!--Gestion de empleados-->
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
   <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
          <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
          <li class="dropdown-submenu">
            <a class="test" href="#">Another dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">3rd level dropdown</a></li>
              <li><a href="#">3rd level dropdown</a></li>
            </ul>
          </li>
        </ul>
      </li>
                </ul>
              </li>
  </li>
  <!--termina gestion de empleados-->
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
    <ul class="nav navbar-nav">
     <li>
     <i style="margin-top:10px;margin-left:15px;" class="fa fa-power-off fa-2x" aria-hidden="true" data-toggle="dropdown">
     </i>
          <ul class="dropdown-menu" role="Menu" >
            <li><a href="#"  data-toggle="dropdown">Informacion Personal</a></li> 
            <li><a href="modificarContrasena1.php">Cambiar contraseña</a></li>
            <li><a href="#">fvgbhj</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
          </ul>
      </li> 
    </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </div>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Cambiar contrase&#241;a</h1>
      <form method="POST" name="myForma" action="javascript:envio()">
  <table border="1">
    <tr>
      <td>Ingrese contraseña actual</td>
      <td><input type="password" name="act" size="80" required></td>
      <p id="demo1"></p>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="PS1" size="80" onkeyup=" validarC();" required></td>
    </tr>
    <tr>
      <td>Repeat Password</td>
      <td><input type="password" name="PS2" size="80" onkeyup=" validarC();" required></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
      </td>
    </tr>
  </table>
  <p id="demo"></p>
</form>
      </div>
    <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
   <script src="../js/jquery-1.11.0.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
function validarC(){
 if (document.myForma.PS1.value == document.myForma.PS2.value) {
  document.getElementById("demo").innerHTML = "contraseñas coinciden";
  }else{
  document.getElementById("demo").innerHTML = "contraseñas no coinciden";
  }
} 

function envio(){
          if (document.myForma.PS1.value == document.myForma.PS2.value)
          {
          var ac=document.forms.myForma.act.value;
          var nu=document.forms.myForma.PS1.value;
          window.location="modificarCon.php?actual="+ ac + "&nueva="+nu;
          }else{
            location.reload();
          }   
}

</script>
  </body>
</html>
