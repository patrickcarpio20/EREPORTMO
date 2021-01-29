<?php
include '../public/includes/config.php';
$aa=$_POST['aa'];
if ($aa == 0) {
	$id=$_POST['id'];	
$result=mysqli_query($conn,"UPDATE tbl_crimes SET archived = '1' WHERE id = '$id';");

echo 1;
}

if ($aa == 1) {
	$id=$_POST['id'];	
$result=mysqli_query($conn,"UPDATE tbl_complains SET archived = '1' WHERE id = '$id';");

echo 1;
}

if ($aa == 2) {
	$id=$_POST['id'];	
$result=mysqli_query($conn,"UPDATE tbl_concerns SET archived = '1' WHERE id = '$id';");

echo 1;
}
	


?>