<?php
require_once 'core.php';
include 'conectar.php';
 if (isset($_POST['codigoC'])) {
  $codigo=$_POST['codigoC'];  
 $connecta=conectar(); 
      $query = "SELECT * FROM cargo WHERE codigoCargo='$codigo'";  
      $result = $connecta->query($query);  
      $row = $result->fetch_array();  
      echo json_encode($row);  
 }
 ?>