<?php
session_start();
/*include 'conectar.php';
$jorge=conectar();
$registro=$jorge->query("SELECT u.codRolFROM usuario u
     INNER JOIN empleado e
     ON e.Documento=u.Empleado_Documento
     WHERE u.Usuario='$_SESSION[empleado]'");
if ($ro=$registro->fetch_array()) {}*/
if ($_SESSION['estado']==0 ) {
  header("Location:../loguin.php");
}

?>