<?php
include "../../sozlama/config.php";

  $msg = "";

  if (isset($_POST['save'])) {
  
  
      $kategoriya = mysqli_real_escape_string($conn, $_POST['kategoriya']);
     

  	$sql = "INSERT INTO kategoriya (kategoriya) VALUES ('$kategoriya')";
 
  	mysqli_query($conn, $sql);

  	
  }
  
  header("Location:../kategoriya.php");
?>