<?php
include "../../sozlama/config.php";
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = mysqli_query($conn, "DELETE FROM kategoriya WHERE id = '$id'");
    header ("Location: ../kategoriya.php");
  }

 
  ?>