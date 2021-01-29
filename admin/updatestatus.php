<?php
include '../public/includes/config.php';
  

  $aa = $_POST['aa'];
  if ($aa == 1) {
  $id=$_POST['id'];	
$result=mysqli_query($conn,"UPDATE tbl_crimes SET status = 'P' WHERE id = '$id';");

echo 1;

  }
	
	if ($aa == 2) {
  $id=$_POST['id'];	
$result=mysqli_query($conn,"UPDATE tbl_complains SET status = 'P' WHERE id = '$id';");

echo 1;

  }
  if ($aa == 3) {
  $id=$_POST['id'];	
$result=mysqli_query($conn,"UPDATE tbl_concerns SET status = 'P' WHERE id = '$id';");

echo 1;

  }

?>