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
                <li  class="active" ><a href="#" data-toggle="dropdown" ><span  class="fa fa-user"></span>  Gestion de Empleados 
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
<li><a href="GestionEPS.php">EPS</a><li>
<li><a href="GestionARL.php">ARL</a></li>
<li><a href="GestionAFP.php">AFP</a></li>
<li><a href="GestionCliente.php">Cliente</a></li>
                </ul>
              </li>
  </li>
  <!--Termina Gestion de Empleados-->
                  <li  class="active"><a data-toggle="dropdown"  href="#"><span class="fa fa-cog fa-spin fa-1x fa-fw"></span>Obra<span class="caret"></span></a>
                <ul class="dropdown-menu" role="Menu" >
                <li><a href="GestionObra.php">Listado</span></a></li> 
                 <li><a href="consultaObra.php">Buscar obra</a></li>
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
                  <li><a href="../Reportes/app/reportes/ReportesEmpleados.php">Empleado</span></a></li> 
                  <li><a href="../Reportes/app/reportes/ReportesCargo.php">Cargo</a></li>
                  <li><a href="#">Obra</a></li>
                  <li role="separator" class="divider"></li>
                   <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Kardex<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li class="dropdown-submenu">
            <a class="test" href="#">Solicitud de material <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">3rd level dropdown</a></li>
              <li><a href="#">3rd level dropdown</a></li>
            </ul>
          </li>
                   <li class="dropdown-submenu">
            <a class="test" href="#">Orden de compra <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">3rd level dropdown</a></li>
              <li><a href="#">3rd level dropdown</a></li>
            </ul>
          </li>
                   <li class="dropdown-submenu">
            <a class="test" href="#">Remision de material<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">3rd level dropdown</a></li>
              <li><a href="#">3rd level dropdown</a></li>
            </ul>
          </li>
        </ul>
      </li>
                  <li><a href="../Reportes/app/reportes/ReportesProducto.php">Producto</a></li>
                  <li><a href="#">Proveedor</a></li>
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
                                    <!--usuario-->
                  <li  class="active" ><a href="#" data-toggle="dropdown" ><?php echo $_SESSION['usuario']; ?><span class="caret"></a>
              <ul class="dropdown-menu" role="Menu" >
    <li><a href="ModificarInformacion.php" >Informacion personal</a></li> 
    <li><a href="modificarContrasena1.php">Cambiar contraseña</a></li>
                  </li>
              </ul>
                  </li>
      <ul class="nav navbar-nav">
     <li><a class="fa fa-power-off fa-2x" href="cerrarSesion.php"></a></li> 
      </ul>
          </div><!--/.nav-collapse -->
          </nav>
        </div><!--/.container-fluid -->
  <br>
  <br>
  <br>
    <div class="container">
      <div class="col-md-2 col-md-offset-10">
        <button class="btn btn-primary" data-toggle="modal" data-target="#inst_AFP"> 
          Agregar
          <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
        </button>
      </div><!-- /.span -->
    </div>
  <br>
  <br>

  <section class="contenedor">
  <fieldset>
  <legend><h1 style="color:black;">LISTADO AFP</h1></legend> 
<?php 
include 'conectar.php';
 ?>
<?php 
$jorge=conectar();
$registros=$jorge->query("SELECT idAFP,nombreAFP FROM afp WHERE visibilidad=1")or
die($jorge->error);
echo '<div class="table-responsive">';
echo '<table class="table table-bordered table-hover">';
echo '<tr><th>CODIGO AFP</th><th>NOMBRE AFP</th><th></th></tr>';
while ($reg=$registros->fetch_array())
{
  echo '<tr>';
  echo '<td>';
  echo "<center>";
  echo $reg['idAFP'];
  echo '</td>';
  echo '<td>';
  echo "<center>";
  echo $reg['nombreAFP'];
  echo '</td>';
  ?>
   <td>
    <a href="" id="<?php echo $reg["idAFP"];?>" class="btn btn-sm btn-warning btn-editar" data-toggle="modal" data-target="#modificarAFP"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <a id="<?php echo $reg["idAFP"];?>" class="btn btn-sm btn-danger">
    <i class="fa fa-trash-o" aria-hidden="true"></i>
    </a>
  </td>
  <?php
  echo '</tr>';
}
echo '</table>';
echo '</div>';
$jorge->close();
include('../Crud/md_agregarAFP.php');
 ?>
 <br>
 <br>
 <center>
     <form action="Principal.php">
   <input type="submit" value="volver" class="btn btn-primary">
</form>
</center>
</fieldset>  
</section>
  <?php  
     include('../Crud/md_modificarAFP.php');
  
  ?>

<script src="../js/jquery.js"></script>
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/modalsAFP.js"></script>
<script type="text/javascript">
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
