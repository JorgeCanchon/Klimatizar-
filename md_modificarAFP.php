<?php 
require_once('../controlers/core.php');
?><link   rel="shortcut icon" href="../images/LOGOKLIMACOL.jpg" type="image/x-icon">
     <div class="modal fade" id="modificarAFP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form  method="POST" action="../controlers/modificarAFP.php">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" align="center">Modificar AFP</h4>
          </div>
          <div class="modal-body">
          <div id="datos_ajax"></div> 
               <input type="text" class="form-control" name="codigo" id="codigoAFP" style="visibility:hidden;">
     <div class="form-group"> 
     <label>Nombre AFP</label>
        <input type="text" class="form-control" title="Ingrese solo letras" id="nombre" 
        name="nombreAFP" pattern="[a-z A-Z]{1,100}" required >
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
