<?php 
include '../public/includes/links.php'; 
include 'sendsms.php';

$reporttype = '3';

$char_set = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$code = str_shuffle(str_repeat($char_set, 2));
$code = substr($code, 0, 7);
?>
<body>
<style type="text/css">
	input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>
<div class="main-section">

<!-- START nav -->
<?php include '../public/includes/nav.php'; ?>
<!-- END nav -->

<!-- <section class="ftco-section"> </section> -->

<section class="ftco-section ftco-section-2 bg-light" id="javascriptsComponents" style="background-image: linear-gradient(#76b0e3, #3f6b91);">
<div class="container">
<div class="row" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 1);">
<div class="col-sm-6" style="padding:0;background-color:#FF7600;display: flex;justify-content: center;align-items: center;">
		
	<img src="../public/images/e-logo.png" style="width:80%;">
</div>
<div class="col-sm-6" style="padding:0;">
	<div class="myaccordion w-100 py-4 px-1 px-md-4" style="border-top:5px solid #FF7600;background-color: #f5faff;">
		<div class="card">
			<form method="POST">
				<div class="card-header" id="headingOne" style="padding:0;">
					<h5>Fill up Concern Form</h5>
				</div>
				<hr>
				<?php 
					if (isset($_POST['submit'])) {
						$description = $_POST['description'];
						$name = $_POST['name'];
						$number = $_POST['number'];

						$query = mysqli_query($conn, "INSERT INTO tbl_concerns (description, name, phone, created_at) VALUE ('$description', '$name', '$number', '$curdte') ");
						if ($query) {

							$complaint_last_rec_id = mysqli_insert_id($conn);
						
							$prv = mysqli_query($conn, "INSERT INTO tbl_report_verification(reporttype, reportid, verificationcode) VALUES('$reporttype', '$complaint_last_rec_id', '$code')");

							if($prv){ sendSMS($number, $code); }

							echo '<div class="alert alert-success">
									<div class="container">
										<div class="d-flex">
											<div class="alert-icon">
												<i class="ion-ios-checkmark-circle"></i>
											</div>
										<p class="mb-0 ml-2">
											You successfully helped the police by reporting. To further process your report, enter the verification code that has been sent to your mobile no. <a href="verifyreport.php" style="color:#FF7600;">here</a>. Thank You!
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
				

				<div class="card-body text-left" style="padding:0;">
					<div class="col-md-12" style="padding:0;">
						<label for="description"><h6>Concern Report:</h6></label>
						<div class="form-group has-default">
							<textarea id="description" name="description" type="text" class="form-control" required></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="name"><h6>Your name:</h6></label>
							<input id="name" name="name" type="text" class="form-control capitalized" autocomplete="off" required>
						</div>
						<div class="col-md-6">
							<label for="number"><h6>Contact No.:</h6></label>
							<input id="number" name="number" type="text" class="form-control" autocomplete="off" required maxlength="11" onkeydown="numonly(event)">
						</div>
					</div>
				</div><br>
				<div class="card-footer" style="background-color: white;">
					<div class="row" style="float: right;">
						<div>
							<button type="submit" name="submit" onclick="return confirm('Are you sure you want to submt this complain?')" class="btn" style="width:150px;color:#fff;background-color: #0313fc;">Submit</button>&emsp;
						</div>
						
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
</section>
<!-- - - - - -end- - - - -  -->

<!-- <?php include '../public/includes/footer.php'; ?> -->
</div>
<?php include '../public/includes/loader.php'; ?>
</body>
<?php include '../public/includes/cores.php'; ?>
<script src="../public/includes/attach-photo.js"></script>
<script type="text/javascript">
	function numonly(e){
		// Allow controls such as backspace, tab etc.
		  var arr = [8,9,16,17,20,35,36,37,38,39,40,45,46,109,189];

		  // Allow numbers
		  for(var i = 48; i <= 57; i++){
		    arr.push(i);
		  }
		  for(var i = 96; i <=105; i++){
		    arr.push(i);
		  }	

		  // Prevent default if not in array
		  if(jQuery.inArray(event.which, arr) === -1){
			alert("This field accepts numbers only");  
			document.querySelector("#number").value = "";
		    event.preventDefault();
		  }
	}
</script>