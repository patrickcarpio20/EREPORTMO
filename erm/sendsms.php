<?php
include 'sms.php';
function sendSMS($contactno, $vercode){
	$result = itexmo($contactno,$vercode,"TR-E-REP121861_GSX2P", "ig{ds8d3il");
	if ($result == ""){
		echo "iTexMo: No response from server!!!
		Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
		Please CONTACT US for help. ";	
	}else if ($result == 0){
		echo "Message Sent!";
	}
	else{	
		echo "Error Num ". $result . " was encountered!";
	}
}

?>