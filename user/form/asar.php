<?php
include "../../sozlama/config.php";

  $msg = "";

  if (isset($_POST['save'])) {
  
  	$fayl = $_FILES['fayl']['name'];
      $nomi = mysqli_real_escape_string($conn, $_POST['nomi']);
      $matn = mysqli_real_escape_string($conn, $_POST['matn']);
  
  
  	$target = "../fayl/".basename($fayl);

  	$sql = "INSERT INTO kitob (pdf,nomi,matn) VALUES ('$fayl','$nomi','$matn')";
 
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['fayl']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  
  header('Location:../index.php');
?>