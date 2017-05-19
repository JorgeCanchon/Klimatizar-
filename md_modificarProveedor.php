<?php 
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
?><link   rel="shortcut icon" href="../images/LOGO KLIMACOL.jpg" type="image/x-icon">
     <div class="modal fade" id="modificarProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form  method="POST" action="../controlers/modificarProveedor.php">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" align="center">Modificar proveedor</h4>
          </div>

          <div class="modal-body">
          <div id="datos_ajax"></div> 
      <input id="NIT" name="nitP" hidden="false">
     <div class="form-group"> 
     <label>Nombre proveedor</label>
        <input type="text" class="form-control" title="Ingrese solo letras" id="nombre" name="nombreP" pattern="[a-z A-Z]{1,100}" required >
     </div>
     <div class="form-group">
     <label>Direccion</label>
     <input type="text" class="form-control" name="Direccion" id="direccion" pattern="[a-z A-Z0-9]{1,45}" required>
    </div>
    <div class="form-group">
     <label>Telefono</label>
     <input type="tel" class="form-control" name="Telefono" id="telefono" pattern="[0-9]{7,25}" required>
     </div>
          <div class="form-group"> 
     <label>Contacto venta</label>
        <input type="text" class="form-control" title="Ingrese solo letras" id="contacto" name="contacto" pattern="[a-z A-Z]{1,100}" required >
     </div>

 	<div class="form-group">
     <label>Correo</label>
    <input type="email" class="form-control" name="Correo" id="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"  required>
  </div>
      <div class="form-group">
     <label>Celular</label>
     <input type="tel" class="form-control" name="celu" id="celu" pattern="[0-9]{7,25}" required>
     </div>
</div>
<div class="modal-footer">
               <button class="btn btn-primary" type="submit">Enviar </button>
               <button class="btn btn-tema" data-dismiss="modal">Cerrar</button>
          </div>
</form>
        </div> 
      </div> 
    </div>
