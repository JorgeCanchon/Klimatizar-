 <?php  
 //fetch.php  
 if (isset($_POST['idPersona'])) {
  $id=$_POST['idPersona'];  
 $connecta = new mysqli("localhost", "root", "", "Klimatizar");  
      $query = "SELECT * FROM empleado WHERE Documento ='$id'";  
      $result = $connecta->query($query);  
      $row = $result->fetch_array();  
      echo json_encode($row);  
 }
 ?>