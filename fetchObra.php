 <?php  
include 'conectar.php';
 //fetch.php  
 if (isset($_POST['idPersona'])) {
  $id=$_POST['idPersona'];  
 $connecta = conectar(); 
      $query = "SELECT * FROM obra WHERE idObra ='$id'";  
      $result = $connecta->query($query);  
      $row = $result->fetch_array();  
      echo json_encode($row);  
 }
 ?>