<?php
include_once('../public/includes/config.php'); 
include 'pusher.php';

$req = $_POST['req'];

if($req=="check-video-chat"){
	$userid = $_POST['userid'];
	$sql = mysqli_query($conn, "SELECT * FROM tbl_videoroom WHERE cid='$userid'");
	if(($sql->num_rows)>0){
		$room = $sql->fetch_assoc()['roomid'];

		$data = array('roomid' => $room);

		pusher_trigger($pusher, 'video-chat-channel', 'video-call', $data);

		echo json_encode(['result'=>1,'room'=>$room]);
	}else{
		echo json_encode(['result'=>0]);
	}
}

if($req=="save-video-chat"){
	$room = $_POST['room'];
	$userid = $_POST['userid'];

	$sql = mysqli_query($conn, "INSERT INTO tbl_videoroom(cid, roomid) VALUES('$userid','$room')");

	if($sql){
		echo json_encode(['result'=>1]);
	}
}

?>