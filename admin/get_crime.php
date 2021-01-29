<?php
include '../public/includes/config.php';

$request = $_POST['req1'];

if ($request == 1) {
	$status=$_POST['status'];		
$result=mysqli_query($conn,"SELECT * FROM tbl_crimes WHERE status = '$status' AND archived = 0");
$rows = array();
while($rs = mysqli_fetch_assoc($result)){
  $rows[] = $rs;
}
echo json_encode($rows);
}
if ($request == 2) {
	$name = $_POST['name'];
    $result=mysqli_query($conn,"SELECT * FROM tbl_crimes WHERE name LIKE '%$name%' AND archived = 0");
$rows = array();
while($rs = mysqli_fetch_assoc($result)){
  $rows[] = $rs;
}
echo json_encode($rows);

}
if ($request == 3) {
	$status=$_POST['status'];		
$result=mysqli_query($conn,"SELECT * FROM tbl_complains WHERE status = '$status' AND archived = 0");
$rows = array();
while($rs = mysqli_fetch_assoc($result)){
  $rows[] = $rs;
}
echo json_encode($rows);
}
if ($request == 4) {
	$name = $_POST['name'];
    $result=mysqli_query($conn,"SELECT * FROM tbl_complains WHERE name LIKE '%$name%' AND archived = 0");
$rows = array();
while($rs = mysqli_fetch_assoc($result)){
  $rows[] = $rs;
}
echo json_encode($rows);

}



?>



