<?php 
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
?>
<!-- Modal -->
  <div class="modal fade" id="inst_Proveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><i class='fa fa-plus'></i> Agregar nuevo Proveedor</h4>
        </div>
        <form class="form-horizontal" method="POST" action="../controlers/registrarProveedor.php">
          <div class="modal-body">
          <!-- NIT -->
            <div class="form-group">
              <label class="col-sm-3 control-label">NIT</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Ingrese NIT" min=0 name="NIT" required>
              </div>
            </div>
            <!-- NOMBRE -->
            <div class="form-group">
              <label for="nomPersona" class="col-sm-3 control-label">Nombre</label>
              <div class="col-sm-8">
                <input class="form-control" placeholder="Nombre Completo" name="nombre" required>
              </div>
            </div>
            <!-- DIRECCION -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Direccion</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Ingrese Direccion" name="direccion" required>
              </div>
            </div>
            <!-- TELEFONO -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Telefono</label>
              <div class="col-sm-8">
                <input type="number" min=0 class="form-control" placeholder="Ingrese telefono" name="telefono" required>
              </div>
            </div>
             <!-- CONTACTO DE VENTAS-->
            <div class="form-group">
              <label class="col-sm-3 control-label">Contacto de ventas</label>
              <div class="col-sm-8">
                <input type="text" min=0 class="form-control" placeholder="Ingrese contacto" name="contacto" pattern="[A-Za-z]{30}" required>
              </div>
            </div>
            <!-- EMAIL -->
            <div class="form-group">
              <label  class="col-sm-3 control-label">E-mail</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" placeholder="Ingrese Email" name="correo" required>
              </div>
            </div>
             <!--CELULAR -->
            <div class="form-group">
              <label class="col-sm-3 control-label">Celular</label>
              <div class="col-sm-8">
                <input type="number" min=0 class="form-control" placeholder="Ingrese celular" name="celular" required>
              </div>
            </div>
              </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
          </div>
        </form>
      </div>
    </div>
  </div>
