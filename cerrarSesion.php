<?php 
session_start();
unset($_SESSION['estado']);
unset($_SESSION['usuario']);
$_SESSION['estado']=0;
header("Location:../publicidad/loguin.php")
 ?>