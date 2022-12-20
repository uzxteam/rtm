<?php
include "../../sozlama/config.php";

  $msg = "";

  if (isset($_POST['save'])) {
  
  
      $ads = mysqli_real_escape_string($conn, $_POST['ads']);
      $id = mysqli_real_escape_string($conn, $_POST['id']);
     

  	$sql = "INSERT INTO adsense (user_id,adsense) VALUES ('$id','$ads')";
 
  	mysqli_query($conn, $sql);

  	
  }
  
  header("Location:../index.php");
?>