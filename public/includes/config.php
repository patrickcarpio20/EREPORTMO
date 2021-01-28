<?php
        ob_start();
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "ereportmo";
	
	$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

	if (!$conn) {
		die("Connection Failed: ".mysqli_connect_error());
	}
?>