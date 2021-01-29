<?php
include '../public/includes/config.php';



$aa=$_POST['aa'];	
if ($aa = 1) {
	$id=$_POST['id'];	
$result=mysqli_query($conn,"SELECT * FROM tbl_crimes WHERE id = '$id'");
$rows = array();
while($rs = mysqli_fetch_assoc($result)){
  $rows[] = $rs;
}
echo json_encode($rows);
}

?>



