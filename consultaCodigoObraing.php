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
              <li  class="active"><a href="PrincipalIngeniero.php"><span class="fa fa-home fa-fw"></span>Home</a></li>
                  <li  class="active"><a data-toggle="dropdown"  href="#"><span class="fa fa-cog fa-spin fa-1x fa-fw"></span>Obra<span class="caret"></span></a>
                <ul class="dropdown-menu" role="Menu" >
                <li><a href="GestionObra.php">Listado</span></a></li> 
                 <li><a href="consultaObra.php">Buscar obra</a></li>
              </ul>
                  <li  class="active"><a href="#"  data-toggle="dropdown"><span class="fa fa-check-square-o"></span> Kardex <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="Menu" >
                    <li><a href="solicitudMaterialingeniero.php" >Solicitud de material</span></a></li> 
                  </ul>
                 </li>

                  <li  class="active"><a href="#" data-toggle="dropdown" ><span class="fa fa-book fa-fw"> </span> Consulta 
                  <span class="caret"></a>
                <ul class="dropdown-menu" role="Menu" >
                  
                  <li><a href="#">Obra</a></li>
                  <li role="separator" class="divider"></li>
                   <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Kardex<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <a class="test" href="#">Solicitud de material <span class="caret"></span></a> 
          </li>            
        </ul>
      </li>
    </ul>
                  </li> 
                                                      <!--usuario-->
                  <li  class="active" ><a href="#" data-toggle="dropdown" ><?php echo $_SESSION['usuario']; ?><span class="caret"></a>
              <ul class="dropdown-menu" role="Menu" >
    <li><a href="ModificarInformacioning.php" >Informacion personal</a></li> 
    <li><a href="modificarContrasenaing1.php">Cambiar contraseña</a></li>
                  </li>
              </ul>
                  </li>
              <!--Gestion de empleados-->
                <li  class="active" style="visibility: hidden;"><a href="#" data-toggle="dropdown" ><span  class="fa fa-user"></span>  Gestion de Empleados 
      <span class="caret"></span></a>
              </li>
  </li>
  <!--Termina Gestion de Empleados-->
                  <!--Producto-->

                  <li  class="active" style="visibility: hidden;"><a href="#" data-toggle="dropdown" >Producto<span class="caret"></a>
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
     <li><a class="fa fa-power-off fa-2x" href="cerrarSesion.php"></a></li> 
      </ul>
          </div><!--/.nav-collapse -->
          </nav>
        </div><!--/.container-fluid -->
   <br>
   <br>
   <br>
   <br>
   <br>
    <section class="contenedor">
 <fieldset>
 
 <legend><h1 style="color:black;">TABLA OBRA</h1></legend> 
 <?php 
 include 'conectar.php';
 ?>
  <?php 
 $jorge= conectar();
 $registros=$jorge->query("select idObra,contratante,nombreObra,fechaInicio,fechaFin from obra where idObra='$_REQUEST[Obra]'")
 or die($jorge->error);
 
 if($reg=$registros->fetch_array())
 {
   echo '<div class="table-responsive">';
   echo '<table class="table table-bordered table-hover">';
   echo '<tr><th><center>codigo obra</center></th><th>contratante</th><th>nombreObra</th><th>fechaInicio</th><th>fechaFin</th><th>Duracion</th><th width="7%"> </th></tr>';
 	echo '<tr>';
   echo '<td>';
   echo $reg['idObra'];
   echo '</td>';
   echo '<td>';
   echo $reg['contratante'];
   echo '</td>';
   echo '<td>';
   echo $reg['nombreObra'];
   echo '</td>';
   echo '<td>';
   echo $reg['fechaInicio'];
   echo '</td>';
   echo '<td>';
   echo $reg['fechaFin'];
   echo '</td>';
 echo '<td>';
   $datetime1 = date_create($reg['fechaFin']);
 $datetime2 = date_create($reg['fechaInicio']);
 $interval = date_diff($datetime2, $datetime1);
 echo $interval->format('%R%a días');
   echo '</table>';
}

else {
	echo '<script type="text/javascript">  
          alert("codigo obra No encontrado");
          window.location="consultaObra.php";
          </script>'; 
}

$jorge->close();
  ?>	
   <br>
   <br>
      <form action="consultaObra.php">
     <button style="margin-left:400px;" type="submit" class="btn btn-primary">Volver</button>
     </form>
     </fieldset>

     
 </section>
   
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