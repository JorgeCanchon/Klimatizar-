 <?php  
include 'conectar.php';
 //fetch.php  
 if (isset($_POST['idPersona'])) {
  $id=$_POST['idPersona'];  
 $connecta = conectar(); 
      $query = "SELECT * FROM eps WHERE idEPS =$id";  
      $result = $connecta->query($query);  
      $row = $result->fetch_array();  
      echo json_encode($row);  
 }
 ?>