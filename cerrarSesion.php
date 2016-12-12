<?php 
session_start();
unset($SESSION['estado']);
unset($SESSION['usuario']);
$SESSION['estado']=0;
header("Location:../publicidad/loguin.php")
 ?>