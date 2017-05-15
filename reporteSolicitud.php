<?php
require_once('../lib/pdf/mpdf.php');

$conn = new mysqli('localhost', 'root', '', 'klimatizar');//CONECCION BD
$query ="SELECT * FROM solicituddematerial";//CONSULTA EN LA BD
$prepare = $conn->prepare($query);
$prepare->execute();
$resultSet = $prepare->get_result();
while($solicituddematerial[] = $resultSet->fetch_array());
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
           <th class="service">CS</th>
            <th class="desc">OBSE</th>
            <th>C</th>
            <th>F</th>
            <th>FT</th>
            <th>O</th>
            <th>E</th>
            <th>V</th>
          </tr>
          </thead>
          <tbody>';
          foreach ($solicituddematerial as $solicituddemateriales) {
        	$html .='<tr>
           	<td class="CS">'.$solicituddemateriales['idCodigoSolicitud'].'</td>
        	<td class="OBSE">'.$solicituddemateriales['observaciones'].'</td>
        	<td class="C">'.$solicituddemateriales['Cliente_CodigoCliente'].'</td>
        	<td class="F">'.$solicituddemateriales['fecha'].'</td>
        	<td class="FT">'.$solicituddemateriales['FichaTecnica_CodigoFicha'].'</td>
        	<td class="O">'.$solicituddemateriales['FichaTecnica_Obra_CodigoObra'].'</td>
        	<td class="E">'.$solicituddemateriales['FichaTecnica_Empleado_Documento'].'</td>
        	<td class="V">'.$solicituddemateriales['Visibilidad'].'</td>
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



					