<?php
include('../public/includes/config.php');
session_start();

$loginid = $conn->real_escape_string($_POST['loginid']);

$sql = $conn->query("SELECT * FROM tbl_citizens WHERE contactno='$loginid' LIMIT 1");

if(($sql->num_rows)>0){
	$result = $sql->fetch_assoc();

	$_SESSION['uid'] = $result['id'];

	
}else{

}

exit();
?>