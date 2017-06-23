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
    <title>Klimatizar-Producto</title>
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
  <br>
  <section class="contenedor">
     <div class="row">
      <div class="col-md-2 col-md-offset-10">
        <button class="btn btn-primary" data-toggle="modal" data-target="#inst_Producto">
          Agregar
          <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
        </button>
      </div><!-- /.span -->
    </div>
    <br>
    <fieldset>
     <legend><h1 style="color:black;">LISTADO PRODUCTOS</h1></legend> 
<?php 
include 'function.php';
include '../Crud/md_agregarProducto.php';
include '../Crud/md_modificarProducto.php';
include '../Crud/md_agregarP.php';
include '../Crud/md_Pro.php';
 ?>
 <?php 
$jorge=conectar();
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 10; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
        $statement = "producto";
echo '<div class="table-responsive">';
echo '<table class="table table-bordered table-hover">';
echo '<tr><th><center>CODIGO</center></th><th><center>NOMBRE</center></th><th><center>CANTIDAD</center></th><th><center>UNIDAD</center></th><th><center>VALOR UNITARIO</center></th><th><center>PROVEEDOR</center></th><th><center>AGREGAR PRO</center></th><th width="10%"></th></tr>';
$res=$jorge->query("SELECT * FROM  {$statement}  WHERE visibilidad=1 order by idProducto asc LIMIT {$startpoint} , {$limit} ");
while ($row=$res->fetch_array()) {
	echo '<tr>';
	echo '<td>';
  echo '<center>';
	echo $row['idProducto'];
  echo '</center>';
	echo '</td>';
	echo '<td>';
	echo $row['nombreProducto'];
	echo '</td>';
	echo '<td>';
  echo '<center>';
	echo $row['cantidad'];
  echo '</center>';
	echo '</td>';
	echo '<td>';
  echo '<center>';
	echo $row['unidad'];
  echo '</center>';
	echo '</td>';
	echo '<td>';
  echo '<center>';
	echo $row['valorUnitario'];
  echo '</center>';
	echo '</td>';
    ?>
    <td>
    <form method="POST" action="verProducto.php">
      <input class="btn btn-primary" type="submit" value="ver">
       <input class="btn btn-primary" type="text" name="codigoPro" value="<?php echo $row['idProducto'];?>" style="width:0.1px;visibility:hidden;">
      </form>
    </td>
    <td>
            <button href="" class="btn btn-primary" data-id="<?php echo $row['idProducto'];?>" data-toggle="modal" data-target="#modificarP">Agregar P</button>
</td>
    <td>
        <a href="" id="<?php echo $row['idProducto'];?>" class="btn btn-sm btn-warning btn-editar" data-toggle="modal" data-target="#modificarProducto"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <button id="<?php echo $row['idProducto'];?>" name="eliminar" class="btn btn-sm btn-danger">
    <i class="fa fa-trash-o" aria-hidden="true"></i>
    </button>
    </td>
  <?php 

	echo '</tr>';
}
echo '</table>';
echo '</div">';
echo "<br>";
echo '<div id="pagingg"  >';
echo pagination($statement,$limit,$page);
echo "</div>";

$jorge->close();
  ?> 
  </fieldset> 
  </section>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/modalsProducto.js"></script>
    <script>
    $(document).ready(function(){
      $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });
 $("#modificarP").on('show.bs.modal', function (event) {   //SE ACTIVA CUANDO SE HACE CLIC EN EL BOTON CON CLASE (btn-editar)

            var button=$(event.relatedTarget)   
            var id=button.data('id')
            var modal=$(this)
            modal.find('.modal-body #codigo').val(id)
        });
    </script>
</body>
</html>