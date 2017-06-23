<?php
require_once('core.php');
require_once('../lib/pdf/mpdf.php');
$conn = new mysqli('localhost', 'root', '', 'klimatizar');//CONECCION BD
$query ="SELECT * FROM proveedor";//CONSULTA EN LA BD
$prepare = $conn->prepare($query);
$prepare->execute();
$resultSet = $prepare->get_result();
while($proveedor[] = $resultSet->fetch_array());
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
           <th class="Nombre Proveedor">Nombre Proveedor</th>
            <th class="NIT">NIT</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Contacto Venta</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Visibilida</th>
          </tr>
          </thead>
          <tbody>';
          foreach ($proveedor as $proveedores) {
          $html .='<tr>
            <td class="nombreProveedor">'.$proveedores['nombreProveedor'].'</td>
          <td class="NIT">'.$proveedores['NIT'].'</td>
          <td class="Direccion">'.$proveedores['direccion'].'</td>
          <td class="Telefono">'.$proveedores['telefono'].'</td>
          <td class="Contactoventa">'.$proveedores['contactoventa'].'</td>
          <td class="Correo">'.$proveedores['correo'].'</td>
          <td class="Celular">'.$proveedores['celular'].'</td>
          <td class="Visibilidad">'.$proveedores['visibilidad'].'</td>
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