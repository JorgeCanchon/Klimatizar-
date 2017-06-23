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
        <style type="text/css">
      .t {
        background-color:#00BFFF;
       border-color:black;
       border-collapse:collapse;
       border: black;
      }
    </style>
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
      
  </section>
  <br>
  <br>
  <section class="contenedor">
 <?php 
 include_once 'conectar.php';
$jorge=conectar();
$produc=$_GET['codigoSolicitud'];

?>
<br>  
  <section class="contenedor">
  <fieldset>
  <legend><h1 style="color:black;">Solicitud de materiales</h1></legend> 
          <div class="table-responsive">
      <table class="table table-bordered table-hover">
      <tr>
        <th colspan="4" class="t"><center>Datos generales</center></th>
      </tr>
            <tr>
         <th colspan="2">Codigo solicitud:</th>
         <td colspan="2">
         <?php 
            $jorge=conectar();
            $registro=$jorge->query("SELECT s.*,o.nombreObra,e.NombreCompleto,c.nombreCliente FROM solicituddematerial s
        INNER JOIN obra o
        ON o.idObra=s.codigoObra
        INNER JOIN empleado e
        ON s.codDocumento=e.Documento
        INNER JOIN cliente c
        ON c.codigoCliente=s.codigoCliente
              WHERE idSolicitud=$produc");
            if($reg=$registro->fetch_array()) 
            {
        ?>
        <input type="text" name="idSolicitud" class="form-control" value="<?php echo $reg[idSolicitud]; ?>" readonly="readonly" required></th>
          </td>   
          </tr>
          <tr>
      <th colspan="2">Obra:</th>
       <th colspan="2">
<input type="text" name="obra" class="form-control" value="<?php echo $reg[nombreObra]; ?>" readonly="readonly" required>
</th>
        </th>
        </tr>
        <tr>
        <th colspan="2">Fecha:</th>
        <th colspan="2">
        <input type="text" name="fecha" class="form-control" value="<?php $date = date_create($reg[fecha]); echo date_format($date,'d/m/Y'); ?>" readonly="readonly" required>
      </tr>
<tr>
  <td colspan="2"><b>Cliente:</b></td>
  <td colspan="2">
<input type="text" name="cliente" class="form-control" value="<?php echo $reg[nombreCliente]; ?>" readonly="readonly" required>
  </td>
</tr>
<tr> 
<td th colspan="2">
 <b>Observaciones</b>
</td>
<td colspan="2">
<input type="text" name="observacion" class="form-control" value="<?php echo $reg[observaciones]; ?>" readonly="readonly" required>
</td>
</tr>
<tr>
<td th colspan="2">
 <b>Entrega</b>
</td>
<td th colspan="2">
<input type="text" name="docu" class="form-control" value="<?php echo $reg[NombreCompleto]; ?>" readonly="readonly" required>
</td>
      <tr>
        <th colspan="4" class="t"><center>Productos</center></th>
      </tr>
</tr>
<tr>
  <td class="t"><b>Item</b></td>
  <td class="t"><b>Cantidad</b></td>
  <td class="t"><b>Unidad</b></td>
  <td class="t"><b>Descripcion</b></td>
</tr>
<?php 
}
  echo '<center>';
  $con=1;
    $regi=$jorge->query("SELECT * FROM consultaSolicitud WHERE solicitud=$produc ORDER BY idTramite")or die($jorge->error);
    $registro=$jorge->query("SELECT * FROM consultaSolicitud WHERE solicitud=$produc ORDER BY idTramite");
  while ($ro=$regi->fetch_array()) {
        echo '<tr>';
        echo '<td>';
        echo '<b>';
        echo $con++;
        echo '</b>';
        echo '</td>';
        echo '<td>';
        echo $ro['cantidad'];
        echo '</td>';
        echo '<td>';
        echo $ro['unidad'];
        echo '</td>';
      echo '<td>';
        echo $ro['nombreProducto'];
        echo "</td>";
        echo '</tr>'; 
                echo '</center>'; 
        $jorge->close();
      }
        $roq=$registro->fetch_array();
        if ($roq['nombreProducto']=="") {
          ?>
             <tr> 
        <th colspan="4" rowspan="2">
        <br>
        <center>Solicitud sin productos</center>
        <br>
        </th>
      </tr>
<?php 
          }
?>
      </table>      
</div>
</fieldset>
</section>
       <br>
          <center>
  <form action="solicitudMaterial.php">
    <button  type="submit" class="btn btn-primary">Volver</button>
    </form>
    </center>
     </section>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>