<!-- 		<br>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar"style="background-color: #EDB248!important;">
	    	<div class="container">
	      		<a class="navbar-brand text-dark" href="index.php"><img src="../public/images/e-logo.png" alt="Urbanic Template" title="Urbanic Template" style="width:7%;"/></a>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="dropdown nav-item" style="padding-top: 10px; padding-left: 20px!important;">
							<a href="dashboard.php" style="color: white!important;"> Dashboard</a>
						</li>
						<li class="dropdown nav-item" style="padding-top: 10px;">
							<a href="map.php" style="color: white!important;"> Map</a>
						</li>
						<li class="dropdown nav-item">
							<a href="#" class="dropdown-toggle text-dark nav-link icon d-flex align-items-center" data-toggle="dropdown">
								<i class="ion-ios-apps mr-2"></i>
								Settings
								<b class="caret"></b>
							</a>
							<div class="dropdown-menu dropdown-menu-left">
								<a href="dashboard.php" class="dropdown-item text-dark"> Dashboard</a>
								<a href="accounts.php" class="dropdown-item text-dark"> Accounts</a>
								<a href="map.php" class="dropdown-item text-dark"> Map</a>
								<a href="#" class="dropdown-item text-dark"> My Account</a>
								<a href="../erm/index.php?logout=yes" class="dropdown-item text-dark"> Logout</a>
							</div>
						</li>
					</ul>
				</div>
		  	</div>
	  	</nav> -->


	  	<style type="text/css">
	  		@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');



:focus{
  outline:none;
}



a{
  text-decoration: none;
  color:white;
  cursor:pointer;
}

nav{
  display:flex;
  flex-wrap:wrap;
  background-color:#EDB248;
  padding:0 8%;
  justify-content:space-between;
  backdrop-filter:blur(5px);
}

.logo{
  font-family:'Pacifico', cursive;
  font-size:2rem;
  transition:color .3s ease;
}

.logo:hover, .logo:focus {
  color:#111;
}

ul{
  list-style:none;
  display:flex;
  align-items:center;
}

li{
  margin-left:2em;
}

.link{
   position:relative;
}

.link::after{
  content:"";
  display:block;  
  position:absolute;
  background-color:#444;
  width:100%;
  height:.2em;
  bottom:-.3em;
  left:0;
  border-radius:.1em;
  transform:scaleX(0);
  transition:transform .3s ease;
  transform-origin:right;
}

.link:hover::after, .link:focus::after   {
  transform:scaleX(1);
  transform-origin:left;
  color: white;
}



@media screen and (max-width:600px){
  
  
 
  ul{
    margin:6em 0;
    display:none;
    flex:100%;
  }
  
  li{
    margin-left:0;
    text-align:center;
    margin-bottom:3em;
  }
  
  #toggle:checked + ul{
    display:block;
  }
}
	  	</style>

	  	<nav>
  <img src="../public/images/e-logo.png" alt="Urbanic Template" title="Urbanic Template" style="width:5%;"/>
   <label aria-hidden="true" for="toggle"><i class="fas fa-bars" style="display: none;"></i></label>
  <input aria-hidden="true" name="toggle" id="toggle" type="checkbox" style="display: none;">
  <ul>
    <li><a class="link" href="dashboard.php">Dashboard</a></li>
    <li><a class="link" href="map.php">Map</a></li>
    <li><a class="link" href="accounts.php">Accounts</a></li>
    <li><a class="link" href="../erm/index.php?logout=yes">Logout</a></li>
  </ul>
</nav>