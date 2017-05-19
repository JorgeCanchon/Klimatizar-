<?php 
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Klimatizar-Proveedor</title>
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="shortcut icon" href="../images/LOGO KLIMACOL.jpg" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <style type="text/css">
       .navbar-default {
    background-color: #337ab7;
    }
    body {
     background-color:#eee;
    }
    </style>
  </head>
    <body>
      <div class="contenedor">
          <nav class="navbar navbar-default">
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
                <li><a href="#">Listado</span></a></li> 
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
                        <li><a tabindex="-1" href="#">Listado</a></li>
                        <li><a tabindex="-1" href="#">Buscar producto</a></li>
                      </ul>
                  </li>
                  <li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">Proveedor<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="verProveedor2.php">Listado</a></li>
                        <li><a tabindex="-1" href="#">Buscar producto</a></li>
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
        </div><!--/.container-fluid -->
      </nav>
   <section class="contenedor">
<fieldset>

<legend><h1 style="color:black;">TABLA PROVEEDOR</h1></legend> 
<?php   
include 'conectar.php';
 ?>
 <?php  
$jorge=conectar();
$registro=$jorge->query("select nombreProveedor,NIT,direccion,telefono,contactoVenta,correo,celular from proveedor where NIT='".$_REQUEST['NIT']."'")
or die($jorge->error);
if ($row=$registro->fetch_array()) {
echo '<div class="table-responsive">';
echo '<table class="table table-bordered table-hover">';
echo "<tr>";
echo '<th>NIT</th>';
echo '<th>NOMBRE</th>';
echo '<th>DIRECCION</th>';
echo '<th>TELEFONO</th>';
echo '<th>CONTACTO DE VENTA</th>';
echo '<th>CORREO</th>';
echo '<th>CELULAR</th>';
echo '<th width="10%"></th>';
echo "</tr>";
          echo "<tr>";
          echo "<td>";
          echo $row['NIT'];
          echo "</td>";
          echo "<td>";
          echo $row['nombreProveedor'];
          echo "</td>";
          echo "<td>";
          echo $row['direccion'];
          echo "</td>";
          echo "<td>";
          echo $row['telefono'];
          echo "</td>";
          echo "<td>";
          echo $row['contactoVenta'];
          echo "</td>";
          echo "<td>";
          echo $row['correo'];
          echo "</td>";
          echo "<td>";
          echo $row['celular'];
          echo "</td>";
          include '../Crud/md_modificarProveedor.php';
          ?>
            <td>
        <a href="" id="<?php echo $row["NIT"];?>" class="btn btn-sm btn-warning btn-editar" data-toggle="modal" data-target="#modificarProveedor"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <button id="<?php echo $row["NIT"];?>" name="eliminar" class="btn btn-sm btn-danger">
    <i class="fa fa-trash-o" aria-hidden="true"></i>
    </button>
    </td>
    <?php 
              echo "</tr>";
echo "</table>";
echo "</div>";
$jorge->close();
}
  ?>
  <br>
  <br>
  <center>
<form action="consultaProveedor1.php">
    <button style="margin-left:125px;" type="submit" class="btn btn-primary">Volver</button>
    </form>
    </center>
</section>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/modalsProveedor.js"></script>
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