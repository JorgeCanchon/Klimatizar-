<?php 
error_reporting(0);
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
?>
<!-- Modal -->
  <div class="modal fade" id="inst_Producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><i class='fa fa-plus'></i> Agregar nuevo Producto</h4>
        </div>
        <form class="form-horizontal" method="POST" action="../controlers/registrarProducto.php">
          <div class="modal-body">
          <!-- CODIGO P -->
            <div class="form-group">
              <label class="col-sm-3 control-label">CODIGO PRODUCTO</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" placeholder="Ingrese codigo"  name="codigo" required>
              </div>
            </div>
            <!-- NOMBRE -->
            <div class="form-group">
              <label for="nomPersona" class="col-sm-3 control-label">NOMBRE PRODUCTO</label>
              <div class="col-sm-8">
                <input class="form-control" placeholder="Nombre producto" name="nombre" required>
              </div>
            </div>
            <!-- CANTIDAD-->
            <div class="form-group">
              <label class="col-sm-3 control-label">CANTIDAD</label>
              <div class="col-sm-8">
                <input type="number" min=0  class="form-control" placeholder="Ingrese cantidad" name="cantidad" required>
              </div>
            </div>
            <!--UNIDAD pattern="[A-Za-z]{30}" -->
            <div class="form-group">
              <label class="col-sm-3 control-label">UNIDAD</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Ingrese unidad" name="unidad" required>
              </div>
            </div>
             <!--VALOR UNITARIO-->
            <div class="form-group">
              <label class="col-sm-3 control-label">VALOR UNITARIO</label>
              <div class="col-sm-8">
                <input type="number" min=0 class="form-control" placeholder="Ingrese valor" name="valor"  required>
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
