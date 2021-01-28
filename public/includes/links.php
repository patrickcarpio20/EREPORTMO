<?php
	ob_start();

	include 'config.php';
	date_default_timezone_set('Asia/Manila');
	$now = date('F j, Y g:i a  ');

	$curdte = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	    <title>E-Report Mo!</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="icon" href="../public/images/e-logo.png" type="image/png">
	    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

	    <link rel="stylesheet" href="../public/css/open-iconic-bootstrap.min.css">
	    <link rel="stylesheet" href="../public/css/animate.css">
	    
	    <link rel="stylesheet" href="../public/css/owl.carousel.min.css">
	    <link rel="stylesheet" href="../public/css/owl.theme.default.min.css">
	    <link rel="stylesheet" href="../public/css/magnific-popup.css">

	    <link rel="stylesheet" href="../public/css/aos.css">

	    <link rel="stylesheet" href="../public/css/ionicons.min.css">
			
		<link rel="stylesheet" href="../public/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="../public/css/nouislider.css">

	    
	    <link rel="stylesheet" href="../public/css/flaticon.css">
	    <link rel="stylesheet" href="../public/css/icomoon.css">
	    <link rel="stylesheet" href="../public/css/style.css">
	    
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <style type="text/css">
	    	textarea {
	            font-size: 15px;
	            width: 100%;
	            display: block;
	            border-radius:3px;
	            /*overflow: hidden;*/
	            min-height: 120px;
	            background: transparent;
	            position: relative;
	            outline: 0;
	            resize: none;

	            -webkit-box-sizing: border-box;
	            -moz-box-sizing: border-box;
	            box-sizing: border-box;	    		
	    	}
	    	h6 {
	    		font-weight: bold;
	    	}
	    	.capitalized {
	    		text-transform: capitalize;
	    	}
	    	.text-black {
	    		color: black;
	    	}
			@media print {
				.noprint {
					visibility: hidden;
				}
			}
			input, select, textarea{
				border: 1px solid black!important;
			}

	    </style>
  	</head>