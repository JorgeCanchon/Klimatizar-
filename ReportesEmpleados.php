<?php
require_once('../lib/pdf/mpdf.php');

$conn = new mysqli('localhost', 'root', '', 'klimatizar');//CONECCION BD
$query ="SELECT * FROM empleado";//CONSULTA EN LA BD
$prepare = $conn->prepare($query);
$prepare->execute();
$resultSet = $prepare->get_result();
while($empleado[] = $resultSet->fetch_array());
$resultSet->close();
$prepare->close();
$conn->close();




$html ='<header class="clearfix">
      <div id="logo">
        <img src="img/LOGO KLIMACOL.jpg">
      </div>
      <h1>Reportes</h1>
      <div id="company" class="clearfix">
        <div>Klimatizar Colombia S.A.S</div>
        <div>Powered by ADSI.SOFT<br /> Designed by ADSI.SOFT</div>
        <div>313259234 </div>
        <div><a href="http://www.msn.com/es-co/?ocid=mailsignout">ADSI.Soft@Hotmail.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Reportes</div>
        <div><span>CLIENTE</span> Gomez Ortiz Neydis </div>
        <div><span>EMAIL</span> <a href="http://klimatizar.000webhostapp.com/loguin.php"> klimacolsas@outlook.com</a></div>
        
        <div><span>TELEFONOS </span> 2592272 - 2592277</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
           
            <th class="DOCUMENTO">DOCUMENTO</th>
            <th class="NOMBRE COMPLETO">NOMBRE COMPLETO</th>
            <th> DIRECCION</th>
            <th> TELEFONO</th>
            <th> CORREO</th>
            <th> FECHA NACIMIENTO</th>
            <th> CARGO</th>
            <th> EPS</th>
            <th> ARL</th>
            <th> AFP</th>
            <th> Visibilidad</th>
          </tr>
          </thead>
          <tbody>';
          foreach ($empleado as $empleados) {
        	$html .='<tr>
           	<td class="DOCUMENTO">'.$empleados['Documento'].'</td>
        	<td class="NOMBRE COMPLETO">'.$empleados['NombreCompleto'].'</td>
        	<td class="DIRECCION">'.$empleados['Direccion'].'</td>
        	<td class="TELEFONO">'.$empleados['Telefono'].'</td>
        	<td class="CORREO">'.$empleados['Correo'].'</td>
        	<td class="FECHA NACIMIENTO">'.$empleados['FechaNacimiento'].'</td>
        	<td class="CARGO">'.$empleados['Cargo_codigoCargo'].'</td>
        	<td class="EPS">'.$empleados['EPS_idEPS'].'</td>
          <td class="ARL">'.$empleados['ARL_idARL'].'</td>
          <td class="AFP">'.$empleados['AFP_idAFP'].'</td>
          <td class="Visibilidad">'.$empleados['visisbilidad'].'</td>
          </tr>';
        	}
 			$html .='
			</tbody>
	        </table>
	        <div id="klimatizar">
	        <div>Klimatizar:</div>
	        <div class="klimatizar">
	        Asesoría, diseño, mantenimiento, suministro e instalación de sistemas de aire acondicionado, enfriamiento evaporativo y ventilación mecánica.
	        </div>
	        </div>
	        </main>';

			$mpdf = new mPDF('c', 'A4');
			$css= file_get_contents('css/style.css');
			$mpdf->writeHTML($css,1);
			$mpdf->writeHTML($html);
			$mpdf->Output('reporte.pdf', 'I');
			?>



					