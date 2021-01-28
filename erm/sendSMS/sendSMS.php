<?php
      // COMMENT MUNA PARA DI MAUBOS CREDITS SA TXTLOCAL
      $newno = '+63'.substr("09074603935", 1,10);
      // Authorisation details.
      $username = "laurence.bermejo19@gmail.com";
      $hash = "67beda47b8c652f6122b7ae189b8c86a16c9e990aaec9efa047b1f99498bf437";

      // Config varia`bles. Consult http://api.txtlocal.com/docs for more info.
      $test = "0";

      // Data for text message. This is the text message data.
      $sender = "PDRRMO Laguna"; // This is who the message appears to be from.
      $numbers = $newno; // A single number or a comma-seperated list of numbers
      $message = "success";
      // 612 chars or less
      // A single number or a comma-seperated list of numbers
      $message = urlencode($message);
      $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
      $ch = curl_init('http://api.txtlocal.com/send/?');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch); // This is the result from the API
      curl_close($ch);
	echo $result;
?>