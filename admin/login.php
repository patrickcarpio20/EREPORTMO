

<?php if (empty($_SESSION['id'])):

include '../public/includes/config.php'; 

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
	    <link href="../public/css/login.css" rel='stylesheet' type='text/css'>

	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <style type="text/css">
	    	body{
	    		background-color: #3f6b91;
	    	}
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
	    </style>
  	</head>
<body>
		
  	<div class="main-section">

	<section class="ftco-section ftco-section-2 section-signup page-header hero-wrap">
		<div class="overlay"></div>
		<div class="container">
			<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../public/images/e-logo.png" alt="Urbanic Template" title="Urbanic Template" style="width:100%;"/>
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form class="form-login" method="POST" action="login.php">
						<?php 
									if (isset($_POST['submit'])) {
									    $username = $_POST['username'];
									    $password = $_POST['password'];
                                        //$phash = password_hash($password, PASSWORD_DEFAULT);
										$query = mysqli_query($conn, "SELECT * FROM tbl_users WHERE username = '$username'");
										// // $count=mysqli_num_rows($query);
										// echo $phash;
				                      	 

							            if (mysqli_num_rows($query) > 0) {
							            	$row = $query->fetch_array();

							            	if (password_verify($password,$row['password'])==true) {
												session_start();
												$_SESSION['id'] = $row['id'];
												header("Location: dashboard.php");
							            	}
						                    else {
						                        echo '<div class="alert alert-warning">
														<div class="container">
															<div class="d-flex">
																<div class="alert-icon">
																	<i class="ion-ios-checkmark-circle"></i>
																</div>
															<p class="mb-0 ml-2">
																Wrong Password!
															</p>
															</div>
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="ion-ios-close"></i></span>
															</button>
														</div>
													</div>	';
						                    }
							            }
							            else {
							              echo '<div class="alert alert-danger">
													<div class="container">
														<div class="d-flex">
															<div class="alert-icon">
																<i class="ion-ios-checkmark-circle"></i>
															</div>
														<p class="mb-0 ml-2">
															Username is not registered!
														</p>
														</div>
														<button type="button" class="close" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true"><i class="ion-ios-close"></i></span>
														</button>
													</div>
												</div>';
							            }
									}
								?>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text" style="background: #FF7600!important;"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
							</div>
							<input type="text" name="username" id="username" class="form-control"  placeholder="Username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text" style="background: #FF7600!important;"><i class="fa fa-key" aria-hidden="true"></i></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="submit" class="btn login_btn" style="background: #FF7600!important;">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
			</div>
		</div>
	</section>
    <!-- - - - - -end- - - - -  -->
	  	<!-- - - - - -end- - - - -  -->  	
	</div>

  	<!-- loader -->
  	
</body>
<?php include '../public/includes/cores.php'; ?>
 <?php else: ?>
    <?php echo header("Location: dashboard.php?login=true"); ?>
<?php endif ?>