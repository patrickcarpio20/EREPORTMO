		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar" style="background-color: white;">
	    	<div class="container">
	      		<!-- <a class="navbar-brand text-dark" href="index.php">
				  <img src="../public/images/e-logo.png" style="width:10%;">
				  </a> -->
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="oi oi-menu"></span> Menu
			    </button>
	    		<?php if (isset($_SESSION['id'])): ?>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="dropdown nav-item">
							<a href="#" class="dropdown-toggle text-dark nav-link icon d-flex align-items-center" data-toggle="dropdown">
								<i class="ion-ios-apps mr-2"></i>
								Settings
								<b class="caret"></b>
							</a>
							<div class="dropdown-menu dropdown-menu-left">
								<a href="index.php" class="dropdown-item text-dark"> Home</a>
								<a href="dashboard.php" class="dropdown-item text-dark"> Dashboard</a>
								<a href="accounts.php" class="dropdown-item text-dark"> Accounts</a>
								<a href="../files/index.php?logout=yes" class="dropdown-item text-dark"> Logout</a>
							</div>
						</li>
					</ul>
				</div>

	    		<?php else: ?>
				    <div class="collapse navbar-collapse" id="ftco-nav">
				        <ul class="navbar-nav ml-auto">
				        	<li class="nav-item" style="width:100px;">
								<a href="index.php" style="color: #fff;">
									<i class="fa fa-home"></i>&nbsp;Home
								</a>
				            </li>

				            <li class="nav-item" style="width:200px;">
				            	<a href="verifyreport.php" style="color: #fff;">
				            		<i class="fa fa-phone"></i>&nbsp;Report Verification
				            	</a>
				            </li> 
				        </ul>
				    </div>
	    		<?php endif ?>
		  	</div>
	  	</nav>