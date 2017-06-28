<?php 
require_once('../controlers/core.php');
?>
<?php 
$mysql=conectar();
$i=0;
$row=$mysql->query("SELECT nombreAFP FROM afp")or die($mysql->error);
while ($vector=$row->fetch_array()) {
	$afp[$i]=$vector['nombreAFP'];
	$i++;
}
$mysql->close();
 ?>
<!-- Modal -->
	<div class="modal fade" id="inst_AFP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class='fa fa-plus'></i> Agregar nueva AFP</h4>
				</div>
				<form class="form-horizontal" method="POST" action="../controlers/InsertarAFP.php">
					<div class="modal-body">
					<!-- CODIGO -->
						<div class="form-group">
							<label class="col-sm-4 control-label" style="margin-left: -0.9cm;">NOMBRE AFP</label>
							<div class="input-group">
							  <input type="text" class="form-control"  id="docu" name="nombreAFP" title="Ingrese solo letras"   placeholder="Ingrese nombre" required >
							  <span class="input-group-btn" >
										<button type="button" class="btn btn-secondary"
										onclick="validar()">
										<i class="fa fa-search" aria-hidden="true"></i>
										</button>
							</span>
							</div>
						</div>
							</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<script type='text/javascript'>
<?php 
$js_array=json_encode($afp);
echo "var vector=".$js_array.";\n";
 ?>
		function validar() {
			var doc = document.getElementById('docu').value;
			var control = 0;
				if (doc == "") {
					alert("Nombre invalido, se encuentra vacio ");
				}else{
					for (var i = 0; i < vector.length; i++) 
					{
						if(vector[i] == doc)
							{
								control=1;
							}
					}
					if (control === 1) 
					{
						alert("Nombre invalido " +" " + doc + " "+" ya se encuentra registrado");
					}else
					{
						alert("Nombre valido " + doc);
					}	
				}
		}
</script>





