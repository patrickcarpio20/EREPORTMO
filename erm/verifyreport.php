<?php 
include '../public/includes/links.php'; 
$reporttype = '0';
?>
<body>
 <link href="../public/css/login.css" rel='stylesheet' type='text/css'>
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

<div class="main-section">
<section class="ftco-section ftco-section-2 section-signup page-header hero-wrap">
	<div class="overlay"></div>
	<div class="container">
		<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card" style="width:70%!important;height:100%!important;margin-top: 5%;">
			<div class="d-flex justify-content-center">
				
				<div class="brand_logo_container">
					<a href="index.php">
					<img src="../public/images/e-logo.png" alt="Urbanic Template" title="Urbanic Template" style="width:70%;"/></a>
				</div>
			</div>
			<div style="padding: 0% 2%;">
				<form class="form" method="POST" style="color:#fff;padding-top: 10%;">
					Enter the code that has been sent to your mobile no. for report verification:
					<input class="form-control" name="vc" style="width:100%;"><br>
					<button class="btn btn-success" name="verify" type="submit" style="float: right;">
						VERIFY
					</button>
					
				</form>
				<?php
					if(isset($_POST['verify'])){
						$vc = strtoupper(mysqli_real_escape_string($conn, $_POST['vc']));
						
						$gvc = mysqli_query($conn, "SELECT verificationcode FROM tbl_report_verification WHERE verificationcode='$vc' AND status='0'");
						if(mysqli_num_rows($gvc)>0){
							$pvc = mysqli_query($conn, "UPDATE tbl_report_verification SET status='1' WHERE verificationcode='$vc'");

							if($pvc){
                                $grt = mysqli_query($conn, "SELECT reporttype,reportid FROM tbl_report_verification WHERE verificationcode='$vc'");
                                while($rs=mysqli_fetch_assoc($grt)){
                                    $rt = $rs['reporttype'];
                                    $ri = $rs['reportid'];
                                }

                                if($rt=='1'){
                                    $updr = mysqli_query($conn, "UPDATE tbl_crimes SET status='V' WHERE id='$ri'");
                                }else if($rt=='2'){
                                    $updr = mysqli_query($conn, "UPDATE tbl_complains SET status='V' WHERE id='$ri'");
                                }else if($rt=='3'){
                                    $updr = mysqli_query($conn, "UPDATE tbl_suggestions SET status='V' WHERE id='$ri'");
                                }else if($rt=='4'){
                                    $updr = mysqli_query($conn, "UPDATE tbl_concerns SET status='V' WHERE id='$ri'");
                                }
    
                                $_SESSION['sysmsg'] = 'success';
                            }
						}else{
							$_SESSION['sysmsg'] = 'error';
						}
					}
				?>
			</div>
	
			<div class="mt-4">
				
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

<!-- <?php include '../public/includes/footer.php'; ?> -->
</div>
<?php include '../public/includes/loader.php'; ?>
</body>
<?php include '../public/includes/cores.php'; ?>

<script type="text/javascript">
	var alert = function(msg){
		alertify.alert("EREPORTMO:",msg, function(){
			alertify.message('OK');
		});
	}

	<?php if ($_SESSION['sysmsg']=="success"): ?>
		alert("Report Verified! <br>Our Police Personnel will act on this report immediately! Thank You!");
	<?php else: ?>
		alert("Verification Code doesn't exist");
	<?php endif ?>
</script>


