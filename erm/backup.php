<?php include '../includes/links.php'; ?>
<body>
		
  	<div class="main-section">

    	<!-- START nav -->
    	<?php include '../includes/nav.php'; ?>
    	<!-- END nav -->

	  	<section class="hero-wrap" style="background-image: url(../images/bg.jpeg); height: 400px;">
	  		<div class="overlay"></div>
	  		<div class="container collapse">
	  			<div class="row description align-items-center justify-content-center">
	  				<div class="col-md-8 text-center">
	  					<div class="text">
	  						<h2 class="mb-5">PROJECT KIOSK</h2>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  	</section>

	  	<section class="ftco-section bg-light" id="cards">
			<div class="container card-styles">
				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="icon-wrap px-4 pt-4">
								<div class="icon d-flex justify-content-center align-items-center bg-info rounded-circle">
									<span class="fa fa-envelope text-dark"></span>
								</div>
							</div>
						  <div class="card-body pb-5 px-4">
						    <h5 class="card-title">Complaints</h5>
						    <a href="#" class="btn btn-info btn-lg text-uppercase">Make complaints</a>
						  </div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<div class="icon-wrap px-4 pt-4">
								<div class="icon d-flex justify-content-center align-items-center bg-success rounded-circle">
									<span class="fa fa-exclamation text-dark"></span>
								</div>
							</div>
						  <div class="card-body pb-5 px-4">
						    <h5 class="card-title">Crime</h5>
						    <a href="#" class="btn btn-success btn-lg text-uppercase">Report Crime</a>
						  </div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<div class="icon-wrap px-4 pt-4">
								<div class="icon d-flex justify-content-center align-items-center bg-warning rounded-circle">
									<span class="fa fa-archive text-dark"></span>
								</div>
							</div>
						  <div class="card-body pb-5 px-4">
						    <h5 class="card-title">Suggestion</h5>
						    <a href="#" class="btn btn-warning btn-lg text-uppercase">Send Suggestion</a>
						  </div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<div class="icon-wrap px-4 pt-4">
								<div class="icon d-flex justify-content-center align-items-center bg-danger rounded-circle">
									<span class="fa fa-comment text-dark"></span>
								</div>
							</div>
						  <div class="card-body pb-5 px-4">
						    <h5 class="card-title">Concerns</h5>
						    <a href="#" class="btn btn-danger btn-lg text-uppercase">Send Concerns</a>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
	  	<!-- - - - - -end- - - - -  -->

	<?php include '../includes/footer.php'; ?>
	</div>
	<?php include '../includes/loader.php'; ?>
</body>
<?php include '../includes/cores.php'; ?>