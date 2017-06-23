<?php 
require_once 'core.php';
 ?>
<?php
error_reporting(0); 
include_once 'conectar.php';
header('Content-type: application/vnd.ms-word');
header("Content-Disposition: attachment; filename=SOLICITUDMATERIAL.doc");
 header("Pragma: no-cache");
header("Expires: 0");
?>
<style type="text/css">
 		 .tablalistado{
      background-color: white;
      border-collapse: collapse;
      box-shadow: 0px 0px 8px #000;
      margin: auto;
    }
    .tablalistado th{
      border:1px solid #6A9E98;
    }
    .tablalistado td{
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffdd73; 
    }
 </style>	