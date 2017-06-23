<?php 
require_once 'core.php';
require_once 'conectar.php';
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Klimatizar-Solicitud</title>
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
<br><br>  
  <section class="contenedor">
  <form method="POST" action="agregarSolicitud1.php">
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
            $registro=$jorge->query("SELECT idSolicitud FROM solicituddematerial ORDER BY idSolicitud DESC LIMIT 1");
            while ($reg=$registro->fetch_array()) 
            {
             $id=++$reg[0];
            }
            $jorge->close();
        ?>
        <input type="number" name="idSolicitud" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;" value="<?php echo $id; ?>" readonly="readonly" required></th>
          </td>   
          </tr>
          <tr>
      <th colspan="2">Obra:</th>
       <th colspan="2">
<select name="codigoObra" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;" required> 
       <?php 
$jorge=conectar();
$registros=$jorge->query("SELECT idObra,nombreObra FROM obra WHERE visibilidad=1");
while ($reg=$registros->fetch_array()) {
                  echo "<option value=\"".$reg['idObra']."\">".$reg['nombreObra']."</option>";
                }
                $jorge->close();
        ?>
        </select></th>
        </tr>
        <tr>
        <th colspan="2">Fecha:</th>
        <th colspan="2">
        <input type="text" name="fecha" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;" value="<?php echo date('j-n-Y'); ?>" readonly="readonly"  required></th>
      </tr>
<tr>
  <td colspan="2"><b>Cliente:</b></td>
  <td colspan="2">
    <select name="codigoCliente" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;" required> 
       <?php 
$jorge=conectar();
$registros=$jorge->query("SELECT codigoCliente,nombreCliente FROM cliente WHERE visibilidad=1");
while ($reg=$registros->fetch_array()) {
                  echo "<option value=\"".$reg['codigoCliente']."\">".$reg['nombreCliente']."</option>";
                }
                $jorge->close();
        ?>
        </select>
  </td>
</tr>
<tr> 
<td th colspan="2">
 <b>Observaciones</b>
</td>
<td colspan="2">
      <textarea name="observacion" style="border-radius:5px;width: 370px;border-color:#BDBDBD;border-collapse:  collapse;">Ninguna
       
      </textarea>
</td>
</tr>
<tr>
<td th colspan="2">
 <b>Entrega</b>
</td>
<td th colspan="2">
<select name="docu" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;" required> 
       <?php 
$jorge=conectar();
$registros=$jorge->query("SELECT Documento,nombreCompleto FROM empleado WHERE visibilidad=1 AND Documento='$_SESSION[empleado]'");
while ($reg=$registros->fetch_array()) {
                  echo "<option value=\"".$reg['Documento']."\">".$reg['nombreCompleto']."</option>";
                }
                $jorge->close();
        ?>
</select>
</td>
</tr>
<td colspan="4">
        <input class="btn btn-primary" type="submit" value="Continuar" >
        <input type="reset" class="btn btn-primary" value="Reset">
<?php 
echo '<a href="solicitudMaterial.php" class="btn btn-primary">Volver</a>';
 ?>
</td>
</tr>
      </table>      
</div>
</fieldset>
</form>
</section>
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
    </script>
</body>
</html>