<?php include '../includes/links.php'; ?>
<?php include '../includes/session.php'; ?>
<body>
<style type="text/css">
	.box {
	    -webkit-box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
	    -moz-box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
	    box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
	    padding: 0px; border-radius: 10px;
	}
</style>
  	<div class="main-section">

    	<!-- START nav -->
    	<?php include '../includes/nav.php'; ?>
    	<!-- END nav -->

	  <section class="ftco-section ftco-section-2 bg-light" id="javascriptsComponents">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="myaccordion w-100 py-4 px-1 px-md-4">
							<div class="card">
								<form method="POST">
									<div class="card-header" id="headingOne">
										<h5>Dashboard</h5>
									</div>

									<div class="card-body text-left">
										<div class="row">

											<div class="col-md-3">
							                    <div class="card box">
							                    	<div class="card-header text-center" style="padding: 0px;">
							                    		<div class="col-md-12">
							                    			<div class="col-md-12 bg-danger box" style="margin-top: -10px;">
							                    				<h5 class="text-white">Crime Reports</h5>
							                    			</div>
							                    			<div class="row">
								                    			<div class="col-md-12 text-left">
								                    				<h5 class="text-black">Total Crime Reports</h5>
								                    				<h5 class="text-right">
													                    <?php
													                      $result = mysqli_query($conn, "SELECT * FROM tbl_crimes");
													                      echo mysqli_num_rows($result);
													                    ?>
													                </h5>
								                    			</div>
							                    			</div>
								                    		<hr>
								                    		<div class="col-md-12">
								                    			<a href="table-crimes.php">See crime reports</a>
								                    		</div>
							                    		</div>
							                    	</div>
							                    </div>
											</div>

											<div class="col-md-3">
							                    <div class="card box">
							                    	<div class="card-header text-center" style="padding: 0px;">
							                    		<div class="col-md-12">
							                    			<div class="col-md-12 bg-info box" style="margin-top: -10px;">
							                    				<h5 class="text-white">Complaints</h5>
							                    			</div>
							                    			<div class="row">
								                    			<div class="col-md-12 text-left">
								                    				<h5 class="text-black">Total Complaints</h5>
								                    				<h5 class="text-right">
													                    <?php
													                      $result = mysqli_query($conn, "SELECT * FROM tbl_complains");
													                      echo mysqli_num_rows($result);
													                    ?>
								                    				</h5>
								                    			</div>
							                    			</div>
								                    		<hr>
								                    		<div class="col-md-12">
								                    			<a href="table-complaints.php">See complaints</a>
								                    		</div>
							                    		</div>
							                    	</div>
							                    </div>
											</div>

											<div class="col-md-3">
							                    <div class="card box">
							                    	<div class="card-header text-center" style="padding: 0px;">
							                    		<div class="col-md-12">
							                    			<div class="col-md-12 bg-success box" style="margin-top: -10px;">
							                    				<h5 class="text-white">Concern Reports</h5>
							                    			</div>
							                    			<div class="row">
								                    			<div class="col-md-12 text-left">
								                    				<h5 class="text-black" style="font-size: 19px;">Total Concern Reports</h5>
								                    				<h5 class="text-right">
													                    <?php
													                      $result = mysqli_query($conn, "SELECT * FROM tbl_concerns");
													                      echo mysqli_num_rows($result);
													                    ?>
													                </h5>
								                    			</div>
							                    			</div>
								                    		<hr>
								                    		<div class="col-md-12">
								                    			<a href="table-concerns.php">See concern reports</a>
								                    		</div>
							                    		</div>
							                    	</div>
							                    </div>
											</div>

											<div class="col-md-3">
							                    <div class="card box">
							                    	<div class="card-header text-center" style="padding: 0px;">
							                    		<div class="col-md-12">
							                    			<div class="col-md-12 bg-warning box" style="margin-top: -10px;">
							                    				<h5 class="text-white">Suggestions</h5>
							                    			</div>
							                    			<div class="row">
								                    			<div class="col-md-12 text-left">
								                    				<h5 class="text-black">Total Suggestions</h5>
								                    				<h5 class="text-right">
													                    <?php
													                      $result = mysqli_query($conn, "SELECT * FROM tbl_suggestions");
													                      echo mysqli_num_rows($result);
													                    ?>
													                </h5>
								                    			</div>
							                    			</div>
								                    		<hr>
								                    		<div class="col-md-12">
								                    			<a href="table-suggestions.php">See Suggestions</a>
								                    		</div>
							                    		</div>
							                    	</div>
							                    </div>
											</div>


											<div class="col-md-3" style="margin-top: 50px;">
							                    <div class="card box">
							                    	<div class="card-header text-center" style="padding: 0px;">
							                    		<div class="col-md-12">
							                    			<div class="col-md-12 bg-dark box" style="margin-top: -10px;">
							                    				<h5 class="text-white">Categories</h5>
							                    			</div>
							                    			<div class="row">
								                    			<div class="col-md-12 text-left">
								                    				<h5 class="text-black">Total Suggestions</h5>
								                    				<h5 class="text-right">
													                    <?php
													                      $result = mysqli_query($conn, "SELECT * FROM tbl_complain_categories");
													                      echo mysqli_num_rows($result);
													                    ?>
													                </h5>
								                    			</div>
							                    			</div>
								                    		<hr>
								                    		<div class="col-md-12">
								                    			<a href="categories.php">Edit Categories</a>
								                    		</div>
							                    		</div>
							                    	</div>
							                    </div>
											</div>




										</div>
									</div>
									<div class="card-footer" style="background-color: white;">
										<h6>Laguna Police Department</h6>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	  </section>
	  	<!-- - - - - -end- - - - -  -->

	<!-- <?php include '../includes/footer.php'; ?> -->
	</div>
	<?php include '../includes/loader.php'; ?>
</body>
<?php include '../includes/cores.php'; ?>