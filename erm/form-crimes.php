<?php 
include '../public/includes/links.php'; 
include 'uploadphotos.php';
include 'sendsms.php';
$reporttype = '1';

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
	<form method="POST" id="formcrimes" enctype="multipart/form-data">
		<div class="card-header" id="headingOne" style="padding:0;">
			<h5>Fill up Crime Form</h5>
		</div>
		<hr>
		<?php 
			if (isset($_POST['submit'])) {
				$description = $_POST['description'];
				$location = $_POST['location'];
				$name = $_POST['name'];
				$number = $_POST['number'];
				$address = $_POST['address'];
				$email = $_POST['email'];

				if ($description) {
					$query = mysqli_query($conn, "INSERT INTO tbl_crimes (description, location, name, address, phone, email, created_at) VALUES('$description', '$location', '$name', '$address', '$number', '$email', '$curdte') ");
					if ($query) {
						
						$complaint_last_rec_id = mysqli_insert_id($conn);
						
						UploadPhotos($_FILES['files'],$reporttype, $complaint_last_rec_id, $conn);

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
				else {
					echo '<div class="alert alert-danger">
								<div class="container">
									<div class="d-flex">
										<div class="alert-icon">
											<i class="ion-ios-checkmark-circle"></i>
										</div>
									<p class="mb-0 ml-2">
										Please indicate category
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
				<!-- <label for="description"><h6>Crime report</h6></label> -->
				<!-- <div class="form-group has-default">
					<textarea id="description" name="description" type="text" class="form-control" required></textarea>
				</div> -->
				<label for="categories"><h6>&emsp;Select Report Category:</h6></label>
				<div class="form-group ">
					<div class="col-md-12">
	                    <?php $complaints = mysqli_query($conn, "SELECT * FROM tbl_complain_categories "); ?>

						<select id="description" name="description" type="text" class="form-control"required>
							<option value="0" disabled selected>Select Report Case</option>

	                          <?php foreach($complaints as $row) { ?>
	                              <option value="<?php echo $row['complaint']; ?>"><?php echo $row['complaint']; ?></option>
	                          <?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for="location"><h6>Location or idea where crime was?</h6></label>
						<input id="location" name="location" type="location" class="form-control" autocomplete="off" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for="name"><h6>Your name:</h6></label>
						<input id="name" name="name" type="text" class="form-control capitalized" autocomplete="off" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for="address"><h6>Your Complete Address:</h6></label>
						<input id="address" name="address" type="text" class="form-control" autocomplete="off" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label for="email"><h6>Email:</h6></label>
						<input id="email" name="email" type="email" class="form-control" autocomplete="off" required>
					</div>
				</div>
				
				<div class="col-md-12">
					<label for="number"><h6>Contact No.:</h6></label>
					<input id="number" name="number" type="text" class="form-control" autocomplete="off" maxlength="11" style="width:100%;" onkeydown="numonly(event)">
				</div><br>
				
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
				<div class="field" align="left">
				  <h3>Upload Image Evidences</h3>
				  <input type="file" id="files" name="files[]" multiple form="formcrimes" style="border:none!important;" />
				</div>
				</div>
			</div><br>
			
		</div>
		<div class="card-footer" style="background-color: white;">
			<div class="row" style="float: right;">
				<div>
					<button type="submit" name="submit" onclick="return confirm('Are you sure you want to submt this crime report?')" class="btn" style="width:150px;color:#fff;background-color: #0313fc;">Submit</button>&emsp;
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