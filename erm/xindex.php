<?php
	include '../includes/links.php';
	session_start();
	if (isset($_GET['logout'])) {
		if ($_GET['logout'] == 'yes') {
			unset($_SESSION['id']);
		}
	}
?>


<body>
		
  	<div class="main-section">

    	<!-- START nav -->
    	<?php include '../includes/nav.php'; ?>
    	<!-- END nav -->

	  	<section class="hero-wrap" style="background-image: url(../images/bg.jpeg); height: 380px;">
	  		<div class="overlay"></div>
	  		<div class="container collapse">
	  			<div class="row description align-items-center justify-content-center">
	  				<div class="col-md-8 text-center">
	  					<div class="text">
	  						<img src="../images/e-logo.png" style="width:100%;">
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  	</section>

	  	<section class="ftco-section bg-light" id="cards">
			<div class="container card-styles">
				<div class="row text-center">
					<div class="col-md-3">
	                    <div class="card" style="padding: 10px;">
	                        <a href="form-crimes.php">
	                            <figure class="figure">
	                                <img class="img-fluid" src="../images/crime.jpg" alt="Card image cap">
	                                <figcaption class="figure-caption">
	                                    <h3 class="figure-title">Crimes</h3>	
	                                </figcaption>
	                            </figure>
	                        </a>
	                    </div>
					</div>
					<div class="col-md-3">
	                    <div class="card" style="padding: 10px;">
	                        <a href="form-complaints.php">
	                            <figure class="figure">
	                                <img class="img-fluid" src="../images/complaint.jpg" alt="Card image cap">
	                                <figcaption class="figure-caption">
	                                    <h3 class="figure-title">Complaints</h3>	
	                                </figcaption>
	                            </figure>
	                        </a>
	                    </div>
					</div>
					<div class="col-md-3">
	                    <div class="card" style="padding: 10px;">
	                        <a href="form-concerns.php">
	                            <figure class="figure">
	                                <img class="img-fluid" src="../images/concern.jpg" alt="Card image cap">
	                                <figcaption class="figure-caption">
	                                    <h3 class="figure-title">Concerns</h3>	
	                                </figcaption>
	                            </figure>
	                        </a>
	                    </div>
					</div>
					<div class="col-md-3">
	                    <div class="card" style="padding: 10px;">
	                        <a href="form-suggestions.php">
	                            <figure class="figure">
	                                <img class="img-fluid" src="../images/suggestion.jpg" alt="Card image cap">
	                                <figcaption class="figure-caption">
	                                    <h3 class="figure-title">Suggestions</h3>	
	                                </figcaption>
	                            </figure>
	                        </a>
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

