<?php

        ob_start();

	$servername = "localhost";

	$dbUsername = "root";

	$dbPassword = "";

	$dbName = "ereportmo"; 



	// $servername = "sql207.byethost3.com";

	// $dbUsername = "b3_25725151";

	// $dbPassword = "secretadmin";

	// $dbName = "b3_25725151_ereportmo";

	

	$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);



	if (!$conn) {

		die("Connection Failed: ".mysqli_connect_error());

	}

?>